<!-- END CHANGEABLE CONTENT -->
<?php
	if ( (is_administrator() && (basename($_SERVER['PHP_SELF']) != 'logout.php')) OR (isset($loggedin) && $loggedin) ) {
		print '<hr /><h3>Site Admin</h3>
				<p><a href="add_quote.php">Add Quote</a> <->
				<a href="view_quotes.php">View Quotes</a> <->
				<a href="logout.php">Logout</a></p>';
	}
?>

	</div><!-- containiner -->
	<div id="footer">Content @ 2013</div>
</body>
</html>