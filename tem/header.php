<?php 
include('inc/functions.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTDXHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/ ➝1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" ➝ content="text/html; charset=utf-8" />
	<link rel="stylesheet" media= ➝"all" href="css/style.css" />
	<title>
		<?php 
			if (defined('TITLE')) {
				print TITLE;
			} else {
				print 'Super Quotes';
			}
		?>
	</title>
</head>
<body>
	<div id="container">
		<h1>Super Quotes</h1>
		<br />
		<!-- BEGIN CHANGEABLE CONTENT. -->	