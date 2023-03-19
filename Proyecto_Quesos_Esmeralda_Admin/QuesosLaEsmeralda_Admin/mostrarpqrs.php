<?php

    include ("db.php");

?>

<?php

    include ("includes/header.php");

?>

    <article class="article_showdata">
        <section class="section_showdata">
            <h2 class="h2_showdata">Mostrar Preguntas, Quejas, Reclamos y Sugerencias</h2>
            <table class="table_showdata">
                <tr>
                    <th>Identificacion del PQRS</th>
                    <th>Fecha del PQRS</th>
                    <th>Identificacion del cliente</th>
                    <th>Descripcion del PQRS</th>
                    <th>Accion</th>
                    <?php

                        $query = "SELECT * FROM pqrs";
                        $result = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_array($result)){ ?>

                          <tr>
                            <td><?php echo $row['id_pqrs'];?></td>
                            <td><?php echo $row['fec_pqrs'];?></td>
                            <td><?php echo $row['id_cli_pqrs'];?></td>
                            <td><?php echo $row['des_pqrs'];?></td>
                            <td>
                                <a href="eliminarpqrs.php?id_pqrs=<?php echo $row['id_pqrs']?>" class="boton_accion" onclick="eliminardatos()">
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