<?php include('../templete/header.php'); ?>

<div class="container-fluid my-5 pt-4" style="max-width: 60rem;  font-size: 1.2rem;">
  <div class="row">
    <div class="col col-md-10 offset-md-1 pt-2">
      <h1 class="card-title">Encapsulamiento</h1>
      <p class="card-text"><br>
      El encapsulamiento se encarga de ocultar los datos, para que sean inviolables e inalterables, así controlamos el acceso que tenga el usuario a propiedades y métodos, esto se logra mediante <b>modificadores de acceso:</b>
      </p>

    <ul>
        <li><b>Public: </b>se puede usar en cualquier parte.</li>
        <li><b>Protected: </b>se podrá emplear en la clase a la cual pertenece y clases hijas.</li>
        <li><b>Private: </b>solo se podrá utilizar en la clase a la que pertenece.</li>
    </ul>

    <h3>Public</h3>

<pre><code class="language-php">
class Person {
    public $name;

    function __construct($name){
        $this->name = $name;
    }
}
//------------Child class-------------

class User extends Person {
    public $age;

    function __construct($name,$age){
        parent::__construct($name);
        $this->age = $age;
    }
}
//------------Object-------------

$user = new User('John', '25');
echo "Name: $user->name";
echo "Age: $user->age";

//------------Output-------------

Name: John
Age: 25
</code></pre>
<br>

    <h3>Protected:</h3>
    <p>
    Usemos el mismo ejemplo, pero esta vez vamos a acceder con un método <b>getName()</b> en la clase hija para poder imprimir la propiedad <b>name,</b> de lo contrario no se imprimiría nada.
    </p>

<pre><code class="language-php">
class Person {
    protected $name;

    function __construct($name){
        $this->name = $name;
    }
}
//------------Child class-------------

class User extends Person {
    public $age;

    function __construct($name,$age){
        parent::__construct($name);
        $this->age = $age;
    }

    public function getName(){ // Traemos la propiedad name
        return $this->name;
    }
}
//------------Object-------------

$user = new User('Anny', '23');
echo "Name: " . $user->getName();
echo "Age: $user->age";

//------------Output-------------
Name: Anny
Age: 23
</code></pre>
<br>

    <h3>Private:</h3>
    <p>
    Usamos el método <b>getName()</b> en la misma <b>clase</b> para poder acceder a la propiedad <b>name.</b>
    </p>

<pre><code class="language-php">
class Person {
    private $name;

    function __construct($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }    
}
//------------Object-------------

$person = new Person('Bob');
echo "Name: " . $person->getName();

//------------Output-------------

Name: Bob
</code></pre>

        <div class="col-12 d-flex justify-content-center gap-4 mt-5">

            <a href="./content_8.php">
            <img src="../iconos/arrow-left.png" alt="boton de flecha atras">
            </a>

            <a href="../index.php">
            <img src="../iconos/home.png" alt="boton de inicio">
            </a>

            <a class="btn btn-primary" href="./content_10.php"><b>Polimorfismo</b></a>
            
        </div>

    </div>
  </div>
</div>

<?php include('../templete/footer.php'); ?>