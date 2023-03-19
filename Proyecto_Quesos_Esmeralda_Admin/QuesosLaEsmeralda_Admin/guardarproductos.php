<?php

    include ("db.php");

    if(isset($_POST['guardarproducto'])){
        $nom_pro = $_POST['nom_pro'];
        $mar_pro = $_POST['mar_pro'];
        $pre_pro = $_POST['pre_pro'];
        $fecven_pro = $_POST['fecven_pro'];

        $query = "INSERT INTO producto (nom_pro, mar_pro, pre_pro, fecven_pro) VALUES ('$nom_pro','$mar_pro','$pre_pro','$fecven_pro')";
        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query Failed");
        }

        header("Location: productos.php");
    }
?>



