<div class="container">
	<div class="in">
	<?php
		require_once "../dist/class/class_db.php";

		$oDB = new Datos();
		$oDB->db = 'mysql';

		$sql = '
			select n.id, concat_ws(" ", n.nombre, n.appat, n.apmat) as nombre, n.no_not, m.nombre, n.nombre, n.estatus
			from `not` n, municipio m
			where n.municipio = m.no_mun and estatus = 1
			order by nombre
		';

		$res = $oDB->query($sql);
		?>
		 <!-- <link rel="stylesheet" href="../dist/css/bootstrap.min.css"> -->

		 
		<style>
		button.detalles 
		{
		    background: url('../dist/datatables/images/details_open.png') no-repeat center center;
		    cursor: pointer;
		    height:30px;
		    width:30px;
		}
		tr.shown button.detalles 
		{
		    background: url('../dist/datatables/images/details_close.png') no-repeat center center;
		}
		</style>
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->


		<div class="col-md-12">
		    <h2 align="center">Notarios Públicos del Estado de Guanajuato</h2>
		    <div class="panel panel-default">
		        <div class="panel-heading">&nbsp;</div>
		        <div class="panel-body table-responsive">
		            <table id="notarios" class="display" cellspacing="0" width="100%">
		                <thead>
		                    <tr>
		                        <th>&nbsp;</th>
		                        <th>ID</th>
		                        <th>Nombre</th>
		                        <th>Notaría</th>
		                        <th>Municipio</th>
		                    </tr>
		                </thead>
		                <tbody>
		                    <?php
		                        while($row = $oDB->fetch_array($res))
		                        {
		                            echo '<tr>';
		                            echo '<td><button class="detalles btn btn-default"></button></td>';
		                            echo '<td>'.$row['0'].'</td>';
		                            echo '<td>'.$row['1'].'</td>';
		                            echo '<td align="center">'.$row['2'].'</td>';
		                            echo '<td>'.$row['3'].'</td>';
		                            echo '</tr>';
		                        }
		                    ?>
		                </tbody>
		            </table>
		        </div>
		    </div>
		</div>
    


		<!-- // <script type="text/javascript" src="js/jquery.min.js"></script> -->
		
		<!-- // <script type="text/javascript" src="datatables/js/jquery.dataTables.js"></script> -->
		
		<script>
		$(document).ready(function() 
		{
		    var table = $('#notarios').DataTable(
		    {
		        "sPaginationType": "full_numbers",
		        "language": 
		        {
		            "lengthMenu": "&nbsp;&nbsp;Ver:  _MENU_ notari@s",
		            "zeroRecords": "No se encontraron resultados",
		            "info": "&nbsp;&nbsp;Resultados del <b>_START_</b> al <b>_END_</b> de un total de <b>_TOTAL_</b> notari@(s)",
		            "infoEmpty": "",
		            "infoFiltered": ""
		        },
		        "order": [[ 2, 'asc' ]],
		        "aoColumnDefs": 
		        [
		            { "targets": [ 0 ], "orderable": false, "searchable": false },
		            { "targets": [ 1 ], "visible": false, "searchable": false },
		        ],
		    });
		    /***************************************************************************************************************************/
		    $('#notarios tbody').on('click', 'button', function () 
		    {
		        var inf;
		        var data = table.row($(this).parents('tr')).data();
		        id = data[1];
		        consulta(id, function(res)
		        {
		            if(res)
		            {
		                inf = res;
		            }
		        });
		        inf = jQuery.parseJSON(inf);
		        var tr = $(this).closest('tr');
		        var row = table.row(tr);
		        if (row.child.isShown()) 
		        {
		            row.child.hide();
		            tr.removeClass('shown');
		        }
		        else 
		        {
		            row.child(domicilio(inf)).show();
		            tr.addClass('shown');
		        }
		    });
		    /***************************************************************************************************************************/
		});
		/*-----------------------------------------------------------------------------------------------------------------------------*/
		function consulta(id, res)
		{
		    $.ajax({
		        type		: "POST",
		        url			: "datos_not.php",
		        async		: false,
		        data		: { id : id },
		        success		: function(data)
		        {
		            res(data);				
		        }
		    });
		    return res;
		}
		/*-----------------------------------------------------------------------------------------------------------------------------*/
		function domicilio(d) 
		{
		    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
		        '<tr>'+
		            '<td>Domicilio:</td>'+
		            '<td>'+d[0]+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>Teléfono:</td>'+
		            '<td>'+d[1]+'</td>'+
		        '</tr>'+
		    '</table>';
		}
		</script>


	</div> <!-- IN -->
</div><!-- CONTAINER -->