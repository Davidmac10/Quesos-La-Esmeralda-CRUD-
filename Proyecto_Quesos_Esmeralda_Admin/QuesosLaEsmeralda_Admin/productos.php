<?php
  include ("db.php");
?>

<?php
  include ("includes/header.php");
?>
    <article class="article_productos">
        <section class="section_productos">
            <h3>Registrar Productos</h3>
            <form action="guardarproductos.php" method="POST">
                <input class="inputproductos" type="number" name="id_pro" placeholder="Identificacion producto automatico" readonly>
                <input class="inputproductos" type="text" name="nom_pro" placeholder="Nombre del producto">
                <input class="inputproductos" type="text" name="mar_pro" placeholder="Marca del producto">
                <input class="inputproductos" type="number" name="pre_pro" placeholder="Precio del producto">
                <input class="inputproductos" type="date" name="fecven_pro">
                <input class="sendproductos" type="submit" name="guardarproducto" value="Guardar Producto" onclick="registrarproducto()">
            </form>
        </section>
    </article>
<?php
  include ("includes/footer.php");
?>

