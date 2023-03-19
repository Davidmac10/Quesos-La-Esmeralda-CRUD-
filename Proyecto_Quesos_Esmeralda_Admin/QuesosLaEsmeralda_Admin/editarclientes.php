<?php

include("db.php");

if(isset($_GET['id_cli'])){
    $id_cli = $_GET['id_cli'];
    $query = "SELECT * FROM clientes WHERE id_cli = $id_cli";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $id_cli = $row['id_cli'];
        $nom_cli = $row['nom_cli'];
        $ape_cli = $row['ape_cli'];
        $cor_cli = $row['cor_cli'];
        $tel_cli = $row['tel_cli'];
        $dir_cli = $row['dir_cli'];
        $fecnac_cli = $row['fecnac_cli'];
        $pas_cli = $row['pas_cli'];
    }
}

if(isset($_POST['update'])) {
    $id_cli = $_GET['id_cli'];
    $nom_cli = $_POST['nom_cli'];
    $ape_cli = $_POST['ape_cli'];
    $cor_cli = $_POST['cor_cli'];
    $tel_cli = $_POST['tel_cli'];
    $dir_cli = $_POST['dir_cli'];
    $fecnac_cli = $_POST['fecnac_cli'];
    $pas_cli = $_POST['pas_cli'];
    
    $query = "UPDATE clientes set id_cli = '$id_cli', nom_cli = '$nom_cli', ape_cli = '$ape_cli', cor_cli = '$cor_cli', tel_cli = '$tel_cli',
    dir_cli = '$dir_cli', fecnac_cli = '$fecnac_cli', pas_cli = '$pas_cli' WHERE id_cli = $id_cli";
    $result = mysqli_query($conn, $query);

    header("Location: mostrarclientes.php");

}

?>

<?php

    include ("includes/header.php")

?>

<article class="article_register-index">
    <section class="section_register-index">
        <h5>Actualizar</h5>
            <form class="form_register" action="editarclientes.php?id_cli=<?php echo $_GET['id_cli']; ?>" method="POST">
            <input class="input_register-index" type="number" name="id_cli" value="<?php echo $id_cli;?>" placeholder="Actualiza tu Numero  de Identificacion" required>
            <input class="input_register-index" type="text" name="nom_cli" value="<?php echo $nom_cli;?>" placeholder="Actualiza tus nombres" required>
            <input class="input_register-index" type="text" name="ape_cli" value="<?php echo $ape_cli;?>" placeholder="Actualiza tus apellidos" required>
            <input class="input_register-index" type="email" name="cor_cli" value="<?php echo $cor_cli;?>" placeholder="Actualiza tu correo electronico" required>
            <input class="input_register-index" type="tel" name="tel_cli" value="<?php echo $tel_cli;?>" placeholder="Actualiza tu telefono" required>
            <input class="input_register-index" type="text" name="dir_cli" value="<?php echo $dir_cli;?>" placeholder="Actualiza tu direccion" required>
            <input class="input_register-index" type="date" name="fecnac_cli" value="<?php echo $fecnac_cli;?>" placeholder="Actualiza tu fecha de nacimiento" required>
            <input class="input_register-index" type="password" name="pas_cli" value="<?php echo $pas_cli;?>" placeholder="Actualiza tu contraseña" required>
            <input class="button_register-index" type="submit" name="update" value="Actualizar" onclick="editardatos()">
        </form>
    </section>
</article>

<?php

    include ("includes/footer.php")

?>