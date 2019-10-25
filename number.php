<!DOCTYPE html>
<html>
<head>
<title>NUMBER</title>
</head>
<body>
<?php
for ($i = 1; $i <= 100; $i++) {
	echo $i;
	if ($i % 3 == 0 || $i % 5 == 0) {
		echo 'feel special';
	}
	echo '<br>';
}
?>
</body>
</html>
