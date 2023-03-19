<?php
    include("db.php");

    if(isset($_GET['id_adm'])){
        $id_adm = $_GET['id_adm'];
        $query = "DELETE FROM administrador WHERE id_adm = $id_adm";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("El registro no se elimino correctamente");
        }

        header("Location: mostraradministrador.php");
    }
?>

