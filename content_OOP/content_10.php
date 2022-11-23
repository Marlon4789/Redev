<?php include('../templete/header.php'); ?>

<div class="container-fluid my-5 pt-4" style="max-width: 60rem;  font-size: 1.2rem;">
  <div class="row">
    <div class="col col-md-10 offset-md-1 pt-2">
      <h1 class="card-title">Polimorfismo</h1>
      <p class="card-text"><br>
      Significa <b>muchas formas,</b> este concepto se refiere a que un método que se comparte en varias  clases y cada clase le puede dar el comportamiento que desee.
      </p>

<pre><code class="language-php">
class User {
    public $name;

    public function chooseName($name){
        return "My name is $name";
    }
}
//----------Child class-----------

class Avatar extends User{

    public function chooseName($name){
        return "my favorite avatar is a $name";
    }
}
//----------Objects-----------

$user = new User();
echo $user->chooseName('Bob');

$avatar = new Avatar();
echo $avatar->chooseName('Hero');

//----------Output-----------

My name is Bob
my favorite avatar is a Hero
</code></pre>
<br>

    <p>
    En otras palabras, construir métodos con el mismo nombre pero con comportamiento diferente.
    <br>
    <br>
    Como puedes ver, el comportamiento del método <b>chooseName()</b> ha sido cambiado en la clase <b>Avatar</b>
    </p>

        <div class="col-12 d-flex justify-content-center gap-4 mt-5">

            <a href="./content_9.php">
            <img src="../iconos/arrow-left.png" alt="boton de flecha atras">
            </a>

            <a href="../index.php">
            <img src="../iconos/home.png" alt="boton de inicio">
            </a>
            
        </div>

      </div>
  </div>
</div>

<?php include('../templete/footer.php'); ?>