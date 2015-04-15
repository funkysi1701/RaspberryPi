<!DOCTYPE html>
<html>
<head>
<title>Photos</title>
</head>
<body>
<a href="<?php
$min = substr($_SERVER["QUERY_STRING"],-6,2);
$hour = substr($_SERVER["QUERY_STRING"],-8,2);
$min = $min - 2;
if($min < 0) {
	$min = 58;
	$hour = $hour -1;
}
if($min < 10) $min = "0".$min;
echo "?".date("Y-m-d")."_".$hour.$min.".jpg";
?>">< Prev</a>
<img src="<?php echo $_SERVER["QUERY_STRING"];
?>" id="frame" width="700px" />
<a href="<?php
$min = substr($_SERVER["QUERY_STRING"],-6,2);
$hour = substr($_SERVER["QUERY_STRING"],-8,2);
$min = $min + 2;
if($min < 10) $min = "0".$min;
if($min > 58) {
	$min = "00";
	$hour = $hour + 1;
}
echo "?".date("Y-m-d")."_".$hour.$min.".jpg";
?>">Next ></a>
<span></span>
</body>
</html>
