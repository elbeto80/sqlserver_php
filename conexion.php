<?php
// $serverName = "DESKTOP-EDOS2CO"; //serverName\instanceName
// $connectionInfo = array( "Database"=>"bibliotecas", "UID"=>"sa", "PWD"=>"sa");
// $conn = sqlsrv_connect( $serverName, $connectionInfo );

// if( $conn ) {
//      echo "Conexión establecida.<br />";
// }else{
//      echo "Conexión no se pudo establecer.<br />";
//      die( print_r( sqlsrv_errors(), true));
// }


	$serverName 	= 'DESKTOP-EDOS2CO';  //Instancia del SQL Server

	$conectionInfo	= array("Database"=>'bibliotecas', "UID"=>"sa", "PWD"=>"sa");
	/*
		Datos para la conexión
		Database => Bases de datos a la q nos vamos a conectar
		UID => Usuario para conectar. Al SQL Server hay q habilitar q se puede conectar con los dos metodos
		PWD => Clave de coneción al SQL Server
	*/

	$conexion_sql 	= sqlsrv_connect($serverName, $conectionInfo);

	if(!$conexion_sql) {
		echo "<b>Conexión Fallida</b><br>";
		die( print_r(sqlsrv_errors(), true));
	} 

?>