<?php session_start();
if(empty($_SESSION['id'])):
  header('Location:login.php');
endif;
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Assist You</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <h3><i class="fa-solid fa-store mr-2"></i></h3>
            <a class="navbar-brand font-weight-bold" href="#">assistyou</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mr-4">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Brand <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Promo <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">AssistYou <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Bantuan <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <div class="icon mt-2">
                <h5>
                    <i class="fa-solid fa-house ml-3 mr-3"></i>
                    <i class="fa-solid fa-cart-arrow-down mr-3"></i>
                    <i class="fa-solid fa-circle-user mr-3"></i>
                    <button type="submit" class="btn btn-danger">LOGOUT</button>
                </h5>
            </div>
        </div>
        </div>
      </nav>

      <div class="row mt-5 no-gutters">
          <div class="col-md-2 bg-light">
            <ul class="list-group list-group-flush p-2 pt-4">
                <li class="list-group-item bg-secondary text-white font-weight-bold">
                    <i class="fa-solid fa-list-ul mr-2"></i>KATEGORI</li>
                <li class="list-group-item"><i class="fa-solid fa-angle-right mr-2"></i>ACCESSORIES</li>
                <li class="list-group-item"><i class="fa-solid fa-angle-right mr-2"></i>BAG</li>
                <li class="list-group-item"><i class="fa-solid fa-angle-right mr-2"></i>BALL</li>
                <li class="list-group-item"><i class="fa-solid fa-angle-right mr-2"></i>EQUIPMENT</li>
                <li class="list-group-item"><i class="fa-solid fa-angle-right mr-2"></i>SANDALS</li>
                <li class="list-group-item"><i class="fa-solid fa-angle-right mr-2"></i>SHOES</li>
                <li class="list-group-item"><i class="fa-solid fa-angle-right mr-2"></i>TOP</li>
              </ul>
          </div>
          <div class="col-md-10">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="img/910 yuza.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/brand.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/ortus.jpg" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
              <h4 class="text-center font-weight-bold m-4">Produk Terbaru</h4>

              <div class="row mx-auto">
                <div class="card mr-2 ml-2" style="width: 16rem;">
                    <img src="img/ortus1.jpg" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                      <h5 class="card-title">ORTUSEIGHT IGNITE FG BLACK GOLD WHITE</h5>
                      <i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star-half-alt text-warning"></i>
                      <p class="card-text font-weight-bold">Rp. 297,000</p>
                      <a href="#" class="btn btn-outline-primary">Detail</a>
                      <a href="#" class="btn btn-outline-success">Beli</a>
                    </div>
                  </div>
                
                <div class="card mr-2 ml-2" style="width: 16rem;">
                    <img src="img/specs2.jpg" class="card-img-top" alt="...">
                    <div class="card-body bg-light">
                      <h5 class="card-title">SPECS LIGHTSPEED 3 FG FRACTAL PACK BLACK FRACTAL</h5>
                      <i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star text-warning"></i>
                      <i class="fas fa-star-half-alt text-warning"></i>
                      <p class="card-text font-weight-bold">Rp. 297,000</p>
                      <a href="#" class="btn btn-outline-primary">Detail</a>
                      <a href="#" class="btn btn-outline-success">Beli</a>
                    </div>
                </div>

                <div class="card mr-2 ml-2" style="width: 16rem;">
                  <img src="img/ortus5.jpg" class="card-img-top" alt="...">
                  <div class="card-body bg-light">
                    <h5 class="card-title">ORTUSEIGHT CATALYST LEGION V2 FG WHITE FLUO GREEN</h5>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star-half-alt text-warning"></i>
                    <p class="card-text font-weight-bold">Rp. 297,000</p>
                    <a href="#" class="btn btn-outline-primary">Detail</a>
                    <a href="#" class="btn btn-outline-success">Beli</a>
                  </div>
              </div>

              <div class="card mr-2 ml-2" style="width: 16rem;">
                <img src="img/specs1.jpg" class="card-img-top" alt="...">
                <div class="card-body bg-light">
                  <h5 class="card-title">SPECS REACTO BLITZ STEREOFLOW PRO FG MULTIVERSE</h5>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star-half-alt text-warning"></i>
                  <p class="card-text font-weight-bold">Rp. 297,000</p>
                  <a href="#" class="btn btn-outline-primary">Detail</a>
                  <a href="#" class="btn btn-outline-success">Beli</a>
                </div>
            </div>

              </div>
          </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://kit.fontawesome.com/304a135e44.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>