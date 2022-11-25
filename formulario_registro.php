
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>𝙏𝙝𝙚 𝙗𝙪𝙗𝙗𝙡𝙚 𝙗𝙡𝙖𝙘𝙠</title>

    <link rel="icon" href="img/bubbletea.png">

    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">



    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <img src="img/bubbletea.png" width="20">
      <a class="navbar-brand" href="#"> 𝙏𝙃𝙀 𝘽𝙐𝘽𝘽𝙇𝙀 𝘽𝙇𝘼𝘾𝙆</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="productos.php">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="formulario_registro.php">Registrate</a>
          </li>

        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
          <button class="btn btn-outline-dark" style="background-color: whitesmoke;" type="submit">Buscar</button>
        </form>
      </div>
    </div>
  </nav>
</header>

<form action="funciones/insertar_usuario.php" method="post" id="formulario" class="container">
    <br>
    <br> 

        <h2>
     Registrar usuario nuevo
</h2>
<div class="row">
     <div class="col-6">
          <label>Nombres:</label>
          <input class="form-control" type="text" name="nombres">
          <br> 
     </div>
     <br>
     <br>
     <div class="col-6">

          <label>Apellido Paterno:</label>
          <input class="form-control" type="text" name="apaterno">
          <br> 
     </div>
     <br>
     <br>
     <div class="col-6">
          <label>Apellido Materno:</label>
          <input class="form-control" type="text" name="amaterno">
     </div>

     <br>
     
</div>
<div class="col-6">
 <br> 
          <label>Usuario:</label>
          <input class="form-control" type="text" name="username">
          <br> 
     </div>
     <br>
     <br>

     <div class="col-6">
          <label>Contraseña:</label>
          <input class="form-control" type="password" name="pass">
          <br> 
     </div>
     <br>
     
    <br> 
       
 <input class="btn btn-outline-dark" type="submit" value="Guardar">

    </form>
     </center>