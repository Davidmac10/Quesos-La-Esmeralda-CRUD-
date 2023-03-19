<?php
    include ("db.php");

    if(isset($_GET['id_pro'])){
        $id_pro = $_GET['id_pro'];

        $query = "DELETE FROM producto WHERE id_pro = $id_pro";
        $result = mysqli_query($conn, $query);

        if(!$result){
            die("El producto no se elimino correctamente");
        }

        header("Location: mostrarproductos.php");
    }
  
?>