<?php 
include ("../dist/class/class_db.php");
$oDB = new Datos();
$oDB->db = 'mysql';
$id = $_POST['id'];

$sql = 'select concat_ws(" ",n.calle, n.colonia, n.num_ext), n.tel_not1 from `not` n, municipio m where n.municipio = m.no_mun and n.id = '.$id;

$res = $oDB->query($sql);

$row = $oDB->fetch_array($res);

echo json_encode($row);
?>