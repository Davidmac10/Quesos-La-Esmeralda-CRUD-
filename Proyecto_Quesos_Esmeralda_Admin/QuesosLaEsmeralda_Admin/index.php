<?php
  include("db.php");
?>

<?php
  include("includes/header.php");
?>
    <article class="article_login-index">
      <section class="section_login-index">
        <h5>INICIA SESION</h5>
        <form class="form_login" action="loguear.php" method="POST">
          <input class="input_login-index" type="number" name="id_adm" placeholder="Ingresa tu usuario" required>
          <input class="input_login-index" type="password" name="pas_adm" placeholder="Ingresa tu contrasena" required>
          <input class="button_login-index" type="submit" name="login" value="Ingresa">
        </form>
        <a href="signup.php"><input class="button_login-index" type="submit" value="Registrate"></a>
        <p><a href="#" target="_blank">Olvidaste tu contraseña</a></p>
      </section>
    </article>
<?php
  include ("includes/footer.php");
?>

