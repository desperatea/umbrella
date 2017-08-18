<?php
require_once "../inc/cfg.php";
if(isset($_GET['l'])){
	$l= $_GET['l'];	
}

$sth = $pdo->query("SELECT * FROM main WHERE url2 = '$l'");

$result = $sth->fetch(PDO::FETCH_ASSOC);

$counter = $result['counter'];
$counter++;
$sth = $pdo->query("UPDATE main SET counter = $counter WHERE url2 = '$l'");
$site = explode("://", $result['url']);

if (isset($site[1])){
header('Location: http://'.$site[1]);
}
else{
	header('Location: http://'.$site[0]);
}
?>