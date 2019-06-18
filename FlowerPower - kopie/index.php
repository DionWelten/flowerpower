<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="./images/logo.JPG">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>FlowerPower</title>

    <?php include('./include.php')?>

  </head>
  <link rel="stylesheet" href="./Style/style.css">
  <body>  
    <h1></h1>
    <?php
    if(isset($_SESSION['id'])){echo'U BENT INGELOGD';}
    ?>

<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<h1>Aanbiedingen <span class="badge badge-secondary"></span></h1>

<div class="row" style: margintop=20px>
<div class="col-1"></div>
<div class="col-10"><div class="row">
  <div class="col-sm-3">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="./images/bloemen1.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Bloem1</h5>
          <p class="card-text">€3,99</p>
          <a href="./product.php" class="btn btn-danger">Bekijken</a>
        </div>
      </div>
      </div>
  <div class="col-sm-3">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="./images/bloemen1.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Bloem2</h5>
          <p class="card-text">€4,99</p>
          <a href="./bidding.php" class="btn btn-danger">Bekijken</a>
        </div>
      </div>
      </div>
  <div class="col-sm-3">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="./images/bloemen1.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Bloem3</h5>
          <p class="card-text">€7,99</p>
          <a href="./bidding.php" class="btn btn-danger">Bekijken</a>
        </div>
      </div>
      </div>
  <div class="col-sm-3">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="./images/bloemen1.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Bloem4</h5>
          <p class="card-text">€6,99</p>
          <a href="./bidding.php" class="btn btn-danger">Bekijken</a>
        </div>
      </div>
      </div></div>
<div class="col-1"></div>
</div></div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>