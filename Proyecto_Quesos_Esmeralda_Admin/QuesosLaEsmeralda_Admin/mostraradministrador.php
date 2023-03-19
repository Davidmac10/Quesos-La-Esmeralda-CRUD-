<?php
    include ("db.php");
?>

<?php

  include ("includes/header.php")

?>
    <article class="article_showdata">
        <section class="section_showdata">
            <h2 class="h2_showdata">Mostrar Administrador</h2>
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
                    <th>Accion</th>
                </tr>
                <?php
                    $query = "SELECT * FROM administrador";
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($result)){ ?>
                        <tr>
                            <td><?php echo $row['id_adm']?></td>
                            <td><?php echo $row['nom_adm']?></td>
                            <td><?php echo $row['ape_adm']?></td>
                            <td><?php echo $row['cor_adm']?></td>
                            <td><?php echo $row['tel_adm']?></td>
                            <td><?php echo $row['dir_adm']?></td>
                            <td><?php echo $row['fecnac_adm']?></td>
                            <td><?php echo $row['pas_adm']?></td>
                            <td>
                                <a href="editaradministrador.php?id_adm=<?php echo $row['id_adm']?>" class="boton_accion-1">
                                    E
                                </a>
                                <a href="eliminaradministrador.php?id_adm=<?php echo $row['id_adm']?>" class="boton_accion" onclick="confirmDelete()" onclick="eliminardatos()">
                                    D
                                </a>
                            </td>
                        </tr>
                <?php } ?>
            </table>
        </section>
    </article>

<?php

  include ("includes/footer.php")

?>