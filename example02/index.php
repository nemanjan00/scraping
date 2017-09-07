<?php
$id = 0;

if(isset($_GET["id"])){
	$id = $_GET["id"];
}
?>
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
			<li>Item <?=$id * 10 + $i;?></li>
<?php
}
?>
		</ul>
<?php
if($id < 10){
?>
		<a href="/?id=<?=$id + 1;?>">Next page</a>
<?php
}
?>
	</body>
</html>
