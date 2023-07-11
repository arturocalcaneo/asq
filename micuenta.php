<!DOCTYPE html>
<html lang="es-MX">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bulma.css">
    <title>ASQ - Congreso de Calidad y Productividad | Mi Cuenta</title>
  </head>
  <body>

    <!-- ====== SUB-BARRA DE NAVEGACIÓN ====== -->
    <div id="barra-navegacion"></div>
    <!-- ====== FIN: SUB-BARRA DE NAVEGACIÓN ====== -->

    <div class="container for-mobile">
      <h1 style="text-align: center; text-transform: uppercase" 
          class="title has-text-black is-3 mt-6 mb-5">Datos Personales</h1>

      <form action="peticiones/iniciarsesion.control.php" method="POST">
        <div class="field">
          <label class="label">Nombres(s) (Así aparecerá en tu constancia)</label>
          <div class="control">
            <input class="input" type="text" name="nombres" required>
          </div>
        </div>
        <div class="field">
          <label class="label">Apellidos (Así aparecerá en tus constancia)</label>
          <div class="control">
            <input class="input" type="text" name="apellidos" required>
          </div>
        </div>
        <div class="field">
          <label class="label">Número de Seguridad Social (Necesario para la visita industrial)</label>
          <div class="control">
            <input class="input" type="number" name="num_ss" maxlength="11" required>
          </div>
        </div>

        <input type="submit" name="Iniciar Sesión" style="display: none" id="submit-form">
      </form> <br>

      <a class="button is-warning mb-6" style="text-transform: uppercase" onclick="$('#submit-form').click()">Actualizar Datos Personales</a>
      <a class="button mb-6" style="text-transform: uppercase" href="index.html">Volver</a>

      <hr/>
    </div>

    <!-- ====== MI CUENTA ====== -->
    <div class="container for-mobile mb-6">
      <h1 style="text-align: center; text-transform: uppercase" 
        class="title has-text-black is-3 mt-6 mb-5">Mi Cuenta</h1>

      <div class="card micuenta">
        <div class="card-content">
          <p class="title has-text-white mb-6">Membresía</p>
          <p class="subtitle has-text-white">... Hello World...</p>
        </div>
      </div>
    </div>
    <!-- ====== MI CUENTA ====== -->

    <style>
      .card.micuenta {
        background: rgb(9,199,235) !important;
        background: linear-gradient(90deg, rgba(9,199,235,1) 0%, rgba(19,108,189,1) 34%, rgba(163,5,247,1) 100%) !important;

        border-top-left-radius: 32px;
        border-bottom-left-radius: 32px;

        border-top-right-radius: 56px;
        border-bottom-right-radius: 56px;
      }

      .container.for-mobile form input {
        border-radius: 7px !important;
        border: 1px solid rgba(0,0,0,0.275);
      }

      .container.for-mobile .button {
        border-radius: 0 !important;
        font-weight: 500 !important;
        letter-spacing: 1px;
      }

      @media screen and (max-width: 1024px){
        .container.for-mobile {
          padding-left: 1.75rem;
          padding-right: 1.75rem;
        }
      }
    </style>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/iniciarsesion.js"></script>
  </body>
</html>