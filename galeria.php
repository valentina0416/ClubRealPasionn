
<?php
Include('Backend/conexion.php');
$query= "select * from imagenes";
$resultado = mysqli_query($conn,$query);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Club | Real Pasión</title>
  <link rel="shortcut icon" type="images/x-icon" href="images/logotipo.png">
    
    <link rel="stylesheet" href="css/modal.css">

    
   <link href="css/style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

      <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->


  </head>
  <body>
    <br>

    <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.html">
            <img src="images/logotipo.png" alt="" /><span>
              Club Real Pasión
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Inicio <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="nosotros.html"> Sobre Nosotros</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.html"> Servicios </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://localhost/ClubRealPasiion/html/">Contactanos</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
            <!--por si acaso
            <div class="quote_btn-container ml-0 ml-lg-4 d-flex justify-content-center">
              <a href="">
                Get A quote
              </a>
            </div>
            por si acaso-->
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h1 class="titulo1">Subir Imagen</h1>
                <br><br>
                <form action="Backend/subir.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="my-input">Selecciona Una Imagen</label>
                    <input id="my-input" type="file" name="imagen">
                </div>
                <br>

                <div class="form-group">
                    <label for="my-input">Título De La Imagen</label>
                    <input id="my-input" class="form-control" type="text" name="titulo">  
                </div>
          

                  <?php if(isset ($_SESSION['mensaje'])){ ?>
                  <div class="alert alert-<php echo $_SESSION['tipo'] ?> alert-dismissible fade show" role="alert">
                    <strong><?php echo $_SESSION['mensaje']; ?> </strong> 
                    
                    <button  type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" >
                    </button>
            
                  </div>
                    <?php session_unset(); } ?>
                    <br>
                    <input type="submit" value="Guardar" class="btn btn-primary" name="Guardar">
                </form>
            </div>
            <div class="col-lg-8">
                <h1 class="galeria"> Galería de Imagenes</h1>
                <hr>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                        <?php foreach($resultado as $row){ ?>
                    <div class="col">
                      <div class="card">
                        <img src="Backend/imagenes/<?php echo $row ['imagen']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><strong><?php echo $row['nombre']; ?> </strong></h5>
              
                        </div>
                    
                      </div>
                      <?php }?>  
                    </div>
            </div>
        </div>
        
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>