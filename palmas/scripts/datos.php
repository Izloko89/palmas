<?php
$dbnames=array(
	"local"=>"eventos",
	"eventos"=>"desarrollo_eventos",
	"palmas"=>"desarrollo_palmas",
	"gumpy"=>"desarrollo_gumpy",
	"procesa"=>"desarrollo_procesa2",
	"admone"=>"desarrollo_admone"
);

$a=explode(".",$_SERVER["HTTP_HOST"]);
$dbn=$dbnames[$a[0]];

$bbdd=array(
	"desarrollo"=>array(
		"dsnw"=>"mysql:host=localhost; dbname=$dbn; charset=utf8;",
		"userw"=>"desarrollo_write",
		"passw"=>"Writer1"
	),
	"leadon"=>array(
		"dsnw"=>"mysql:host=localhost; dbname=leadonco_eventos; charset=utf8;"
	),
	"eventos"=>array(
		"dsnw"=>"mysql:host=localhost; dbname=eventos; charset=utf8;",
		"userw"=>"desarrollo_write",
		"passw"=>"Writer1"
	),
	"palmas"=>array(
		"dsnw"=>"mysql:host=localhost; dbname=desarrollo_palmas; charset=utf8;",
		"userw"=>"desarrollo_write",
		"passw"=>"Writer1"
	),
);

$dsnw=$bbdd[$a[1]]["dsnw"];
$userw=$bbdd[$a[1]]["userw"];
$passw=$bbdd[$a[1]]["passw"];
$optPDO=array(PDO::ATTR_EMULATE_PREPARES=>false, PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);

//datos de servidor
@define("HOST",$_SERVER['HTTP_HOST']);
@define("LIGA","http://".$_SERVER['HTTP_HOST']."/");
?>