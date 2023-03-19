<?php
  include("db.php");
?>

<?php

  include ("includes/header.php")

?>

    <article class="article_register">
      <section class="section_register">
        <h5>REGISTRATE</h5>
        <form class="form_register" action="guardarclientes.php" method="POST" autocomplete="on">
          <input class="input_register" type="number" name="id_cli" placeholder="Ingresa tu numero de identificacion" required autofocus>
          <input class="input_register" type="text" name="nom_cli" placeholder="Ingresa tus nombres" required>
          <input class="input_register" type="text" name="ape_cli" placeholder="Ingresa tus apellidos" required>
          <input class="input_register" type="email" name="cor_cli" placeholder="Ingresa tu correo electronico" required>
          <input class="input_register" type="tel" name="tel_cli" placeholder="Ingresa tu numero telefonico" required>
          <input class="input_register" type="address" name="dir_cli" placeholder="Ingresa tu direccion" required>
          <input class="input_register" type="date" name="fecnac_cli" placeholder="Ingresa tu fecha de nacimiento" required>
          <input class="input_register" type="password" name="pas_cli" placeholder="Ingresa tu contrasena" required>
          <input class="button_register" type="submit" name="registrar" value="Registrate" onclick="registrarcliente()">
        </form>
      </section>
    </article>

<?php

  include ("includes/footer.php")

?>

