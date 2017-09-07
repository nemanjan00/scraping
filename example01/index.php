<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>Primer01</title>
	</head>
	<body>
		Sadrzaj
		<ul>
<?php
for($i = 1; $i <= 10; $i++){
?>
			<li><a href="/category.php?id=<?=$i?>">Category <?=$i;?></a></li>
<?php
}
?>
		</ul>
	</body>
</html>
