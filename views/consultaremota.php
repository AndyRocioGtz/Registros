<?php
//include our settings, connect to database etc.
 include_once($_SERVER['DOCUMENT_ROOT'].'/openerp.class.php');
$pagetitle = "v0.1";
$projectName = "DGRPPYN";

//and then call a template:
$tpl = "consultaremota_view.php";
include("template.php");
?>