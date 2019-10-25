<!DOCTYPE html>
<html>
<head>
<title>NUMBER</title>
</head>
<body>
<?php
for ($i = 1; $i <= 100; $i++) {
	echo $i;
	if ($i % 3 == 0 || $i % 7 == 0) {
		echo 'GUEST';
	}
	echo '<br>';
}
?>
</body>
</html>
