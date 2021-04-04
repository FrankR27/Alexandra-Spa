<?php
    $titulo = 'Nombre Página';
    include 'templates/header.php';
    include 'templates/navegacion.php';
?>

    <div class="container pt-4">
      <div class="row no-gutters">
        <div class="col-12 hero">
          <img src="img/nosotros.jpg" class="img-fluid">
          <h2 class="text-uppercase d-none d-md-block py-3 px-5">Titulo aqui</h2>
        </div>
      </div>
    </div>

    <div class="container pt-4">
      <div class="row">
        <main class="col-lg-8 contenido-principal">
          <h2 class="d-block- d-md-none text-uppercase text-center">
            Segundo Aquí
          </h2>
        </main>

        <aside class="col-lg-4 pt-4 pt-lg-0">
          <div class="sidebar">
            <h2 class="text-center text-uppercase mt-4">Algo aqui</h2>
          </div>
        </aside>
      </div>
    </div>

    <a class="appwhatsapp" target="_blanck_" href="https://api.whatsapp.com/send?phone=18497110033text=Hola!&nbsp;Que&nbsp;tal?&nbsp;En&nbsp;que&nbsp;puedo&nbsp;ayudarte?">
      <img src="img/whatsapp.svg" width="32px" height="32px" alt="whatsapp">
  </a>

<?php
    include 'templates/footer.php';
?>
