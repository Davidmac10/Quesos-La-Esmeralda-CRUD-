<?php
  include ("db.php");
?>

<?php
  include ("includes/header.php")
?>
    <article class="article_showdata">
        <section class="section_showdata">
            <h2 class="h2_showdata">Mostrar Productos</h2>
            <table class="table_showdata">
                <tr>
                    <th>Identificacion del Producto</th>
                    <th>Nombre del Producto</th>
                    <th>Marca del Poducto</th>
                    <th>Precio</th>
                    <th>Fecha de Vencimiento</th>
                    <th>Accion</th>
                </tr>
                <?php
                  $query = "SELECT * FROM producto";
                  $result = mysqli_query($conn, $query);
                  while ($row = mysqli_fetch_array($result)){ ?>
                      <tr>
                        <td><?php echo $row['id_pro']?></td>
                        <td><?php echo $row['nom_pro']?></td>
                        <td><?php echo $row['mar_pro']?></td>
                        <td><?php echo $row['pre_pro']?></td>
                        <td><?php echo $row['fecven_pro']?></td>
                        <td>
                          <a href="editarproductos.php?id_pro=<?php echo $row['id_pro']?>" class="boton_accion-1">
                            E
                          </a>
                          <a href="eliminarproductos.php?id_pro=<?php echo $row['id_pro']?>" class="boton_accion" onclick="confirmDelete()" onclick="eliminardatos()">
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