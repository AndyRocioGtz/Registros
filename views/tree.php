<?php
//include our settings, connect to database etc.
include_once($_SERVER['DOCUMENT_ROOT'].'/openerp.class.php');
$pagetitle = "Registradores";
//and then call a template:
$tpl = "tree_view.php";
include("template.php");
?>
