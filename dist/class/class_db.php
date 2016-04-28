<?php
class Datos
{
	public $mun;
	public $db;
	
	function saludo($var)
	{
		return 'Hola: '.$var;
	}
	// **************************************************************************************************************************
	function query($sql)
	{
		$funcion = 'query_'.$this->db;
		return $this->$funcion($sql);
	}
	// **************************************************************************************************************************
	function fetch_array($res)
	{
		$funcion = 'fetch_array_'.$this->db;
		return $this->$funcion($res);
	}
	// **************************************************************************************************************************
	function num_rows($res)
	{
		$funcion = 'num_rows_'.$this->db;
		return $this->$funcion($res);
	}
	// **************************************************************************************************************************
	function insert_id($res)
	{
		$funcion = 'insert_id_'.$this->db;
		return $this->$funcion($res);	
	}
	// **************************************************************************************************************************
	function con_oracle()
	{
		$mun = $this->mun;
		$usr = $this->getOficina($mun);
		$pas = $this->getLogin($mun);
		$ip  = $this->getIP($mun);
		$SID = $this->getSID($mun);
	
		if($mun >= 97)
		{
			$usr = "USER03";
			$pas = "1";
		}
		else
		{
			$pas = "1";
		}
	
		$db  = "(DESCRIPTION =(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = ".$ip.")(PORT = 1521)))(CONNECT_DATA =(SID = ".$SID.")(SERVER = DEDICATED)))";
		$con = oci_connect($usr, $pas, $db);    
		//echo "Datos: ".$mun.'/'.$db;
		if (!$con) 
		{
			$e = oci_error();
			trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
		}
		return $con;
	}
	/********************************************************************************************************/
	function query_oracle($sql)
	{
		if(!$con = $this->con_oracle())
		{
			return 0;
		}
		else
		{
			$res = oci_parse($con, $sql);
			oci_execute($res);
			oci_close($con);
			return $res;
		}
	}
	/********************************************************************************************************/
	function fetch_array_oracle($res)
	{
		return oci_fetch_array($res, OCI_BOTH);
	}
	/********************************************************************************************************/
	function num_rows_oracle($res)
	{
		return oci_num_rows($res);
	}
	/********************************************************************************************************/
	function getOficina($idMun)
	{
		if ($idMun == '1')  { $cOficina='PUBL23';}
		if ($idMun == '2')  { $cOficina='ERPP02';}
		if ($idMun == '3')  { $cOficina='PUBL03';}
		if ($idMun == '4')  { $cOficina='PUBL05';}
		if ($idMun == '5')  { $cOficina='PUBL05';}
		if ($idMun == '6')  { $cOficina='PUBL32';}
		if ($idMun == '7')  { $cOficina='PUBL07';}
		if ($idMun == '8')  { $cOficina='PUBL31';}
		if ($idMun == '9')  { $cOficina='PUBL09';}
		if ($idMun == '10') { $cOficina='ERPP02';}
		if ($idMun == '11') { $cOficina='PUBL11';}
		if ($idMun == '12') { $cOficina='JHR17';}
		if ($idMun == '13') { $cOficina='PUBL32';}
		if ($idMun == '14') { $cOficina='PUBL14';}
		if ($idMun == '15') { $cOficina='PUBL15';}
		if ($idMun == '16') { $cOficina='PUBL23';}
		if ($idMun == '17') { $cOficina='JHR17';}
		if ($idMun == '18') { $cOficina='PUBL42';}
		if ($idMun == '19') { $cOficina='ERPP02';}
		if ($idMun == '20') { $cOficina='PUBL20';}
		if ($idMun == '21') { $cOficina='PUBL21';}
		if ($idMun == '22') { $cOficina='PUBL30';}
		if ($idMun == '23') { $cOficina='PUBL23';}
		if ($idMun == '24') { $cOficina='JHR17';}
		if ($idMun == '25') { $cOficina='PUBL31';}
		if ($idMun == '26') { $cOficina='PUBL37';}
		if ($idMun == '27') { $cOficina='PUBL27';}
		if ($idMun == '28') { $cOficina='PUBL28';}
		if ($idMun == '29') { $cOficina='PUBL14';}
		if ($idMun == '30') { $cOficina='PUBL30';}
		if ($idMun == '31') { $cOficina='PUBL31';}
		if ($idMun == '32') { $cOficina='PUBL32';}
		if ($idMun == '33') { $cOficina='PUBL33';}
		if ($idMun == '34') { $cOficina='PUBL32';}
		if ($idMun == '35') { $cOficina='PUBL35';}
		if ($idMun == '36') { $cOficina='PUBL28';}
		if ($idMun == '37') { $cOficina='PUBL37';}
		if ($idMun == '38') { $cOficina='ERPP02';}
		if ($idMun == '39') { $cOficina='PUBL28';}
		if ($idMun == '40') { $cOficina='PUBL32';}
		if ($idMun == '41') { $cOficina='PUBL41';}
		if ($idMun == '42') { $cOficina='PUBL42';}
		if ($idMun == '43') { $cOficina='PUBL33';}
		if ($idMun == '44') { $cOficina='PUBL11';}
		if ($idMun == '45') { $cOficina='PUBL33';}
		if ($idMun == '46') { $cOficina='PUBL46';}
		if ($idMun == '97') { $cOficina='USER03';}
		if ($idMun == '98') { $cOficina='USER03';}
		return $cOficina;
	}
	/********************************************************************************************************/
	function getLogin($idMun)
	{
		/*
		if ($idMun == '27' or $idMun=='35' or $idMun = '17' or $idMun = '12' or $idMun = '24') 
		{ 
			$cKeyLog = 'KJB2A0P';
		}
		else 
		{ 
			$cKeyLog = 'SEGURE2003';
		}
		if ($idMun == '98') 
		{ 
			$cKeyLog = '1';
		}
		*/
		switch($idMun)
		{
			case 12:
			case 17:
			case 24:
			case 27:
				$cKeyLog = 'KJB2A0P';
				break;
			case 97:
			case 98:
				$cKeyLog = '1';
			default:
				$cKeyLog = 'SEGURE2003';
		}
		return $cKeyLog;
	}
	/********************************************************************************************************/
	function getIP($idMun)
	{
		switch($idMun)
		{
			case 7:
			case 20:
				$ip = '10.254.47.10'; 
				break;
			case 12:
			case 17:
			case 24:
			case 27:
				$ip = "scanvip.rpp.local";
				$ip = '10.200.2.10';
				break;
			default:
				$ip = '10.254.47.3';
		}
		return $ip;
	}
	/********************************************************************************************************/
	function getSID($idMun)
	{
		switch($idMun)
		{
			case 7:
			case 20:
				$SID = 'INFO';
				break;
			case 12:
			case 17:
			case 24:
			case 27:
				$SID = 'INFO1';
				break;
			default:
				$SID = 'info';
		}
		return $SID;
	}
	/********************************************************************************************************/
	/********************************************************************************************************/
	//Función que nos retornara una conexión con mysqli
	function con_mysql()
	{
		if (getenv('HTTP_X_FORWARDED_FOR')) 
		{
			$ip = getenv('HTTP_X_FORWARDED_FOR');
		} 
		else 
		{
			$ip = getenv('REMOTE_ADDR');
		}
		//Datos para la conexión con el servidor
		$servidor   = "10.200.2.54";
		$nombreBD   = "notarios";
		$usuario    = "rppfiel";
		$contrasena = "kjb2a0p";
		//Creando la conexión, nuevo objeto mysqli
		$conexion = new mysqli($servidor,$usuario,$contrasena,$nombreBD);
		//Si sucede algún error la función muere e imprimir el error
		if($conexion->connect_error)
		{
			die("Error en la conexion : ".$conexion->connect_errno."-".$conexion->connect_error);
		}
		//Si nada sucede retornamos la conexión
		return $conexion;
	}
	/********************************************************************************************************/
	function query_mysql($sql)
	{
		try
		{
			$con = $this->con_mysql();
			$res = $con->query($sql);
			$con->close();
			return $res;
		}
		catch(Exception $e)
		{
			echo $e;
			$con->close();
			return false;
		}
	}
	/********************************************************************************************************/
	function fetch_array_mysql($res)
	{
		return $res->fetch_array(MYSQLI_BOTH);
	}
	/********************************************************************************************************/
	function num_rows_mysql($res)
	{
		return $res->num_rows;
	}
	/********************************************************************************************************/
	function insert_id_mysql($sql)
	{
		try
		{
			$con = $this->con_mysql();
			$con->query($sql);
			$id = $con->insert_id;
			$con->close();
			return $id;
		}
		catch(Exception $e)
		{
			echo $e;
			$con->close();
			return false;
		}
	}
	/********************************************************************************************************/
	/********************************************************************************************************/
}
?>