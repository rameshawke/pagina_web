
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <link href="../carousel.css" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <img src="../img/bubbletea.png" width="20">
      <a class="navbar-brand" href="#"> 𝙏𝙃𝙀 𝘽𝙐𝘽𝘽𝙇𝙀 𝘽𝙇𝘼𝘾𝙆</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../productos.html">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../formulario_registro.php">Registrate</a>
          </li>

        </ul>
        
      </div>
    </div>
  </nav>
</header>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar Sesión</title>
    

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
 <form action="../funciones/validar_usuario.php" method="post" id="formulario" class="container">

  </head>
  <body class="text-center">
    
<main class="formulario w-100 m-auto">
  <form>
    <img class="mb-4" src="img/user.png" alt="" width="80" height="80">
    <h1 class="h3 mb-3 fw-bolder" style="color: dark;">Ingresa tus datos</h1>

    <div class="form-floating">
      <input type="text" class="form-control alinear-texto" id="floatingInput" placeholder="username" name="username">
      <label for="floatingInput">Correo o usuario</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control alinear-texto" id="floatingPassword" placeholder="pass" name="pass">
      <label for="floatingPassword">Contraseña</label>
    </div>

    <button class="w-100 btn btn btn-outline-dark" href="../index.php" style="margin-bottom: 10px;" type="submit">Ingresar</button>
  </form>
  <a class="w-100 btn btn-secondary" href="../formulario_registro.php" >Registrarse</a>
</main>
    
  </body>
</html>
