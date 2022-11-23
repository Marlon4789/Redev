<?php include('../templete/header.php'); ?>

<div class="container-fluid my-5 pt-4" style="max-width: 60rem;  font-size: 1.2rem;">
  <div class="row">
    <div class="col col-md-10 offset-md-1 pt-2">
      <h1 class="card-title">¿Qué es un método?</h1>
      <p class="card-text"><br>
      Un método es una acción específica que puede realizar un objeto, pero necesitamos darle vida primero, esto lo llamaremos una <b>instancia,</b> la cual crea un objeto, esto se logra con la palabra reservada llamada <b>new.</b>
      </p>

<pre><code class="language-php">
// método para llamar el objeto
$player = new Player($id, $name, $color, $power); // le damos vida al objeto
</code></pre>
<br>
      <p>Al momento de escribir <b>new</b> sé instancia el objeto.</p>
     
      <p>Recuerda que el método <b>Player()</b> siempre se escribe con el mismo nombre de su clase e inicia con letra <b>mayúscula.</b></p>

      <div class="col-12 d-flex justify-content-center gap-4 mt-5">

              <a href="./content_2.php">
                <img src="../iconos/arrow-left.png" alt="boton de flecha atras">
              </a>

              <a href="../index.php">
                <img src="../iconos/home.png" alt="boton de inicio">
              </a>

            <a class="btn btn-primary" href="./content_4.php"><b>Método constructor</b></a>
            
            </div>

    </div>
  </div>
</div>

<?php include('../templete/footer.php'); ?>