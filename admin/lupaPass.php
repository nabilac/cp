<?php
	if(!empty($_POST["lupa_password"])){
		$conn = mysql_connect("localhost", "root", "", "cp");
		
		$condition = "";
		if(!empty($_POST["email"])) {
			$condition = " email = '" . $_POST["email"] . "'";
		}
		
		if(!empty($condition)) {
			$condition = " where " . $condition;
		}

		$sql = "Select * from users " . $condition;
		$result = mysql_query($conn,$sql);
		$user = mysql_fetch_array($result);
		
		if(!empty($user)) {
			require_once("forgot-password-recovery-mail.php");
		} else {
			$error_message = 'No User Found';
		}
	}
?>