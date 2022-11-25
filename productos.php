<?php   
include('menu.php');
$arregloDatos=$producto->mostrar();
 ?>
  <section class="py-3 text-center container">
     <center>
    <div class="row py-lg-8">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">La burbuja negra</h1>
       
          <img src="img/manchaBB.png">
          </center>
    </div>
  </section>
  <div class="album py-10 bg-light">
    <div class="container">
      <?php 
    while ($fila=mysqli_fetch_array($arregloDatos)) {
      ?>
       

          <div class="card shadow-sm">
            <img src="img/thai_tea_alasrocas.jpg" title="Bubbletea Thai Thea a las Rocas" class="bd-placeholder-img card-img-top" width="80" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title><?php echo $fila["foto"]?> ?>></title><rect width="100%" height="100%" fill="#55595c"/>

            <div class="card-body">
              <p class="card-text"><p><b><?php echo $fila["nom_producto"]?> ?></b></p> <?php echo $fila["descripcion"]?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                </div>
                <small class="text-muted"><?php echo $fila["precio"]?></small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php 
}
 ?>
</main>


</body>
</html>