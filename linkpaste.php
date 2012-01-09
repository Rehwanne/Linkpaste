<?php
$daten = lesen();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Linkpaste</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.21" />
</head>

<body>
	<form action="post.php" method="GET">
	Beschreibung:<br>
	<input type="text" name="beschreibung"><br>
	Url:<br>
	<input type="text" name="link"><br>
	<input type="submit" name="sub" value="OK">
	</form>
	<?=$daten;?>
</body>

</html>
<?php
function lesen()
{	
	$file = 'urls';
	$lesen = fopen($file,'rb');
	$contents =  nl2br(fread($lesen, filesize($file)));
	return $contents;
	fclose($lesen);
}
?>
