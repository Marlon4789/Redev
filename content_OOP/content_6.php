<?php include('../templete/header.php'); ?>

<div class="container-fluid my-5 pt-4" style="max-width: 60rem;  font-size: 1.2rem;">
  <div class="row">
    <div class="col col-md-10 offset-md-1 pt-2">
      <h1 class="card-title">Modularidad</h1>
      <p class="card-text"><br>
      La modularidad consiste en crear un sistema dividiendo nuestras clases por separado, lo cual llamamos módulos, que funcionaran de forma independiente y estos módulos tendrán conexión entre sí, lo que nos permitirá: 
      </p>

      <ul>
        <li>Reutilizar código</li>
        <li>Evitar colapsos</li>
        <li>Hacer el código más mantenible</li>
        <li>Legibilidad</li>
        <li>Resolución rápida de problemas</li>
        <li>Hacer sistemas más robustos</li>
    </ul>

    <h2>Veamos un ejemplo:</h2>
    <p>
    Crearemos un archivo por separado para cada clase que tengamos, por ejemplo:   
    </p>
    <ul>
        <li>Usuario.php</li>
        <li>Administrador.php</li>
        <li>Invitado.php</li>
        <li>Index.php</li>
    </ul>

    <div class="col-12 d-flex justify-content-center gap-4 mt-5">

              <a href="./content_5.php">
                <img src="../iconos/arrow-left.png" alt="boton de flecha atras">
              </a>

              <a href="../index.php">
                <img src="../iconos/home.png" alt="boton de inicio">
              </a>

            <a class="btn btn-primary" href="./content_7.php"><b>Abstracción</b></a>
            
          </div>

    </div>
  </div>
</div>

<?php include('../templete/footer.php'); ?>