<?php

function is_administrator($name = 'Samuel', $value = 'Clemens') {
    if (!isset($_COOKIE[$name]) OR ($_COOKIE[$name] != $value)) {
        print '<h2>Access Denied!</h2>
        	<p class="error">You have to <a href="login.php">login</a> to view this page.</p>';
        include('tem/footer.php');
        exit();
    } else {
    	return true;
    }
}

?>