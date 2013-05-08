<?php
$dbc = mysql_connect('localhost:3306', 'cameron', 'summer05');
	if (!$dbc) {
		print('something went wrong');
	}
mysql_select_db('myquotes', $dbc);
?>