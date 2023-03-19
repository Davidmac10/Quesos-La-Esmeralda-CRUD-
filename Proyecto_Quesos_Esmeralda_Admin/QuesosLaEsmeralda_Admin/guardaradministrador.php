<?php

include ("db.php");

if(isset($_POST['sendadmin'])){
    $id_adm = $_POST['id_adm'];
    $nom_adm = $_POST['nom_adm'];
    $ape_adm = $_POST['ape_adm'];
    $cor_adm = $_POST['cor_adm'];
    $tel_adm = $_POST['tel_adm'];
    $dir_adm = $_POST['dir_adm'];
    $fecnac_adm = $_POST['fecnac_adm'];
    $pas_adm = $_POST['pas_adm'];

    $query = "INSERT INTO administrador VALUES('$id_adm','$nom_adm','$ape_adm','$cor_adm','$tel_adm','$dir_adm','$fecnac_adm','$pas_adm')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die ("No se insertaron los datos corectamente");
    }

    header("Location: signup.php");
}

?>