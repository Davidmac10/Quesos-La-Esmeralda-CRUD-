<?php
  include("db.php");
?>

<?php
  include("includes/header.php")
?>
    <article class="article_showdata">
        <section class="section_showdata">
            <h2 class="h2_showdata">Mostrar Inventario</h2>
            <table class="table_showdata">
                <tr>
                    <th>Identificacion del Inventario</th>
                    <th>Fecha del inventario</th>
                    <th>Periodo del inventario</th>
                    <th>Ingresos</th>
                    <th>Gastos</th>
                    <th>Ganancias</th>
                    <th>Perdidas</th>
                    <th>Accion</th>
                    <?php
                      $query = "SELECT * FROM inventario";
                      $result = mysqli_query($conn, $query);
                      while($row = mysqli_fetch_array($result)){ ?>
                          <tr>
                            <td><?php echo $row['id_inv'];?></td>
                            <td><?php echo $row['fec_inv'];?></td>
                            <td><?php echo $row['tip_inv'];?></td>
                            <td><?php echo $row['ing_inv'];?></td>
                            <td><?php echo $row['gas_inv'];?></td>
                            <td><?php echo $row['gan_inv'];?></td>
                            <td><?php echo $row['per_inv'];?></td>
                            <td>
                                <a href="editarinventario.php?id_inv=<?php echo $row['id_inv']?>" class="boton_accion-1">
                                    E
                                </a>
                                <a href="eliminarinventario.php?id_inv=<?php echo $row['id_inv']?>" class="boton_accion" onclick="confirmDelete()" onclick="eliminardatos()">
                                    D
                                </a>
                            </td>
                          </tr>
                    <?php } ?>
                </tr>
            </table>
        </section>
    </article>
<?php
  include ("includes/footer.php");
?>