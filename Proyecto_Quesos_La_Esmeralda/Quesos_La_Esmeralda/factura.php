<?php
  include("db.php");
?>

<?php
  include("includes/header.php");
?>
    <article class="article_factura_1">
        <section class="section_factura">
            <div class="factura">
                <h2>Datos de su compra</h2>
                <p>
                  <b>Numero de factura:</b>
                  <?php
                    echo "$_POST[nofactura]";
                  ?>
                </p>
                <p>
                  <b>Fecha:</b>
                  <?php
                    echo "$_POST[date]";
                  ?>
                </p>
                <p>
                  <b>Nombre Completo:</b>
                  <?php
                    echo "$_POST[nombre] $_POST[apellido]";
                  ?>
                </p>
                <p>
                  <b>No Identificacion:</b>
                  <?php
                    echo "$_POST[cedula]";
                  ?>
                </p>
                <p>
                  <b>Direccion:</b>
                  <?php
                    echo "$_POST[address]";
                  ?>
                </p>
                <p>
                  <b>Telefono:</b>
                  <?php
                    echo "$_POST[phone]";
                  ?>
                </p>
                <h2>Forma de Pago</h2>
                <p>
                  <b>Forma de Pago:</b>
                  <?php
                    echo "$_POST[payform]";
                  ?>
                </p>
                <h2>Detalles de la Factura</h2>
                <p>
                  <b>Producto:</b>
                  <?php
                    echo "$_POST[objeto]";
                  ?>
                </p>
                <p>
                  <b>Precio:</b>
                  <?php
                    echo "$_POST[price]";
                  ?>
                </p>
                <p>
                  <b>Cantidad:</b>
                  <?php
                    echo "$_POST[cantidad]";
                  ?>
                </p>
                <p>
                  <b>Total a Pagar:</b>
                  <?php
                    $a= $_POST['cantidad'];
                    $b = $_POST['price'];
                    $c = $a * $b; 
                    echo "$c";
                  ?>
                </p>
            </div>
        </section>    
    </article>
<?php
  include ("includes/footer.php");
?>