<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="imagenes/codoacodo.ico">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <title>Codo a Codo</title>
</head>

<body>
<header class="header"></header>
  <div id="banner" class="d-inline-block">
    <div id="textobanner" class="position-relative text-white col-lg-6 offset-lg-6 text-lg-end col-md-12 text-center">
      <h1>Conf Bs As</h1>
      <p>Bs As llega por primera vez a Argentina. Un evento para compartir con nuestra comunidad el conocimiento y
        experiencia de los expertos que están creando el futuro de Internet. Ven a conocer a miembros del evento, a
        otros estudiantes de Codo a Codo y los oradores de primer nivel que tenemos para ti. Te esperamos!</p>
      <button type="button" class="btn btn-outline-light mb-3"><a href="#convierteteOrador" class="text-white" style="text-decoration: none;">Quiero ser orador</a></button>
      <button type="button" class="btn btn-success mb-3"><a href="./tickets.html" class="text-white" style="text-decoration: none;">Comprar tickets</a></button>
    </div>
  </div>

  <div id='oradores' class="text-center m-2">
    <h6 class="fw-light">CONOCE A LOS</h6>
    <h3>ORADORES</h3>
  </div>
  <div id="cartas" class="row row-cols-1 row-cols-md-3 g-4">
    <?php
      include "php/oradores.php";
    ?>
  </div>
  <div id="provincia" class="container-fluid mt-4 mb-4">
    <div class="row">
      <div class="col-md-6 p-0">
        <img src="imagenes/honolulu.jpg" alt="Buenos Aires" class="img-fluid">
      </div>
      <div class="col-md-6 p-md-3 text-white pb-4">
        <h4 class="pt-2">Bs As - Octubre</h4>
        <p>
          Buenos Aires es la provincia y localidad más grande del estado de Argentina, en los Estados Unidos. Honolulu
          es la más sureña de entre las principales ciudades estadounidenses. Aunque el nombre de Honolulu se refiere al
          área urbana en la costa sureste de la isla de Oahu, la ciudad y el condado de Honolulu han formado una ciudad-
          condado consolidada que cubre toda la ciudad (aproximadamente 600 km² de superficie).
        </p>
        <button type="button" class="btn btn-outline-light btn-sm ">Conocé más</button>
      </div>
    </div>
  </div>
  <div id='convierteteOrador' class="text-center m-2">
    <h6 class="fw-light">CONVIÉRTETE EN UN</h6>
    <h3>ORADOR</h3>
    <h6 class="fw-light">Anótate como orador para dar una charla ignite. Cuéntanos de qué quieres hablar!</h6>
  </div>
  <form>
    <div class="row mb-3">
      <div class="col">
        <input type="text" class="form-control" placeholder="Nombre">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Apellido">
      </div>
    </div>
    <div class="form-group">
      <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Sobre qué quieres hablar?"></textarea>
    </div>
    <h6 class="text-body-secondary">Recuerda incluir un título para tu charla</h6>
    <button type="submit" class="btn w-100 text-white" style="background-color: #96c93e;">Enviar</button>
  </form>
  <footer class="footer"></footer>
  <script src="script.js"></script>
</body>
</html>