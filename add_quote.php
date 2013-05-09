<?php
define('TITLE', 'Add a Quote');
include('tem/header.php');
print '<h2>Add a Quotation</h2>';


if (!is_administrator()) {
	print '<h2>Access Denied!</h2>
		<p class="error">You have to <a href="login.php">login</a> to view this page.</p>';
	include('tem/footer.php');
	exit();
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (!empty($_POST['quote']) && !empty($_POST['source']) ) {

		include('inc/mysql_connect.php');

		$quote = mysql_real_escape_string(trim(strip_tags($_POST['quote'])), $dbc);
		$source = mysql_real_escape_string(trim(strip_tags($_POST['source'])), $dbc);

		if (isset($_POST['favorite'])) {
			$favorite = 1;
		} else {
			$favorite = 0;
		}

		$query = "INSERT INTO quotes (quote, q_source, favorite) VALUES ('$quote', '$source', '$favorite')";
		$r = mysql_query($query, $dbc);

		if (mysql_affected_rows($dbc) == 1) {
			print '<p>Your quotation has been stored.</p>';
		} else {
			print '<p class="error">Could not store the quote because:<br />' . mysql_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
		}

		mysql_close($dbc);

	} else {
		print '<p class="error">Please enter a quotation and a source.</p>';
	}
}

?>

<form action="add_quote.php" method="post">
	<p><label>Quote <textarea name="quote" rows="5" cols="30"></textarea></label></p>
	<p><label>Source <input type="text" name="source" /></label></p>
	<p><label>Is this a favorite? <input type="checkbox" name="favorite" /></label></p>
	<p><input type="submit" name="submite" value="Add Your Quote" /></p>
</form>

<?php include('tem/footer.php'); ?>