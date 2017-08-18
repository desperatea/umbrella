<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Umbrella test job</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>


<?php
include "inc/cfg.php";
if(isset($_GET['url'])){
	$url= $_GET['url'];
}
if(isset($_GET['url2'])){
	$url2= $_GET['url2'];
}
echo '
<script type="text/javascript">
	function clear_field(id){
		id.value = "";
	}
</script>
<div class="container">
       
        <div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
		<form action="#" type="GET">
				<input type="text" class="url" value="Введите URL" name="url" size="25" onclick="clear_field(this)">
				 <div class="llink"><input type="text" class="url2" value="Введите желаемый короткий URL" name="url2" size="20" onclick="clear_field(this)">
				<input type="hidden" name="active" value="1">
				<input type="submit" class="submit" value="GO!"></div>
</form>
		
        ';

if($_GET['active'] == 1){
	
function generatePassword($length = 5){
  $chars = 'abdefhiknrstyz23456789';
  $numChars = strlen($chars);
  $string = '';
  for ($i = 0; $i < $length; $i++) {
    $string .= substr($chars, rand(1, $numChars) - 1, 1);
  }
  return $string;
}
if($url2 == "Введите желаемый короткий URL" OR empty($url2)){
$url2 = generatePassword(5);
}
 $sms_r = $pdo->prepare("SELECT * FROM main WHERE url2=:url2");
    $sms_r->execute(array(":url2" => $url2));
    $sms_c = $sms_r->fetchAll(PDO::FETCH_ASSOC);
    $sms = count($sms_c);
	



if ($sms == 0 && !empty($url)) {
 $stmt = $pdo->prepare("INSERT INTO main (url, url2) VALUES (:url, :url2)");
$stmt->bindParam(':url', $url);
$stmt->bindParam(':url2', $url2);
$stmt->execute();
}
else{
print "<span class='false'>Вы не ввели URl, либо указанная короткая ссылка занята</span>";
}
if($stmt == true){
	$f_url = "l/index.php?l=".$url2;
echo "<span class='true'>Успешно добавлено, ваша ссылка:</span><a href='l/index.php?l=".$url2."'>".$url2."</a>";

}

}
echo '
</div>
<div class="col-md-2"></div>
	</div>
</div>';
//<a href='l/index.php?l=".$url2."'>".$url2."</a>
?>

</body>

</html>