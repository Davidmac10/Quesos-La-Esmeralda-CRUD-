<?php

    include ("db.php");

?>

<?php

    include ("includes/header.php");

?>
    <article class="article_showdata">
        <section class="section_showdata">
            <h2 class="h2_showdata">Mostrar Clientes</h2>
            <table class="table_showdata">
                <tr>
                    <th>Identificacion</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Correo Electronico</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Contraseña</th>
                    <th>Acciones</th>
                </tr>
                <?php
                    $query = "SELECT * FROM clientes";
                    $result = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($result)) { ?>

                        <tr>
                            <td><?php echo $row['id_cli']?></td>
                            <td><?php echo $row['nom_cli']?></td>
                            <td><?php echo $row['ape_cli']?></td>
                            <td><?php echo $row['cor_cli']?></td>
                            <td><?php echo $row['tel_cli']?></td>
                            <td><?php echo $row['dir_cli']?></td>
                            <td><?php echo $row['fecnac_cli']?></td>
                            <td><?php echo $row['pas_cli']?></td>
                            <td>
                                <a href="editarclientes.php?id_cli=<?php echo $row['id_cli']?>" class="boton_accion-1">
                                    E
                                </a>
                                <a href="eliminarclientes.php?id_cli=<?php echo $row['id_cli']?>" class="boton_accion" onclick="confirmDelete()" onclick="eliminardatos()">
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