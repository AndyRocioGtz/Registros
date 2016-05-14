<div class="container">
	<div class="in">
		<br>
	    <h2 align="center">Estrados</h2>
	    <hr>
	    <p><br><br>
		<div class="col-lg-4">
<?php
    $municipios = array(
	    '1' => 'ABASOLO',
	    '2' => 'ACAMBARO',
	    '3' => 'SAN MIGUEL DE ALLENDE',
	    '4' => 'APASEO EL ALTO',
	    '5' => 'APASEO EL GRANDE',
	    '6' => 'ATARJEA',
	    '7' => 'CELAYA',
	    '8' => 'CD. MANUEL DOBLADO',
	    '9' => 'COMONFORT',
	   '10' => 'CORONEO',
	   '11' => 'CORTAZAR',
	   '12' => 'CUERAMARO',
	   '13' => 'SAN JOSE ITURBIDE',
	   '14' => 'DOLORES HIDALGO C.I.N.',
	   '15' => 'GUANAJUATO',
	   '16' => 'HUANIMARO',
	   '17' => 'IRAPUATO',
	   '18' => 'JARAL DEL PROGRESO',
	   '19' => 'JERECUARO',
	   '20' => 'LEON',
	   '21' => 'MOROLEON',
	   '22' => 'OCAMPO',
	   '23' => 'PENJAMO',
	   '24' => 'PUEBLO NUEVO',
	   '25' => 'PURISIMA DEL RINCON',
	   '26' => 'ROMITA',
	   '27' => 'SALAMANCA',
	   '28' => 'SALVATIERRA',
	   '29' => 'SAN DIEGO DE LA UNION',
	   '30' => 'SAN FELIPE',
	   '31' => 'SAN FRANCISCO DEL RINCON',
	   '32' => 'SAN JOSE ITURBIDE',
	   '33' => 'SAN LUIS DE LA PAZ',
	   '34' => 'SANTA CATARINA',
	   '35' => 'SANTA CRUZ DE JUVENTINO ROSAS',
	   '36' => 'SANTIAGO MARAVATIO',
	   '37' => 'SILAO',
	   '38' => 'TARANDACUAO',
	   '39' => 'TARIMORO',
	   '40' => 'TIERRA BLANCA',
	   '41' => 'URIANGATO',
	   '42' => 'VALLE DE SANTIAGO',
	   '43' => 'VICTORIA',
	   '44' => 'VILLAGRAN',
	   '45' => 'XICHU',
	   '46' => 'YURIRIA',
	   '97' => 'PRUEBAS MUN',
	   '98' => 'PRUEBAS PJ');
    echo "<select name='select_municipios' class='btn btn-default btn-md'>
				<option value='-1'>Seleccionar municipio...</option>";
		foreach ($municipios as $id_mun => $value) {
			echo "<option value='". $id_mun . "'>" . $value . "</option>";
		}
	echo "</select>";
?>
        
        <br>
        <br>
        <table border="1">
        	<tr>
        		<td colspan="2">
        		   <br>Municipio:  <label name="mun_label"> </label>
        		</td>
        	</tr>
        	<tr>
        		<td>
        			<form id="form1" name="form1" method="post" action="#">
        				<table>
        					<tr>
        						<td>
        							Fecha de Resolución:
        						</td>
        						<td>
        							<input type='date' id='fechaResol' name='fechaResol' value='' />
        						</td>
        					</tr>
        					<tr>
        						<td colspan="2"><br>
        							<input type='submit' name='button' id='button' value='Mostrar Estrados' />
        						</td>
        					</tr>
        				</table>
        			</form>
        		</td>
        	</tr>
        </table>
    </div>
        <?php include("../dist/datatables/estrados/mapaEstrados.html");?>


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