<?php
    include("db.php");

    if(isset($_POST['comprar'])){
        $fec_fac = $_POST['fec_fac'];
        $id_cli_fac = $_POST['id_cli_fac'];
        $id_adm_fac = 102365447;
        $formpay_fac = $_POST['formpay_fac'];
        $id_pro_fac = $_POST['id_pro_fac'];
        $canpro_fac = $_POST['canpro_fac'];

        $query = "INSERT INTO factura (fec_fac, id_cli_fac, id_adm_fac, formpay_fac, id_pro_fac, canpro_fac) VALUES ('$fec_fac','$id_cli_fac',
        '$id_adm_fac','$formpay_fac','$id_pro_fac','$canpro_fac')";
        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query Failed");
        }

        header("Location: compra.php");
    }
?>

