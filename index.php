<?php
//include our settings, connect to database etc.
 include_once($_SERVER['DOCUMENT_ROOT'].'/openerp.class.php');
$pagetitle = "v0.1";
$projectName = "DGRPPYN";
//and then call a template:
$tpl = "index_view.php";
include("views/template.php");
?>
	