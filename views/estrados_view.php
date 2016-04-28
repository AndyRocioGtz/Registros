<div class="container">
	<div class="in">
<?php
    function getNomMunicipio($idMun)
	{
	   if ($idMun ==  '1') { $nomMunicipio='ABASOLO';}
	   if ($idMun ==  '2') { $nomMunicipio='ACAMBARO';}
	   if ($idMun ==  '3') { $nomMunicipio='SAN MIGUEL DE ALLENDE';}
	   if ($idMun ==  '4') { $nomMunicipio='APASEO EL ALTO';}
	   if ($idMun ==  '5') { $nomMunicipio='APASEO EL GRANDE';}
	   if ($idMun ==  '6') { $nomMunicipio='ATARJEA';}
	   if ($idMun ==  '7') { $nomMunicipio='CELAYA';}
	   if ($idMun ==  '8') { $nomMunicipio='CD. MANUEL DOBLADO';}
	   if ($idMun ==  '9') { $nomMunicipio='COMONFORT';}
	   if ($idMun == '10') { $nomMunicipio='CORONEO';}
	   if ($idMun == '11') { $nomMunicipio='CORTAZAR';}
	   if ($idMun == '12') { $nomMunicipio='CUERAMARO';}
	   if ($idMun == '13') { $nomMunicipio='SAN JOSE ITURBIDE';}
	   if ($idMun == '14') { $nomMunicipio='DOLORES HIDALGO C.I.N.';}
	   if ($idMun == '15') { $nomMunicipio='GUANAJUATO';}
	   if ($idMun == '16') { $nomMunicipio='HUANIMARO';}
	   if ($idMun == '17') { $nomMunicipio='IRAPUATO';}
	   if ($idMun == '18') { $nomMunicipio='JARAL DEL PROGRESO';}
	   if ($idMun == '19') { $nomMunicipio='JERECUARO';}
	   if ($idMun == '20') { $nomMunicipio='LEON';}
	   if ($idMun == '21') { $nomMunicipio='MOROLEON';}
	   if ($idMun == '22') { $nomMunicipio='OCAMPO';}
	   if ($idMun == '23') { $nomMunicipio='PENJAMO';}
	   if ($idMun == '24') { $nomMunicipio='PUEBLO NUEVO';}
	   if ($idMun == '25') { $nomMunicipio='PURISIMA DEL RINCON';}
	   if ($idMun == '26') { $nomMunicipio='ROMITA';}
	   if ($idMun == '27') { $nomMunicipio='SALAMANCA';}
	   if ($idMun == '28') { $nomMunicipio='SALVATIERRA';}
	   if ($idMun == '29') { $nomMunicipio='SAN DIEGO DE LA UNION';}
	   if ($idMun == '30') { $nomMunicipio='SAN FELIPE';}
	   if ($idMun == '31') { $nomMunicipio='SAN FRANCISCO DEL RINCON';}
	   if ($idMun == '32') { $nomMunicipio='SAN JOSE ITURBIDE';}
	   if ($idMun == '33') { $nomMunicipio='SAN LUIS DE LA PAZ';}
	   if ($idMun == '34') { $nomMunicipio='SANTA CATARINA';}
	   if ($idMun == '35') { $nomMunicipio='SANTA CRUZ DE JUVENTINO ROSAS';}
	   if ($idMun == '36') { $nomMunicipio='SANTIAGO MARAVATIO';}
	   if ($idMun == '37') { $nomMunicipio='SILAO';}
	   if ($idMun == '38') { $nomMunicipio='TARANDACUAO';}
	   if ($idMun == '39') { $nomMunicipio='TARIMORO';}
	   if ($idMun == '40') { $nomMunicipio='TIERRA BLANCA';}
	   if ($idMun == '41') { $nomMunicipio='URIANGATO';}
	   if ($idMun == '42') { $nomMunicipio='VALLE DE SANTIAGO';}
	   if ($idMun == '43') { $nomMunicipio='VICTORIA';}
	   if ($idMun == '44') { $nomMunicipio='VILLAGRAN';}
	   if ($idMun == '45') { $nomMunicipio='XICHU';}
	   if ($idMun == '46') { $nomMunicipio='YURIRIA';}
	   if ($idMun == '97') { $nomMunicipio='PRUEBAS MUN';}
	   if ($idMun == '98') { $nomMunicipio='PRUEBAS PJ';}
	   return $nomMunicipio;
	}
