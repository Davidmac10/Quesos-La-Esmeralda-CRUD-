<?php
    include ("db.php");

    if(isset($_GET['id_pro'])){
        $id_pro = $_GET['id_pro'];

        $query = "SELECT * FROM producto WHERE id_pro = $id_pro";
        $result = mysqli_query($conn, $query);
        
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $id_pro = $row['id_pro'];
            $nom_pro = $row['nom_pro'];
            $mar_pro = $row['mar_pro'];
            $pre_pro = $row['pre_pro'];
            $fecven_pro = $row['fecven_pro'];
        }
    }

    if(isset($_POST['update_pro'])){
        $id_pro = $_GET['id_pro'];
        $nom_pro = $_POST['nom_pro'];
        $mar_pro = $_POST['mar_pro'];
        $pre_pro = $_POST['pre_pro'];
        $fecven_pro = $_POST['fecven_pro'];

        $query = "UPDATE producto set nom_pro = '$nom_pro', mar_pro = '$mar_pro', pre_pro = '$pre_pro', fecven_pro = '$fecven_pro' WHERE id_pro = $id_pro";
        $result = mysqli_query($conn, $query);

        header("Location: mostrarproductos.php");

    }
?>

<?php
    include ("includes/header.php")
?>

<article class="article_productos">
    <section class="section_productos">
        <h3>Actualizar Productos</h3>
            <form action="editarproductos.php?id_pro=<?php echo $_GET['id_pro'];?>" method="POST">
                <input class="inputproductos" type="number" name="id_pro" value="<?php echo $id_pro?>" placeholder="<?php echo $id_pro?>" readonly>
                <input class="inputproductos" type="text" name="nom_pro" value="<?php echo $nom_pro?>" placeholder="Actualiza el Nombre del producto">
                <input class="inputproductos" type="text" name="mar_pro" value="<?php echo $mar_pro?>" placeholder="Actualiza la Marca del producto">
                <input class="inputproductos" type="number" name="pre_pro" value="<?php echo $pre_pro?>" placeholder="Actualiza el Precio del producto">
                <input class="inputproductos" type="date" name="fecven_pro" value="<?php echo $fecven_pro?>">
                <input class="sendproductos" type="submit" name="update_pro" value="Actualizar Producto" onclick="editardatos()">
            </form>
    </section>
</article>

<?php
    include ("includes/footer.php")
?>
