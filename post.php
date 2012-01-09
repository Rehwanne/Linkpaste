<?php
if($_GET['sub'] == 'OK')
{
$url = $_GET['link'];
$beschreibung = $_GET['beschreibung'];
schreiben();

}
unset($_GET);
header('location:linkpaste.php');
?>
<!DOCTYPE html>

<?php
function schreiben()
{
global  $url,$beschreibung;
if(!empty($url)&&!empty($beschreibung))
{
$file = fopen('urls','a+');
$urleins = 'http://';
if(!eregi('^http:\/\/',$url))
{
	$urleins .= $url;
}
else 
{
	$urleins = $url;
}
fwrite($file,"<a href=\"".$urleins."\">".$beschreibung."</a>\n");
fclose($file);
  
}
}
?>
