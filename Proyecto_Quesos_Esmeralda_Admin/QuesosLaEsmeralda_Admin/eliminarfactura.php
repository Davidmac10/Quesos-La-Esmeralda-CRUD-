<?php
    include("db.php");

    if(isset($_GET['id_fac'])){
        $id_fac = $_GET['id_fac'];

        $query = "DELETE FROM factura WHERE id_fac = $id_fac";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("No se elimino la factura correctamente");
        }

        header("Location: mostrarcompras.php");
    }
?>