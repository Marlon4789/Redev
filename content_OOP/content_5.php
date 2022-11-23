<?php include('../templete/header.php'); ?>

<div class="container-fluid my-5 pt-4" style="max-width: 60rem;  font-size: 1.2rem;">
  <div class="row">
    <div class="col col-md-10 offset-md-1 pt-2">
      <h1 class="card-title">Getters y Setters</h1>
      <p class="card-text"><br>
      Son métodos de acceso que nos permiten traer los valores de cada uno de los atributos que tengamos de una clase y poder, establecer o modificarlos.
      <br>
      <br>
      <b>get: </b>permite obtener los datos de una propiedad de la clase, para hacer una operación o mostrar en pantalla.
      <br>
      <br>
      <b>set: </b>permite establecer o modificar datos si estos están cargados.
      </p>
      
<pre><code class="language-php">
class Player {
    public $id;
		// constructor
    public function __construct($id){
        $this->id = $id;
    }
		// método get
    public function getId(){
        echo "Soy un get y muestro el dato id en pantalla.";
    }
		// método set
    public function setId($id){
        echo "Soy un set y recibo el parametro id y lo modifico.";
    }
}
//-----------Object-------------

$player = new Player($id); // llamamos y damos vida al objeto
 echo $player->getId(); // muestra el dato del id
 echo $player->setId($id); // recibe por parámetro y modifica él id

 //-----------Output-------------

Soy un get y muestro el dato id en pantalla.
Soy un set y recibo el parametro id y lo modifico.
</code></pre>
<br>

    <p>
    <b>Nota: </b>se debe escribir <b>getId()</b> y <b>setId($id)</b> para que el código funcione. 
    </p>

    <div class="col-12 d-flex justify-content-center gap-4 mt-5">

              <a href="./content_4.php">
                <img src="../iconos/arrow-left.png" alt="boton de flecha atras">
              </a>

              <a href="../index.php">
                <img src="../iconos/home.png" alt="boton de inicio">
              </a>

            <a class="btn btn-primary" href="./content_6.php"><b>Modularidad</b></a>
            
          </div>

    </div>
  </div>
</div>

<?php include('../templete/footer.php'); ?>