<?php
  include("db.php");
?>

<?php
  include("includes/header.php");
?>
    <article class="article_login">
      <section class="section_login">
        <h5>INICIA SESION</h5>
        <form class="form_login" action="loguear.php" method="POST">
          <input class="input_login" type="number" name="id_cli" placeholder="Ingresa tu usuario" required>
          <input class="input_login" type="password" name="pas_cli" placeholder="Ingresa tu contrasena" required>
          <input class="button_login" type="submit" name="login" value="Ingresa">
        </form>
        <a href="signup.php"><input class="send_contact" type="submit" value="Registrar"></a>
        <p>
          <b><a href="">Olvidaste tu contraseña</a></b>
        </p>
      </section>
    </article>
    
<?php
  include ("includes/footer.php");
?>