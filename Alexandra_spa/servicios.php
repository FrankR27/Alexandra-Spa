<?php
    $titulo = 'Servicios';
    include 'templates/header.php';
    include 'templates/navegacion.php';
?>

    <div class="container pt-4">
      <div class="row no-gutters">
        <div class="col-12 hero">
          <img src="img/servicios.jpg" class="img-fluid">
          <h2 class="text-uppercase d-none d-md-block py-3 px-5">Servicios</h2>
        </div>
      </div>
    </div>

    <div class="container pt-4">
      <div class="row">
        <main class="col-lg-8 contenido-principal">
          <h2 class="d-block- d-md-none text-uppercase text-center">
            Servicios
          </h2>

          <div id="servicios">
            <div class="card">
              <div class="card-header" id="#servicio1">
                  <h2 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion1" aria-expanded="true" aria-controls="#descripcion1">
                      Servicio 1
                    </button>
                  </h2>
              </div> <!-- .card-header -->
              <div id="descripcion1" class="collapse show" aria-labelledby="servicio1" data-parent="#servicios">
                <div class="card-body">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque voluptas, veritatis optio alias sed dicta minima explicabo nemo dolorum nam tenetur. Nisi distinctio dignissimos ipsum quaerat. Reprehenderit suscipit quisquam quaerat dolorem quidem modi praesentium neque, accusamus perspiciatis. Tempore, cum id?</p>
                </div>
              </div>
            </div> <!-- .card -->

            <div class="card">
              <div class="card-header" id="#servicio2">
                  <h2 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion2" aria-expanded="false" aria-controls="#descripcion2">
                      Servicio 2
                    </button>
                  </h2>
              </div> <!-- .card-header -->
              <div id="descripcion2" class="collapse" aria-labelledby="servicio2" data-parent="#servicios">
                <div class="card-body">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque voluptas, veritatis optio alias sed dicta minima explicabo nemo dolorum nam tenetur. Nisi distinctio dignissimos ipsum quaerat. Reprehenderit suscipit quisquam quaerat dolorem quidem modi praesentium neque, accusamus perspiciatis. Tempore, cum id?</p>
                </div>
              </div>
            </div> <!-- .card -->

            <div class="card">
              <div class="card-header" id="#servicio3">
                  <h2 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion3" aria-expanded="false" aria-controls="#descripcion3">
                      Servicio 3
                    </button>
                  </h2>
              </div> <!-- .card-header -->
              <div id="descripcion3" class="collapse" aria-labelledby="servicio3" data-parent="#servicios">
                <div class="card-body">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque voluptas, veritatis optio alias sed dicta minima explicabo nemo dolorum nam tenetur. Nisi distinctio dignissimos ipsum quaerat. Reprehenderit suscipit quisquam quaerat dolorem quidem modi praesentium neque, accusamus perspiciatis. Tempore, cum id?</p>
                </div>
              </div>
            </div> <!-- .card -->
          </div>
        </main>

        <aside class="col-lg-4 pt-4 pt-lg-0">
          <div class="sidebar p-3">
            <h2 class="text-center text-uppercase mt-4">Nuevos Clientes</h2>
            <p class="lead text-center mt-4">
              Recibe 20% de descuento con este cup??n
            </p>

            <div class="cupon px-2 py-5 mt-5">
              <p class="text-uppercase text-center mb-0">
                <span class="display-4">20% Descuento</span><br>
                en todos los servicios
              </p>
            </div>
          </div>
        </aside>
      </div>
    </div>

    <a class="appwhatsapp" target="_blanck_" href="https://api.whatsapp.com/send?phone=18497110033text=Hola!&nbsp;Que&nbsp;tal?&nbsp;En&nbsp;que&nbsp;puedo&nbsp;ayudarte?">
      <img src="img/whatsapp.svg" width="32px" height="32px" alt="whatsapp">
  </a>

<?php
    include 'templates/citas.php';
    include 'templates/footer.php';
?>
