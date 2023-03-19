<?php
    include ("db.php");

    if(isset($_GET['id_inv'])){
        $id_inv = $_GET['id_inv'];

        $query = "DELETE FROM inventario WHERE id_inv = $id_inv";
        $result = mysqli_query($conn, $query);

        if(!$result){
            die("No se elimino el inventario correctamente");
        }

        header("Location: mostrarinventario.php");
    }
?>