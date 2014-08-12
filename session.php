<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sezon</title>
</head>
<?php
session_start();
$_SESSION["ilk_sezon"]=md5("a");

echo $_SESSION["ilk_sezon"];

echo "<br>";

echo session_id();

echo "<br>";

if(session_destroy()){
	echo "Sezonlar silindi.";
}
else {
	echo "sezonlar silinemedi.";
}




?>
<body>
</body>
</html> 
