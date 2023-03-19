<?php
    include ("db.php");

    if(isset($_POST['enviarpqrs'])){
        $fec_pqrs = $_POST['fec_pqrs'];
        $id_cli_pqrs = $_POST['id_cli_pqrs'];
        $des_pqrs = $_POST['des_pqrs'];

        $query = "INSERT INTO pqrs (fec_pqrs, id_cli_pqrs, des_pqrs) VALUES ('$fec_pqrs','$id_cli_pqrs','$des_pqrs')";
        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Su PQRS No se envio correctamente");
        }

        header("Location: contactanos.php");
    }
?>
