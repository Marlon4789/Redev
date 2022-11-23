<?php include('../templete/header.php'); ?>

<div class="container-fluid my-5 pt-4" style="max-width: 60rem;  font-size: 1.2rem;">
  <div class="row">
    <div class="col col-md-10 offset-md-1 pt-2">
        <h1 class="card-title">¿Qué es una clase?</h1>
        <p class="card-text"><br>
        Una clase es como un tipo de plantilla o molde, donde se construirán los objetos a lo que llamamos instancias de una clase, podemos construir todos los objetos que queramos.
        <br>
        <br>
        </p>
        <h2>Una clase se compondrá de dos cosas:</h2>
        <ul>
        <li><b>Atributos: </b>son las características cuáles se componen el objeto, donde declaramos los atributos, también llamado propiedades.</li>
        <br>
        <li><b>Métodos: </b>son las acciones o comportamientos que tendrá el objeto.</li>
        </ul>

        <h2>Comenzamos creando una clase:</h2>
        
<pre><code class="language-php">
class Player { 
    public $id;
    public $name;
    public $color;
    public $power;
}                
</code></pre>
<br>
    <p><b>Nota: </b>las clases estarán escritas en sustantivos.</p>

    <div class="col-12 d-flex justify-content-center gap-4  mt-5">

              <a href="./content_1.php">
                <img src="../iconos/arrow-left.png" alt="boton de flecha atras">
              </a>

              <a href="../index.php">
                <img src="../iconos/home.png" alt="boton de inicio">
              </a>

            <a class="btn btn-primary" href="./content_3.php"><b>¿Qué es un método?</b></a>
            
            </div>

    </div>
  </div>
</div>

<?php include('../templete/footer.php'); ?>