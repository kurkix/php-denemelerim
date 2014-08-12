<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$baglanti=fopen("deneme.txt","a+");

echo round((filesize("deneme.txt")/1024),1)."MB";

echo "<br>".date("d M Y H:i:s.", fileatime("deneme.txt"));

fclose($baglanti);
echo "<br>";

$liste=glob("*.php");
foreach($liste as $dosya) {
echo $dosya."<br>";
}

rename("dosyaislemleri2.php", "dosya_islemleri2.php");


$liste=glob("*.php");
foreach($liste as $dosya) {
echo $dosya."<br>";
}


?>
</body>
</html>
