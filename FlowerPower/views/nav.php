<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <img src="./images/logo2.JPG" width="30" height="30" alt="">
  <a class="navbar-brand" href="./index">FlowerPower</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="./winkel">Winkel<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./account">Account</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Winkelwagen
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Product 1: €20</a>
          <a class="dropdown-item" href="#">Product 2: €10</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Totaal: €30</a>
          <center><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Afrekenen</button><center>
        </div>
      </li>
    </ul>
    <form action="./login.php" methoded='post' class="form-inline my-2 my-lg-0">
      <input type="text" placeholder="E-mail" name="username">
      <input type="text" placeholder="Password" name="psw">
      <button type="submit" class="btn btn-outline-success my-2 my-sm-0">Login</button>
    </form>
  </div>
</nav>