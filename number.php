<!DOCTYPE html>
<html>
<head>
<title>NUMBER</title>
</head>
<body>
<?php
for ($i = 1; $i <= 100; $i++) {
	echo $i;
	if ($i % 4 == 0) {
		echo 'twice';
	}
	echo '<br>';
}
?>
</body>
</html>
