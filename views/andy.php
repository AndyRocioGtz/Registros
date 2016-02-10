<?php
    
    //Conector Odoo-PHP
    //---------------------------------------------------------------//
    include_once('../openerp.class.php');

    $rpc = new OpenERP();

    $rpc->login("admin", "admin", "registro", "localhost:8069/xmlrpc/");
    //---------------------------------------------------------------//


    // SEARCH
    
    $domain=Array(
    );
    
    $users_directory=Array(
        Array('directorio', 'like', 'res.users')
    );
    
    $office_ids = $rpc->search('registros.directorio', 'partido.judicial', $domain, $users_directory);
    echo 'Resultado del SEARCH:<br />';
    print_r($office_ids);

    echo "<br/>";

    // READ-----
    $fields = array(
        'id','name','municipio_id','telefono_rp', 'tel_particular', 'correo'
    );
    $result = $rpc->read($office_ids, $fields, "registros.directorio", "partido.judicial");


    echo 'Resultado del READ:<br />';
    echo "<table> <thead> <tr><th> Nombre </th> <th>municipio_id</th> <th>telefono_rp </th> 
          <th>tel_particular </th> <th>correo </th> </tr><thead/>
          <tbody>";

    foreach ($result as $p){
      echo "<tr>";
      echo "<td>" . $p['name'] . "</td>" . "<td>" . $p['municipio_id'][0]. "</td>" . "<td>" .$p['telefono_rp'] . "</td>" . "<td>" . $p['tel_particular'] .  "</td>" . "<td>" . $p['correo'] . "</td>";
      echo "</tr>";
    }
    echo "</tbody>, </table>";

    

    $new_filter=Array(
        'municipio_id'
    );

    $oficina_id = $rpc->search('partido.judicial', $new_filter);
    echo 'Busqueda de Oficinas por Nombre:<br />';
    print_r($oficina_id);

    // READ
    $fields = array(
        'id','name','ref'
    );
    $oficina = $rpc->read($office_ids, $fields, "registros.directorio");

    echo 'READ PARTNERS:<br />';
    foreach ($partners as $p){
        echo $p['ref'] . ' - ' . $p['name']. '<br />';
    }

?>

