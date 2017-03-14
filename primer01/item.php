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
	if($_GET["id"] == $i){
?>
			<li><a href="/item.php?id=<?=$i?>">Item <?=$i;?></a></li>
<?php
	}
}
?>
		</ul>
	</body>
</html>
