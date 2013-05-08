<?php
	/* Logout page destroys the cookie */

if(isset($_COOKIE['Samuel'])) {
	setcookie('Samuel', FALSE, time()-300);
}

define('TITLE', 'Logout');
include('tem/header.php');
print '<p>You are now logged out.</p>';
include('tem/footer.php');

?>