<?php

  include("db.php");

?>

<?php

  include("includes/header.php");
   
?>
    <article class="article_contactanos">
    <section class="section_contact">
      <h3>CONTACTANOS DE INMEDIATO</h3>
      <form class="form_contactanos" action="guardarpqrs.php" method="POST">
        <input class="input_contact" type="number" name="id_pqrs" placeholder="Id PQRS automatico" readonly>
        <input class="input_contact" type="date" name="fec_pqrs" placeholder="Fecha PQR" required>
        <input class="input_contact" type="number" name="id_cli_pqrs" placeholder="Ingresa tu numero de identificacion" required>
        <textarea type="text" name="des_pqrs" cols="30" rows="10" placeholder="Aqui tu mensaje..." required></textarea>
        <input class="send_contact" type="submit" name="enviarpqrs" value="Enviar" onclick="contacto()">
      </form>
    </section>
    </article>
<?php

  include("includes/footer.php");
 
?>

