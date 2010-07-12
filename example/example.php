<?php
// Load and create
require_once('../tiny_diff.php');
$tiny_diff = new Tiny_diff();

// Get the strings to compare
$string_1 = file_get_contents('file_1.txt');
$string_2 = file_get_contents('file_2.txt');

// Use
$difference = $tiny_diff->compare($string_1, $string_2, 'mixed');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<!-- Meta data -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Tiny Diff Example</title>

		<!-- CSS Stylesheets -->
		<link rel="stylesheet" href="css/reset.css" type="text/css" />
		<link rel="stylesheet" href="css/main.css" type="text/css" />
	</head>
	<body>
		<div id="diff">
			<code>
				<pre><?php echo $difference; ?></pre>
			</code>
		</div>
	</body>
</html>