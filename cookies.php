<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<? ob_start(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>cookies</title>
</head>
<?php

setcookie("ilk_kuki",md5("1"));

echo $_COOKIE["ilk_kuki"];





?> 

<body>
</body>
</html>
<? ob_end_flush(); ?>
