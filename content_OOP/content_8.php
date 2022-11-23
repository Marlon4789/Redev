<?php include('../templete/header.php'); ?>

<div class="container-fluid my-5 pt-4" style="max-width: 60rem;  font-size: 1.2rem;">
  <div class="row">
    <div class="col col-md-10 offset-md-1 pt-2">
      <h1 class="card-title">Herencia</h1>
      <p class="card-text"><br>
      La herencia es la manera en la que una clase, la cual llamaremos <b>subclase</b> o <b>clase hija,</b> hereda características de otra clase, la cual llamaremos <b>superclase</b> o <b>clase padre.</b> Esto nos ayudará a no repetir piezas de código e incrementar el fácil mantenimiento.
      <br>
      <b>Ejemplo:</b>
      </p>

    <div class="col">
        <img class="img-fluid" src="./images_content/herencia.png" alt="Imagen de abstracción">
    </div>

    <p>
    Puedes notar que las Subclases <b>Player</b> y <b>Profile</b> pueden heredar características de la <b>Superclase,</b> como por ejemplo, la propiedad <b>name</b>.
    <br>
    <br>
    Para heredar una de una clase padre, utilizamos la palabra <b>extends:</b>
    </p>

<pre><code class="language-php">
class Profile extends User{}
// Profile hereda de User
</code></pre>

    <p>
    Vamos a crear las clases hijas, que heredaran <b>propiedades</b> de la clase padre, esto se logra con el método:
    </p>

<pre><code class="language-php">
//Pasamos datos de la clase padre al constructor de la clase hija
parent::__construct();
</code></pre>

  <p>
  Veamos un breve ejemplo de como <b>Profile</b> hereda la propiedad, <b>name</b> y <b>lastName</b> de <b>User</b> 
  </p>

<pre><code class="language-php">
class User {
    public $name;
    public $lastname;
    
    public function __construct($name,$lastname){
        $this->name = $name;
        $this->lastName = $lastname;
    }
}
//------------Child class-----------------------------

class Profile extends User {
    public $email;

    public function __construct($name,$lastname,$email){
        parent::__construct($name,$lastname);
        $this->email = $email;
    }

    public function getName(){
        return $this->name;
    }
    public function getLastName(){
        return $this->lastName;
    }
    public function getEmail(){
        return $this->email;
    }
}
//------------Object-----------------------------

$profile = new Profile('John','Smith','exam@email.com');
echo $profile->getName();
echo $profile->getLastName();
echo $profile->getEmail();

//------------Output-----------------------------

John
Smith
exam@email.com
</code></pre>

        <div class="col-12 d-flex justify-content-center gap-4 mt-5">

              <a href="./content_7.php">
                <img src="../iconos/arrow-left.png" alt="boton de flecha atras">
              </a>

              <a href="../index.php">
                <img src="../iconos/home.png" alt="boton de inicio">
              </a>

            <a class="btn btn-primary" href="./content_9.php"><b>Encapsulamiento</b></a>
            
          </div>

    </div>
  </div>
</div>

<?php include('../templete/footer.php'); ?>