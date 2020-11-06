<?php 
    session_start();
    include("conexion.php");

    if( isset( $_GET['opcion'] ) && $_GET['opcion'] === 'consultar_autores' ) {
        // $sql = "select * from autores;";
        $sql = "exec SP_ConsultarAutores 'getAutores', '88'";
        $ejecutar = sqlsrv_query( $conexion_sql, $sql);

        $respuesa = [];
        while ($row = sqlsrv_fetch_array($ejecutar, SQLSRV_FETCH_ASSOC)) {
            // $respuesta[] = [
            //     'nombre1' => $row['nombre1'],
            //     'apellido1' => $row['apellido1'],
            //     'created_at' => $row['created_at']
            // ];
            $respuesta[] = $row;
        }
        sqlsrv_free_stmt($ejecutar);
        sqlsrv_close($conexion_sql);


        echo json_encode($respuesta);
    }
?>

