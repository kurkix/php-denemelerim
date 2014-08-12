<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$baglanti=fopen("deneme.txt","r");
while(!feof($baglanti)) {
	echo fread($baglanti,1024);
}
fclose($baglanti);

$baglanti=fopen("deneme.txt","r");
while(!feof($baglanti)) {
	echo "<br>".fgets($baglanti);
	
}
fclose($baglanti);


echo "<br>";

readfile("deneme.txt");


echo "<br>";

$baglanti=fopen("deneme.txt","a+");
while (!feof($baglanti)) {
	fputs($baglanti,"Veri kaydetmek.");
	fputs($baglanti, "<br>");
	fgets($baglanti);
}
fclose($baglanti);

?>
</body>
</html>
