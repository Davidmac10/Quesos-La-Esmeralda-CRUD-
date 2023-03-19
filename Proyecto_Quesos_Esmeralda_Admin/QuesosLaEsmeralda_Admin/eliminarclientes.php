<?php

    include("db.php");

    if(isset($_GET['id_cli'])){
        $id_cli = $_GET['id_cli'];
        $query = "DELETE FROM clientes WHERE id_cli = $id_cli";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die ("Query Failed");
        }

        header("Location: mostrarclientes.php");
    }

?>

