<?php
    include ("db.php");

   if(isset($_POST['calcular'])){
       $fec_inv = $_POST['fec_inv'];
       $tip_inv = $_POST['tip_inv'];
       $ing_inv = $_POST['ing_inv'];
       $gas_inv = $_POST['gas_inv'];
       $gan_inv = $ing_inv - $gas_inv;
       $per_inv = $ing_inv - $gas_inv;

       $query = "INSERT INTO inventario (fec_inv, tip_inv, ing_inv, gas_inv, gan_inv, per_inv) VALUES ('$fec_inv',
       '$tip_inv','$ing_inv','$gas_inv','$gan_inv', '$per_inv')";
       $result = mysqli_query($conn, $query);
       if(!$result){
           die("No se registraron los datos correctamente");
       }

       header("Location: inventario.php");
   }
?>