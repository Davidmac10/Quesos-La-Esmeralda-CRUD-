<?php

    include("db.php");

    if(isset($_POST['login'])){
        $id_adm = $_POST['id_adm'];
        $pas_adm = $_POST['pas_adm'];

        $query = "SELECT COUNT(*) as contar FROM administrador WHERE id_adm = '$id_adm' AND pas_adm = '$pas_adm' ";
        $result = mysqli_query($conn, $query);
        $array = mysqli_fetch_array($result);

        if($array['contar'] > 0){
            $_SESSION['useradmin'] = $id_adm;
            header("Location: home.php");
        }else{
            header("Location: index.php");
        }
    }

?>



