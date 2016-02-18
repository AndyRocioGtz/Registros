<?php
//include our settings, connect to database etc.
 include_once($_SERVER['DOCUMENT_ROOT'].'/openerp.class.php');
$pagetitle = "v0.1";
$projectName = "Dirección General de Registros Públicos de la Propiedad y Notarías";

//and then call a template:
$tpl = "about_view.php";
include("template.php");
?>
	