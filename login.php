<?php
/* This page lets people log into the site */
 $loggedin = false;
 $error = false;

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {

 	if (!empty($_POST['email']) && !empty($_POST['password'])) {
 		if (strtolower($_POST['email']) == 'admin@piersons.me'  && $_POST['password'] == 'password') {
 			setcookie('Samuel', 'Clemens', time()+3600);
 			$loggedin = true;
 		} else {
 			$error = "The submitted email address and password are incorrect.";
 		}
 	} else {
 		$error = "Please make sure you enter an email address and a password.";
 	}
 }

 define('TITLE', 'LOGIN');
 include('tem/header.php');

 if ($error) {
 	print '<p class = "error">' . $error . '</p>';
 }

 if ($loggedin) {
 	print '<p>You are now logged in!</p>';
 } else {
 	print '<h2>Login Form</h2>
 		<form action="login.php" method="post">
 		<p><label>Email address<input type="text" name="email" /></label></p>
 		<p><label>Password<input type="password" name="password" /></label></p>
 		<p><input type="submit" name="submit" value="Login" /></p>
 		</form>';
 }

 include('tem/footer.php');

 ?>