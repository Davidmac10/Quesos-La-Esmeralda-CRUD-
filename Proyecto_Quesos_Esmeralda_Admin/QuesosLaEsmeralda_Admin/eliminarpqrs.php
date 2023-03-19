<?php

include ("db.php");

if(isset($_GET['id_pqrs'])){
    $id_pqrs = $_GET['id_pqrs'];

    $query = "DELETE FROM pqrs WHERE id_pqrs = $id_pqrs";
    $result = mysqli_query($conn, $query);
     if(!$result){
        die("No se elimino el PQRS Correctamente");
    }


    header("Location: mostrarpqrs.php");
}

?>