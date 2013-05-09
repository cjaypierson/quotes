<?php

function is_administrator($name = 'Samuel', $value = 'Clemens') {
	if (isset($_COOKIE[$name]) && ($_COOKIE[$name] == $value)) {
		return true;
	} else {
		return false;
	}
}

function admincheck() {
	if (!is_administrator()) {
		print '<h2>Access Denied!</h2>
			<p class="error">You have to <a href="login.php">login</a> to view this page.</p>';
		include('tem/footer.php');
		exit();
	}
}

?>