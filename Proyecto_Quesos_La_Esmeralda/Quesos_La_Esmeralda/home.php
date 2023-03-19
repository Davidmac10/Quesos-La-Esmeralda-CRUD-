<?php

  include ("db.php")

?>

<?php

  include("includes/header.php")

?>

<div class="login-box">
<?php

  $id_cli = $_SESSION['username'];

  if(!isset($id_cli)){
    header("Location: index.php");
  } else {
     echo "<h3>Bienvenido $id_cli </h3>";
  }

?>
</div>

<article class="article_index">
  <section class="section_text">
      <h3>LA MEJOR CALIDAD <br> AL MEJOR PRECIO</h3>
      <p>
            Disfruta de los mejores <br>
            con un sabor interesante <br>
            y una experiencia inolvidable 
      </p>
    </section>
  </section class="section_img">
    <img class="imagenes_img" src="assets/img/descarga.jpg" alt="">
    <img class="imagenes_img" src="assets/img/descarga (1).jpg" alt="">
    <img class="imagenes_img" src="assets/img/descarga (2).jpg" alt="">
  <section>
</article>

<?php

  include ("includes/footer.php")

?>