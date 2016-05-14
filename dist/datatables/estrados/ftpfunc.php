<?php
// 06-may-2013. E2. Funcion FechaArchivo.
// -----------------------------------------

define("MODO",true); //Activa modo pasivo

function ConectarFTP($servidor,$puerto,$usuario,$password){ 
  //Permite conectarse al Servidor FTP
  $id_ftp=@ftp_connect($servidor,$puerto); //Obtiene un manejador del Servidor FTP
  @ftp_login($id_ftp,$usuario,$password); //Se loguea al Servidor FTP
  @ftp_pasv($id_ftp,MODO); //Establece el modo de conexión
  return $id_ftp; //Devuelve el manejador a la función
}

function SubirArchivo($archivo_local,$archivo_remoto,$servidor,$puerto,$usuario,$password){
  //Sube archivo de la maquina Cliente al Servidor (Comando ftp_put)
  $id_ftp=ConectarFTP($servidor,$puerto,$usuario,$password); //Obtiene un manejador y se conecta al Servidor FTP 
  $quepaso=@ftp_put($id_ftp,$archivo_remoto,$archivo_local,FTP_BINARY); //Sube un archivo al Servidor FTP en modo Binario
  @ftp_quit($id_ftp); //Cierra la conexion FTP
  return $quepaso;
}

function ObtenerRuta($servidor,$puerto,$usuario,$password){
  //Obtiene ruta del directorio del Servidor FTP (Comando ftp_pwd)
  $id_ftp=ConectarFTP($servidor,$puerto,$usuario,$password); //Obtiene un manejador y se conecta al Servidor FTP 
  $Directorio=@ftp_pwd($id_ftp); //Devuelve ruta actual 
  @ftp_quit($id_ftp); //Cierra la conexion FTP
  return $Directorio; //Devuelve la ruta a la función
}

function MoverArchivo($origen,$destino,$servidor,$puerto,$usuario,$password){
  $id_ftp=ConectarFTP($servidor,$puerto,$usuario,$password); //Obtiene un manejador y se conecta al Servidor FTP 
  $quepaso=@ftp_rename($id_ftp, $origen, $destino);
  @ftp_quit($id_ftp); //Cierra la conexion FTP
  return $quepaso;
}

function BuscarArchivo($objetivo,$ruta,$servidor,$puerto,$usuario,$password){
  $id_ftp=ConectarFTP($servidor,$puerto,$usuario,$password); //Obtiene un manejador y se conecta al Servidor FTP 
  @ftp_chdir($id_ftp,$ruta); // Nos cambiamos de direcotorio
  $contenido = ftp_nlist($id_ftp, ".");
  if(in_array($objetivo, $contenido))
  {
	$quepaso = 1;
  }
  else
  {
	$quepaso = 0;
  }
  @ftp_quit($id_ftp); //Cierra la conexion FTP
  return $quepaso;	
}

function RenombraArchivo($anterior,$nuevo,$servidor,$puerto,$usuario,$password)
{
  $id_ftp=ConectarFTP($servidor,$puerto,$usuario,$password); //Obtiene un manejador y se conecta al Servidor FTP 
  $quepaso=ftp_rename($id_ftp,$anterior,$nuevo);
  ftp_quit($id_ftp); //Cierra la conexion FTP
  return $quepaso;	
}

function CambiarCarpeta($carpeta,$servidor,$puerto,$usuario,$password){
  $id_ftp=ConectarFTP($servidor,$puerto,$usuario,$password); //Obtiene un manejador y se conecta al Servidor FTP 
  $quepaso=@ftp_chdir($id_ftp,$carpeta); // Nos cambiamos de direcotorio
  @ftp_quit($id_ftp); //Cierra la conexion FTP
  return $quepaso;	
}

function CrearCarpeta($carpeta,$servidor,$puerto,$usuario,$password){
  $id_ftp=ConectarFTP($servidor,$puerto,$usuario,$password); //Obtiene un manejador y se conecta al Servidor FTP 
  $quepaso=@ftp_mkdir($id_ftp,$carpeta); // Nos cambiamos de direcotorio
  @ftp_quit($id_ftp); //Cierra la conexion FTP
  return $quepaso;	
}

function FechaArchivo($objetivo,$ruta,$servidor,$puerto,$usuario,$password){
	$id_ftp=ConectarFTP($servidor,$puerto,$usuario,$password); //Obtiene un manejador y se conecta al Servidor FTP 
	@ftp_chdir($id_ftp,$ruta); // Nos cambiamos de direcotorio
    $archivos = array();
	$contenido = ftp_rawlist ($id_ftp, ".");
    $a = 0;
	$encontrado =0;
	$fechaCreacion = '';
    if(count($contenido)){
        foreach($contenido as $linea){
			$archivo_valores = explode(" ", $linea);
				$meses = array("Jan" => "01",  "Feb" => "02",  "Mar" => "03",  "Apr" => "04", 
							    "May" => "05",  "Jun" => "06",  "Jul" => "07",  "Aug" => "08", 
							    "Sep" => "09",  "Oct" => "10",  "Nov" => "11",  "Dec" => "12"
				);
				echo '<br>'.$archivo_valores[17];
				if ($archivo_valores[17] == $objetivo)
				{
					$a++;
					$archivos[$a]['date_modified'] = date('Y').'-'.$meses[$archivo_valores[14]]."-".str_pad($archivo_valores[15],2,'0'). " ".$archivo_valores[16]."";
					$archivos[$a]['name'] = $archivo_valores[17];
					$fechaCreacion = $archivos[$a]['date_modified'];
					@ftp_quit($id_ftp); //Cierra la conexion FTP
					return $fechaCreacion;	
				} 
            }
        }
	@ftp_quit($id_ftp); //Cierra la conexion FTP
	return $fechaCreacion;	
}
?>