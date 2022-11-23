<?php include('../templete/header.php'); ?>

<div class="container-fluid my-5 pt-4" style="max-width: 60rem;  font-size: 1.2rem;">
  <div class="row">
    <div class="col col-md-10 offset-md-1 pt-2">
      <h1 class="card-title">Método constructor</h1>
      <p class="card-text"><br>
      El método constructor da un estado inicial al objeto, lo que llamamos, darle vida y podemos añadirle algunos datos al objeto mediante estos parámetros.
      </p>
      
<pre><code class="language-php">
//método constructor
public function __construct($id, $name, $color, $power){ //pasamos los datos
    $this->id = $id; //asignamos el dato al objeto
    $this->name = $name; 
    $this->color = $color;
    $this->power = $power;
}                
</code></pre>

    <p>
    Los atributos que pasamos a través del constructor, serán los datos mínimos que necesita el objeto para que pueda vivir.
    <br>
    Lo siguiente es llamar ese objeto y pasarle los parámetros: 
    </p>

<pre><code class="language-php">
//metodo
$player = new Player($id, $name, $color $power); //le damos vida al objeto               
</code></pre>

          <div class="col-12 d-flex justify-content-center gap-4 mt-5">

              <a href="./content_3.php">
                <img src="../iconos/arrow-left.png" alt="boton de flecha atras">
              </a>

              <a href="../index.php">
                <img src="../iconos/home.png" alt="boton de inicio">
              </a>

            <a class="btn btn-primary" href="./content_5.php"><b>Getters y Setters</b></a>
            
          </div>
    </div>
  </div>
</div>

<?php include('../templete/footer.php'); ?>