?>

	<h1>Estrados</h1>
	<p>
	<?php
					



		echo "<table border=1><tr><td colspan=2>";
		echo "<br>Municipio: ".getNomMunicipio($_GET["municipio"]).'</td></tr>';
		echo '<tr><td>';
		echo "<form id='form1' name='form1' method='post' action='#' >";
		echo "    <table><tr>";
		echo "           <td colspan=2><input type=hidden id='municipio' name='municipio' value='".$_GET['municipio']."' /></td></tr>";
		echo "       <tr><td>Fecha de resoluci&oacute;n</td><td><input type='date' id='fechaResol' name='fechaResol' value='".$_GET['fechaResol']."' /></td></tr>";
		echo "       <tr><td colspan=2 align=center><br><input type='submit' name='button' id='button' value='Mostrar Estrados' /></td></tr>";
		echo "    </table>";
		echo "</form>";
		echo "</td></tr>";
		echo "<tr><td>&nbsp;";
	//echo '<br>'.$_POST['fechaResol']. ' '.date('Y-m-d');
	
    if ($_POST['fechaResol'] <> "" and $_POST['fechaResol'] < date('Y-m-d') ) 
	{
		$dFechaResol = $_POST['fechaResol'];
		$nmun = str_pad($_POST['municipio'],2,'0',STR_PAD_LEFT);
		
		$destinoSubName = 'e_'.substr($dFechaResol,0,4).substr($dFechaResol,5,2).substr($dFechaResol,8,2);   
		$destinoBase = 'erpp/ftpdocs/oficinasRPP/estrados/'.$nmun."/";
		$archivo = "/".$destinoSubName.".pdf";
		$ruta = 'estrados/'.$nmun;
		//echo 'w:/'.$destinoBase.$destinoSubName.'.pdf<br>';
		//secho "/doctos/ESTRADOS/".$nmun."/".$destinoSubName.".pdf";
		
		//E:\w_doctos\edoctos\2016\04\20\ESTRADOS
		$file = "w:/edoctos/".substr($dFechaResol,0,4).'/'.substr($dFechaResol,5,2)."/".$nmun."/ESTRADOS".$archivo;
		//http://erpp.guanajuato.gob.mx/edoctos/2016/04/20/estrados/e_20160401.pdf
		$url = "http://erpp.guanajuato.gob.mx/edoctos/".substr($dFechaResol,0,4).'/'.substr($dFechaResol,5,2)."/".$nmun."/ESTRADOS".$archivo;
		//echo $file;
		if (!file_exists($file))
		{
			echo "<br>No disponibles los estrados. [".$dFechaResol.']';
//			echo '<br>'.$destinoBase.$destinoSubName;
		} 
		else
		{
			//echo "<a href='/doctos/ESTRADOS/".$nmun."/".$destinoSubName.".pdf'>Ver Reporte del ".substr($dFechaResol,8,2).'-'.substr($dFechaResol,5,2).'-'.substr($dFechaResol,0,4)."</a>";
			echo "<a href=".$url." target=new>Ver Reporte del ".substr($dFechaResol,8,2).'-'.substr($dFechaResol,5,2).'-'.substr($dFechaResol,0,4)."</a>";
		}
		//echo "termina busqueda";
	}
	echo "</td></tr><table>";
	echo "<br><a href='index.php'>Mapa Estatal</a>";
	
  
?>


	</div> <!-- IN -->
</div><!-- CONTAINER -->