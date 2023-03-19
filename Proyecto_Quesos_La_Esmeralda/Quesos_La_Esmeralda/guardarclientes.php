<?php

    include("db.php");

    if(isset($_POST['registrar'])){
        $id_cli = $_POST['id_cli'];
        $nom_cli = $_POST['nom_cli'];
        $ape_cli = $_POST['ape_cli'];
        $cor_cli = $_POST['cor_cli'];
        $tel_cli = $_POST['tel_cli'];
        $dir_cli = $_POST['dir_cli'];
        $fecnac_cli = $_POST['fecnac_cli'];
        $pas_cli = $_POST['pas_cli'];

        $query = "INSERT INTO clientes (id_cli, nom_cli, ape_cli, cor_cli, tel_cli, dir_cli, fecnac_cli, pas_cli) VALUES ('$id_cli','$nom_cli',
        '$ape_cli','$cor_cli','$tel_cli','$dir_cli','$fecnac_cli', '$pas_cli')";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Query Failed");
        }
        
        header("Location: signup.php");
    }
    
?>