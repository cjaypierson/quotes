<?php

define('TITLE', 'View all Quotes');
include('tem/header.php');

print '<h2>All Quotes</h2>';

admincheck();

include('inc/mysql_connect.php');
$query = 'SELECT quote_id, quote, q_source, favorite FROM quotes ORDER BY date_entered DESC';

if ($r = mysql_query($query, $dbc)) {
	
	while ($row = mysql_fetch_array($r)) {
		
		print "<div><blockquote>{$row['quote']}</blockquote>-{$row['q_source']}\n";
	
		if ($row['favorite'] == 1) {
			print '<strong>Favorite!</strong>';
		}

		print "<p><b>Quote Admin:</b> <a href=\"edit_quote.php?id={$row['quote_id']}\">Edit</a> <-> <a href=\"delete_quote.php?id={$row['quote_id']}\">Delete</a></p></div>\n";
	}

} else {
	print '<p class="error">Could not store the quote because:<br />' . mysql_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
}

mysql_close($dbc);
include('tem/footer.php'); 

?>