<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>saat kaç</title>
</head>

<body>
<?php
echo "Bugün Günlerden Ne? : ".date("l");
echo "<br>";
echo "Haftanın Hangi Günündeyiz? : ".date("N");
echo "<br>";
echo "Yılın Kaçıncı Günündeyiz? : ".date("z");
echo "<br>";
echo "Yılın Kaçıncı Haftasındayız? :".date("W");
echo "<br>";
echo "Hangi Aydayız? :".date("F");
echo "<br>";
echo "Hangi Yıldayız? : ".date("Y");

echo "<hr>";
echo "Saat:".date("G").".".date("i").":".date("s");
echo "<br>";

echo "Zaman Dilimi :".date("P");
?>
</body>
</html>
