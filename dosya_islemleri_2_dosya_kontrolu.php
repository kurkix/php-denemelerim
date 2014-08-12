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
$dosya1="denemelik.deneme.txt";
$dosya2=end(explode(".",$dosya1));
$dosya3=str_replace(".".$dosya2,"",$dosya1);
echo $dosya3;



echo "<br>";


echo "<hr>";
echo "Disklerin Toplam Boyutu"."<br>";
echo "C : ".round((disk_total_space("c:")/1073741824), 2)."GB"."<br>";
echo "D : ".round((disk_total_space("d:")/1073741824),2)."GB"."<br>";

echo "Disklerin Boş Alanları"."<br>";
echo "C : ".round((disk_free_space("c:")/1073741824),2)."GB"."<br>";
echo "D : ".round((disk_free_space("d:")/1073741824),2)."GB"."<br>";

echo "Disklerin Kullanılan Alanları"."<br>";
echo "C : ".round(((disk_total_space("c:")/1073741824)-(disk_free_space("c:")/1073741824)),2)."GB"."<br>";
echo "D : ".round((((disk_total_space("d:")/1073741824)-(disk_free_space("d:")/1073741824))),2)."GB"."<br>";








?>
</body>
</html>
