<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>matematik</title>
</head>

<body>

<?php
$deger1= 6;
$deger2="4";
$deger3="1";


echo $deger1 + $deger2."<br>";
echo $deger1 - $deger2."<br>";
echo $deger1 / $deger2."<br>";
echo $deger1 * $deger2."<br>";
echo $deger1 % $deger2."<br>";


echo $_SERVER["SERVER_NAME"]."<br>";
echo $_SERVER["REQUEST_METHOD"]."<br>";
echo $_SERVER["SERVER_PROTOCOL"]."<br>";
echo $_SERVER["SERVER_SOFTWARE"]."<br>";
echo $_SERVER["HTTP_ACCEPT"]."<br>";
echo $_SERVER["HTTP_ACCEPT_LANGUAGE"]."<br>";
echo $_SERVER["HTTP_CONNECTION"]."<br>";
echo $_SERVER["HTTP_USER_AGENT"]."<br>";
echo $_SERVER["HTTP_ACCEPT_ENCODING"]."<br>";
echo $_SERVER["DOCUMENT_ROOT"]."<br>";



echo abs(-5)."<br>";
echo acos(1)."<br>";
echo acos($deger3)."<br>";
echo round(3.34562,1)."<br>";
echo ceil(1.5)."<br>";
echo floor(1.5)."<br>";
echo exp(2)."<br>";
echo exp($deger1)."<br>";
echo getrandmax()."<br>";
echo rand()."<br>";
echo mt_rand()."<br>";
echo log($deger1)."<br>";
echo sqrt(4)."<br>";
echo pi()."<br>";

if (is_int($deger1)) {
	echo "rakamdır";
}
else {
	echo "rakam değil";
}

echo "<br>";
if (is_int($deger2)) {
	echo "rakamdır";
}
else {
	echo "rakam degildir";
}


	


?>
</body>
</html>
