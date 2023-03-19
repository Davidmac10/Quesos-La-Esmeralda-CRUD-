<?php
    include ("db.php");
?>

<?php
    include ("includes/header.php");
?>
    <article class="article_inventario">
        <h2 class="h2_inventario">Formulario inventario</h2>
        <section class="section_inventario">
            <h3>HAZ LAS CUENTAS</h3>
            <form action="guardarinventario.php" method="POST">
                <input class="inputinv" type="number" name="id_inv" placeholder="Id del inventario Automatico" readonly>
                <input class="inputinv" type="date" name="fec_inv">
                <input class="inputinv" type="text" name="tip_inv" list="periodo">
                <datalist id="periodo">
                  <option value="diario"></option>
                  <option value="mensual"></option>
                  <option value="anual"></option>
                </datalist>
                <input class="inputinv" type="number" name="ing_inv" placeholder="ingresos">
                <input class="inputinv" type="number" name="gas_inv"  placeholder="gastos">
                <input class="inputinv_send" type="submit" name="calcular" value="Hacer inventario" onclick="registrarinventario()">
            </form>
        </section>
    </article>
<?php
    include ("includes/footer.php");
?>

