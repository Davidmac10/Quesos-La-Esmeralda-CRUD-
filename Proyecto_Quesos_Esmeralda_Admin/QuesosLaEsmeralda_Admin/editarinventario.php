<?php
    include("db.php");

    if(isset($_GET['id_inv'])){
        $id_inv = $_GET['id_inv'];

        $query = "SELECT * FROM inventario WHERE id_inv = $id_inv";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $id_inv = $row['id_inv']; 
            $fec_inv = $row['fec_inv']; 
            $tip_inv = $row['tip_inv']; 
            $ing_inv = $row['ing_inv']; 
            $gas_inv = $row['gas_inv']; 
            $gan_inv = $row['gan_inv']; 
            $per_inv = $row['per_inv']; 
        }
    }

    if(isset($_POST['updateinv'])){
        $id_inv = $_GET['id_inv'];
        $fec_inv = $_POST['fec_inv'];
        $tip_inv = $_POST['tip_inv'];
        $ing_inv = $_POST['ing_inv'];
        $gas_inv = $_POST['gas_inv'];
        $gan_inv = $ing_inv - $gas_inv;
        $per_inv = $ing_inv - $gas_inv;
        
        $query = "UPDATE inventario set fec_inv = '$fec_inv', tip_inv = '$tip_inv', ing_inv = '$ing_inv', 
        gas_inv = '$gas_inv', gan_inv = '$gan_inv', per_inv = '$per_inv' WHERE id_inv = $id_inv";
        $result = mysqli_query($conn, $query);

        header("Location: mostrarinventario.php");
    }
?>

<?php 
    include("includes/header.php");
?>

<article class="article_inventario-1">
        <h2 class="h2_inventario">Actualizar Inventario</h2>
        <section class="section_inventario-1">
            <h3>Actualiza las cuentas</h3>
            <form action="editarinventario.php?id_inv=<?php echo $_GET['id_inv'];?>" method="POST">
                <input class="inputinv" type="number" name="id_inv" placeholder="<?php echo $id_inv?>" readonly>
                <input class="inputinv" type="date" name="fec_inv" value="<?php echo $fec_inv?>">
                <input class="inputinv" type="text" name="tip_inv" list="periodo" value="<?php echo $tip_inv?>">
                <datalist id="periodo">
                  <option value="diario"></option>
                  <option value="mensual"></option>
                  <option value="anual"></option>
                </datalist>
                <input class="inputinv" type="number" name="ing_inv" value="<?php echo $ing_inv?>" placeholder="Actualiza ingresos">
                <input class="inputinv" type="number" name="gas_inv" value="<?php echo $gas_inv?>" placeholder="Actualiza gastos">
                <input class="inputinv" type="number" name="gan_inv"  placeholder="<?php echo $gan_inv?>" readonly>
                <input class="inputinv" type="number" name="per_inv"  placeholder="<?php echo $per_inv?>" readonly>
                <input class="inputinv_send" type="submit" name="updateinv" value="Actualizar inventario" onclick="editardatos()">
            </form>
        </section>
    </article>


<?php 
    include("includes/footer.php");
?>