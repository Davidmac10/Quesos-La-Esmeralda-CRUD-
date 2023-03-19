<?php
    include("db.php");
?>

<?php
    include("includes/header.php")
?>  
    
    <article class="article_buy">
        <h2 class="h2_buy">Compra</h2>
        <section class="section_buy">
            <form action="guardarfactura.php" method="POST">
                <h3>Lo que se antoja</h3>
                <input class="input_register" type="number"  name="id_fac" placeholder="Id Factura (automatico)" readonly>
                <input class="input_register" type="date"  name="fec_fac">
                <input class="input_register" type="number"  name="id_cli_fac" placeholder="Identificacion del cliente">
                <input class="input_register" type="number" name="id_adm_fac" placeholder="Identificacion del administrador (oculto)" readonly>
                <h3>Forma de Pago</h3>
                <input class="input_register" type="text" name="formpay_fac" list="pay">
                <datalist id="pay">
                    <option value="Pago a Domicilio"></option>
                    <option value="Pago a local"></option>
                </datalist>
                <h3>Producto</h3>
                <input class="input_register" type="Number" name="id_pro_fac" list="product">
                <datalist id="product">
                    <option value="1"></option>
                    <option value="2"></option>
                    <option value="3"></option>
                    <option value="4"></option>
                    <option value="5"></option>
                    <option value="6"></option>
                    <option value="7"></option>
                    <option value="8"></option>
                    <option value="9"></option>
                    <option value="10"></option>
                    <option value="11"></option>
                    <option value="12"></option>
                    <option value="13"></option>
                    <option value="14"></option>
                    <option value="15"></option>
                    <option value="16"></option>
                    <option value="17"></option>
                    <option value="18"></option>
                    <option value="19"></option>
                    <option value="20"></option>
                    <option value="21"></option>
                    <option value="22"></option>
                    <option value="23"></option>
                    <option value="24"></option>
                </datalist>
                <input class="input_register" type="number" id="cant" name="canpro_fac" placeholder="Cantidad del poducto">
                <input class="button_register" type="submit" name="comprar" value="Comprar" onclick="comprarproducto()">
            </form>
        </section>
    </article>
<?php
    include("includes/footer.php")
?>

