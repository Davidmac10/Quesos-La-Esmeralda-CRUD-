<?php
    include("db.php");

    if(isset($_GET['id_adm'])){
        $id_adm = $_GET['id_adm'];
        $query = "SELECT * FROM administrador WHERE id_adm = $id_adm";
        $result = mysqli_query($conn, $query); 
        
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $id_adm = $row['id_adm'];
            $nom_adm = $row['nom_adm'];
            $ape_adm = $row['ape_adm'];
            $cor_adm = $row['cor_adm'];
            $tel_adm = $row['tel_adm'];
            $dir_adm = $row['dir_adm'];
            $fecnac_adm = $row['fecnac_adm'];
            $pas_adm = $row['pas_adm'];
        }
    }

    if(isset($_POST['updateadm'])){
        $id_adm = $_GET['id_adm'];
        $nom_adm = $_POST['nom_adm'];
        $ape_adm = $_POST['ape_adm'];
        $cor_adm = $_POST['cor_adm'];
        $tel_adm = $_POST['tel_adm'];
        $dir_adm = $_POST['dir_adm'];
        $fecnac_adm = $_POST['fecnac_adm'];
        $pas_adm = $_POST['pas_adm'];

        $query = "UPDATE administrador set id_adm ='$id_adm', nom_adm ='$nom_adm', ape_adm ='$ape_adm', cor_adm ='$cor_adm', tel_adm ='$tel_adm',
        dir_adm ='$dir_adm', fecnac_adm ='$fecnac_adm', pas_adm ='$pas_adm' WHERE id_adm = $id_adm";
        $result = mysqli_query($conn, $query);

        header("Location: mostraradministrador.php");
    } 

?>

<?php
    include ("includes/header.php")
?>

<article class="article_register-index">
  <section class="section_register-index">
    <h5>Actualizar</h5>
    <form class="form_register" action="editaradministrador.php?id_adm=<?php echo $_GET['id_adm']; ?>" method="POST">
      <input class="input_register-index" type="number" name="id_adm" value="<?php echo $id_adm?>" placeholder="Actualiza tu Numero  de Identificacion" required>
      <input class="input_register-index" type="text" name="nom_adm" value="<?php echo $nom_adm?>" placeholder="Actualiza tus nombres" required>
      <input class="input_register-index" type="text" name="ape_adm" value="<?php echo $ape_adm?>" placeholder="Actualiza tus apellidos" required>
      <input class="input_register-index" type="email" name="cor_adm" value="<?php echo $cor_adm?>" placeholder="Actualiza tu correo electronico" required>
      <input class="input_register-index" type="tel" name="tel_adm" value="<?php echo $tel_adm?>" placeholder="Actualiza tu telefono" required>
      <input class="input_register-index" type="text" name="dir_adm" value="<?php echo $dir_adm?>" placeholder="Actualiza tu direccion" required>
      <input class="input_register-index" type="date" name="fecnac_adm" value="<?php echo $fecnac_adm?>" placeholder="Actualiza tu fecha de nacimiento" required>
      <input class="input_register-index" type="password" name="pas_adm" value="<?php echo $pas_adm?>" placeholder="Actualiza tu contraseña" required>
      <input class="button_register-index" type="submit" name="updateadm" value="Actualizar" onclick="editardatos()">
    </form>
  </section>
</article>

<?php
    include ("includes/footer.php")
?>