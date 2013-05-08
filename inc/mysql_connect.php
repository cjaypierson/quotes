<?php
$dbc = mysql_connect('localhost', 'pierson3_cameron', 'Summer9(');
	if (!$dbc) {
		print('********** something went wrong **********');
	}
mysql_select_db('myquotes', $dbc);
?>