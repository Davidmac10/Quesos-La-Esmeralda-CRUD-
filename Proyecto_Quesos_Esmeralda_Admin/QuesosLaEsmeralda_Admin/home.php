<?php

  include ("db.php");

?>

<?php

  include ("includes/header.php");

?>

    <div class="box-login">
       <?php
        $id_adm = $_SESSION['useradmin'];

        if(!isset($id_adm)){
          header("Location: index.php");
        } else {
          echo "<h3>Bienvenido $id_adm </h3>";
        }

       ?>
    </div>
    <article class="article_index-admin">
      <h2 class="h2-admin">QUESOS LA ESMERALDA ADMINISTRADOR</h2>
      <section class="section_text-admin">
          <h3>LA MEJOR CALIDAD <br> AL MEJOR PRECIO</h3>
          <p>
            Disfruta de los mejores <br>
            con un sabor interesante <br>
            y una experiencia inolvidable 
          </p>
        </section>
      <section class="section_img-admin">
        <img class="imagenes_img-admin" src="assets/img/descarga.jpg" alt="">
        <img class="imagenes_img-admin" src="assets/img/descarga (1).jpg" alt="">
        <img class="imagenes_img-admin" src="assets/img/descarga (2).jpg" alt="">
      </section>
    </article>

<?php

  include ("includes/footer.php");

?>


