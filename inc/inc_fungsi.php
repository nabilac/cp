<?php

function url_dasar(){
    $url_dasar  = "http://".$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']);
    return $url_dasar;
}

function ambil_gambar(){
    $data   = mysql_query("select * from halaman");
    $r   = mysql_fetch_array($data);
    $text = $r['gambar'];

    preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $text, $img);
    $gambar = $img[1];
    $gambar = str_replace("assets/images/",url_dasar()."/admin/assets/images/",$gambar);
    return $gambar;
}

function ambil_namacp(){
    $data=mysql_query("SELECT * from halaman");
    $r=mysql_fetch_array($data);
    $text = strip_tags($r['nama_cp']);
    return $text;
}

function ambil_judul(){
    $data=mysql_query("SELECT * from halaman");
    $r=mysql_fetch_array($data);
    $text = $r['judul'];
    return $text;
}

function ambil_isi(){
    $data=mysql_query("SELECT * from halaman");
    $r=mysql_fetch_array($data);
    $text = strip_tags($r['isi']);
    return $text;
}

function ambil_isiTentang1(){
    $data=mysql_query("SELECT * from tentang");
    $r=mysql_fetch_array($data);
    $text = strip_tags($r['isi1']);
    return $text;
}

function ambil_isiTentang2(){
    $data=mysql_query("SELECT * from tentang");
    $r=mysql_fetch_array($data);
    $text = strip_tags($r['isi2']);
    return $text;
}

function ambil_alamat(){
    $data=mysql_query("SELECT * from kontak");
    $r=mysql_fetch_array($data);
    $text = strip_tags($r['alamat']);
    return $text;
}

function ambil_email(){
    $data=mysql_query("SELECT * from kontak");
    $r=mysql_fetch_array($data);
    $text = strip_tags($r['email']);
    return $text;
}

function ambil_telp(){
    $data=mysql_query("SELECT * from kontak");
    $r=mysql_fetch_array($data);
    $text = strip_tags($r['telp']);
    return $text;
}

function ambil_twitter(){
    $data=mysql_query("SELECT * from kontak");
    $r=mysql_fetch_array($data);
    $text = strip_tags($r['link_twitter']);
    return $text;
}

function ambil_facebook(){
    $data=mysql_query("SELECT * from kontak");
    $r=mysql_fetch_array($data);
    $text = strip_tags($r['link_facebook']);
    return $text;
}

function ambil_instagram(){
    $data=mysql_query("SELECT * from kontak");
    $r=mysql_fetch_array($data);
    $text = strip_tags($r['link_instagram']);
    return $text;
}

function ambil_linkedin(){
    $data=mysql_query("SELECT * from kontak");
    $r=mysql_fetch_array($data);
    $text = strip_tags($r['link_linkedin']);
    return $text;
}



function bersihkan_judul($judul){
    $judul_baru     = strtolower($judul);
    $judul_baru     = preg_replace("/[^a-zA-Z0-9\s]/","",$judul_baru);
    $judul_baru     = str_replace(" ","-",$judul_baru);
    return $judul_baru;
}
function buat_link_halaman($id){
    global $koneksi;
    $sql1    = "select * from halaman where id = '$id'";
    $q1     = mysql_query($koneksi,$sql1);
    $r1     = mysql_fetch_array($q1);
    $judul  = bersihkan_judul($r1['judul']);
    // http://localhost/website-company-profile/halaman.php/8/judul
    return url_dasar()."/halaman.php/$id/$judul";
}

function dapatkan_id(){
    $id     ="";
    if(isset($_SERVER['PATH_INFO'])){
        $id = dirname($_SERVER['PATH_INFO']);
        $id = preg_replace("/[^0-9]/","",$id);
    }
    return $id;
}

function set_isi($isi){
    $isi    = str_replace("../gambar/",url_dasar()."/gambar/",$isi);
    return $isi;
}

function maximum_kata($isi,$maximum){
    $array_isi = explode(" ",$isi);
    $array_isi = array_slice($array_isi,0,$maximum);
    $isi = implode(" ",$array_isi);
    return $isi;
}