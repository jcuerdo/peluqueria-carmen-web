<?php
include "config.php";
include("navegador.php");
$MobileDetect = new MobileDetect();
 
$page=isset($_REQUEST['p']) ? $_REQUEST['p'] : "index";
$movile=$MobileDetect->IsMobile();



include "secure.php";
include "loadpage.class.php";

$lp=new loadpage($page,$movile);
if($movile){
include "tmpl/tmpl.php";
}else{
include "tmpl/tmpl.php";
}
?>