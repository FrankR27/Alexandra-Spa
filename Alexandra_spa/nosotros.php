<?php
    $titulo = 'Sobre Nosotros';
    include 'templates/header.php';
    include 'templates/navegacion.php';
?>

    <div class="container pt-4">
      <div class="row no-gutters">
        <div class="col-12 hero">
          <img src="img/nosotros.jpg" class="img-fluid">
          <h2 class="text-uppercase d-none d-md-block py-3 px-5">Nosotros</h2>
        </div>
      </div>
    </div>

    <div class="container pt-4">
      <div class="row">
        <main class="col-lg-8 contenido-principal">
          <h2 class="d-block- d-md-none text-uppercase text-center">
            Nosotros
          </h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor inventore adipisci voluptas sint? Debitis nihil est magni quod! Id recusandae sit, nihil temporibus hic nesciunt? Deleniti quidem nobis dignissimos corporis similique nulla velit blanditiis obcaecati, harum laborum consectetur doloremque totam eos animi. Aperiam ipsam praesentium cupiditate quibusdam corporis, dolor voluptatem nemo. Voluptatem ali dolor illum, est id, qui quisquam eveniet tenetur a, ut facilis iste.</p>

          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis natus, iure ab id quas optio accusantium vitae dolores veniam reiciendis eius aliquam! Cumque verita exercitationem magnam. Consequatur debitis unde quam repellat placeat possimus? Non nobis alias excepturi maiores quia ea aliquam quibusdam numquam delectus et!</p>

          <h1 class="text-center text-uppercase mt-5 encabezado">
            <span class="text-lowercase d-block">Conoce nuestra </span> instalaciones
        </h1>
        <div class="imagenes pt-4">
          <a href="#" data-target="#imagen_1" data-toggle="modal">
            <img src="img/galeria_mini_01.jpg" class="img-fluid mb-4">
          </a>
          <a href="#" data-target="#imagen_2" data-toggle="modal">
            <img src="img/galeria_mini_02.jpg" class="img-fluid mb-4">
          </a>
          <a href="#" data-target="#imagen_3" data-toggle="modal">
            <img src="img/galeria_mini_03.jpg" class="img-fluid mb-4">
          </a>

          <div class="modal fade" id="imagen_1" tabindex="-1" role="dialog" aria-labelledby="Imagen 1" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-body">
                    <img src="img/galeria_grande_01.jpg" class="img-fluid">
                </div> <!-- modal-body -->
              </div> <!-- modal-content -->
            </div> <!-- modal-dialog -->
          </div> <!-- modal -->
          <div class="modal fade" id="imagen_2" tabindex="-1" role="dialog" aria-labelledby="Imagen 2" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-body">
                    <img src="img/galeria_grande_02.jpg" class="img-fluid">
                </div> <!-- modal-body -->
              </div> <!-- modal-content -->
            </div> <!-- modal-dialog -->
          </div> <!-- modal -->
          <div class="modal fade" id="imagen_3" tabindex="-1" role="dialog" aria-labelledby="Imagen 3" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-body">
                    <img src="img/galeria_grande_03.jpg" class="img-fluid">
                </div> <!-- modal-body -->
              </div> <!-- modal-content -->
            </div> <!-- modal-dialog -->
          </div> <!-- modal -->
        </div>
        </main>

        <aside class="col-lg-4 pt-4 pt-lg-0 align-self-start">
          <div class="sidebar horario">
            <h2 class="text-center text-uppercase mt-5">Horarios</h2>
            <p class="text-center mt-3 lead">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae consequuntur assumenda, praesentium qui harum velit recusandae nisi sequi. Expedita a, sunt repellendus voluptatibus distinctio dolores deleniti. Voluptatem, iusto?
            </p>
            <table class="table table-hover text-center mt-5">
              <thead>
                <tr>
                  <th class="text-center">Día</th>
                  <th class="text-center">De</th>
                  <th class="text-center">Hasta</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Lunes</td>
                  <td>09:00</td>
                  <td>19:00</td>
                </tr>
                <tr>
                  <td>Martes</td>
                  <td>09:00</td>
                  <td>19:00</td>
                </tr>
                <tr>
                  <td>Miércoles</td>
                  <td>09:00</td>
                  <td>19:00</td>
                </tr>
                <tr>
                  <td>Jueves</td>
                  <td>09:00</td>
                  <td>19:00</td>
                </tr>
                <tr>
                  <td>Viernes</td>
                  <td>09:00</td>
                  <td>19:00</td>
                </tr>
                <tr>
                  <td>Sábado</td>
                  <td>10:00</td>
                  <td>14:00</td>
                </tr>
                <tr>
                  <td>Domingo</td>
                  <td>Cerrado</td>
                  <td>Cerrado</td>
                </tr>
              </tbody>
            </table>
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
