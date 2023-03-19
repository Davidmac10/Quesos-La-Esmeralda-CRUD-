<?php

    include("db.php");

    if(isset($_POST['login'])){
        $id_cli = $_POST['id_cli'];
        $pas_cli = $_POST['pas_cli'];

        $query = "SELECT COUNT(*) as contar FROM clientes WHERE id_cli = '$id_cli' and pas_cli = '$pas_cli' ";
        $result = mysqli_query($conn, $query);
        $array = mysqli_fetch_array($result);

        if($array['contar'] > 0){
            $_SESSION['username'] = $id_cli;
            header("Location: home.php");
        }else{
            header("Location: index.php");
        }
    }

?>

