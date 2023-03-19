<?php

  include ("db.php");
  
?>

<?php

  include ("includes/header.php");
  
?>
    <article class="article_register-index">
      <section class="section_register-index">
        <h5>REGISTRATE</h5>
        <form class="form_register" action="guardaradministrador.php" method="POST">
          <input class="input_register-index" type="number" name="id_adm" placeholder="Ingresa tu Numero  de Identificacion" required>
          <input class="input_register-index" type="text" name="nom_adm" placeholder="Ingresa tus nombres" required>
          <input class="input_register-index" type="text" name="ape_adm" placeholder="Ingresa tus apellidos" required>
          <input class="input_register-index" type="email" name="cor_adm" placeholder="Ingresa tu correo electronico" required>
          <input class="input_register-index" type="tel" name="tel_adm" placeholder="Ingresa tu telefono" required>
          <input class="input_register-index" type="text" name="dir_adm" placeholder="Ingresa tu direccion" required>
          <input class="input_register-index" type="date" name="fecnac_adm" placeholder="Ingresa tu fecha de nacimiento" required>
          <input class="input_register-index" type="password" name="pas_adm" placeholder="Ingresa tu contraseña" required>
          <input class="button_register-index" type="submit" name="sendadmin" value="Registrate" onclick="registraradministrador()">
        </form>
      </section>
    </article>
<?php

  include ("includes/footer.php");

?>

