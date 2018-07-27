<!doctype html>
<html lang="tr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

  <title>LYK2018-PHP</title>

  <style media="screen">
    body{
      margin: 80px;
    }
    #ListeErkek{
      background-color:#99ffff;
      font-weight: bold;
    }
    #ListeErkek a{
      background-color:#0066ff;
      color:#ffffff;
      width:50px;
    }
    #ListeKIZ{
      background-color:#ffccff;
      font-weight: bold;
    }
    #ListeKIZ a{
      background-color:#ff66ff;
      color:#000000;
      width:50px;
    }
  </style>

</head>

<body>
  <!-- NAVBAR -->
  <div class="container-fluid fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">İSİMLER SÖZLÜĞÜ</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Anasayfa <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="erkekmi.php">Erkek İsimleri</a>
          </li>
          <li class="nav-item ml-0">
            <a class="nav-link" href="kizmi.php">Kız İsimleri</a>
          </li>
          <li class="nav-item ml-0">
            <a class="nav-link" href="uniseksmi.php">Üniseks İsimler</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Hangi ismi arıyorsunuz?" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">BUL</button>
        </form>
      </div>
    </nav>
  </div>
  <!-- /NAVBAR -->

  <!-- İSİM MENÜSÜ V4 -->
  <!-- KIZ İSİM MENÜSÜ -->
  <div class="container mt-2">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2>Kız İsimleri</h2>
      </div>
      <div class="col-md-12 text-center p-3" id="ListeKIZ">
        <a href="#" class="btn btn-lg mr-1"> A </a>
        <a href="#" class="btn btn-lg mr-1"> B </a>
        <a href="#" class="btn btn-lg mr-1"> C </a>
        <a href="#" class="btn btn-lg mr-1"> Ç </a>
        <a href="#" class="btn btn-lg mr-1"> D </a>
        <a href="#" class="btn btn-lg mr-1"> E </a>
        <a href="#" class="btn btn-lg mr-1"> F </a>
        <a href="#" class="btn btn-lg mr-1"> G </a>
        <a href="#" class="btn btn-lg mr-1"> H </a>
        <a href="#" class="btn btn-lg mr-1"> I </a>
        <a href="#" class="btn btn-lg mr-1"> İ </a>
        <a href="#" class="btn btn-lg mr-1"> J </a>
        <a href="#" class="btn btn-lg mr-1"> K </a>
        <a href="#" class="btn btn-lg mr-1"> L </a>
      </div>
      <div class="col-md-12 text-center p-3" id="ListeKIZ">
        <a href="#" class="btn btn-lg mr-1"> M </a>
        <a href="#" class="btn btn-lg mr-1"> N </a>
        <a href="#" class="btn btn-lg mr-1"> O </a>
        <a href="#" class="btn btn-lg mr-1"> Ö </a>
        <a href="#" class="btn btn-lg mr-1"> P </a>
        <a href="#" class="btn btn-lg mr-1"> R </a>
        <a href="#" class="btn btn-lg mr-1"> S </a>
        <a href="#" class="btn btn-lg mr-1"> Ş </a>
        <a href="#" class="btn btn-lg mr-1"> T </a>
        <a href="#" class="btn btn-lg mr-1"> U </a>
        <a href="#" class="btn btn-lg mr-1"> Ü </a>
        <a href="#" class="btn btn-lg mr-1"> V </a>
        <a href="#" class="btn btn-lg mr-1"> Y </a>
        <a href="#" class="btn btn-lg mr-1"> Z </a>
      </div>
    </div>
  </div>
  <!-- /KIZ İSİM MENÜSÜ -->
  <!-- /İSİM MENÜSÜ V4 -->
  <p>&nbsp;</p>


    <!-- CARD -->
    <div class="container">
      <div class="row ">
        <div class="col-md-4 offset-md-4">
          <div class="card">
            <img class="card-img-top" src="img/kizmi.jpg" alt="Erkek İsimleri">
            <div class="card-body">
              <h5 class="card-title">Kız İsimleri</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="erkekmi.php" class="btn btn-primary">Listele</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CARD -->
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>


<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>


<footer class="bg-dark p-3 text-white text-center">
  <p>Özgür Yazılım Yaz Kampı 2018 / Php ile Web Programlama</p>
</footer>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!--
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
-->
  <script src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
  <script src="bootstrap/js/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
