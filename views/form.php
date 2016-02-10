<?php
//include our settings, connect to database etc.
include_once($_SERVER['DOCUMENT_ROOT'].'/openerp.class.php');
$pagetitle = "v0.1";
//and then call a template:
$tpl = "form_view.php";
include("template.php");
?>
