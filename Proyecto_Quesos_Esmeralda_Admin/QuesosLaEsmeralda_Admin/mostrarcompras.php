<?php
  include ("db.php");
?>

<?php
  include ("includes/header.php");
?>
    <article class="article_showdata">
        <section class="section_showdata">
            <h2 class="h2_showdata">Mostrar Facturas</h2>
            <table class="table_showdata">
                <tr>
                    <th>Id de la factura</th>
                    <th>Fecha de la factura</th>
                    <th>Identificacion del cliente</th>
                    <th>Identificacion del administrador</th>
                    <th>Forma de pago</th>
                    <th>Id del producto</th>
                    <th>Cantidad del producto</th>
                    <th>Accion</th>
                </tr>
                <?php
                  $query = "SELECT * FROM factura";
                  $result = mysqli_query($conn, $query);
                  while($row = mysqli_fetch_array($result)){ ?>
                      <tr>
                        <td><?php echo $row['id_fac'];?></td>
                        <td><?php echo $row['fec_fac'];?></td>
                        <td><?php echo $row['id_cli_fac'];?></td>
                        <td><?php echo $row['id_adm_fac'];?></td>
                        <td><?php echo $row['formpay_fac'];?></td>
                        <td><?php echo $row['id_pro_fac'];?></td>
                        <td><?php echo $row['canpro_fac'];?></td>
                        <td>
                          <a href="eliminarfactura.php?id_fac=<?php echo $row['id_fac']?>" class="boton_accion" onclick="eliminarDatos()">
                            D
                          </a>
                        </td>
                      </tr>
                  <?php } ?>
            </table>
        </section>
    </article>
<?php
  include ("includes/footer.php");
?>