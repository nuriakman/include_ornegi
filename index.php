<!doctype html>
<html lang="tr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

  <title>İsimler Sözlüğü</title>

  <style media="screen">
    body{
      margin: 50px;
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
      <a class="navbar-brand" href="index.php">İsimler Sözlüğü</a>
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

  <!-- SLAYT -->
  <div class="container mt-2">
    <div class="row">
      <div class="col-sm-2">

      </div>
      <div class="col-sm-8 p-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="jumbotron text-center bg-dark text-white">
                <h1 class="display-4">Erkek İsimleri</h1>
                <p>Birbirinden farklı ve daha önce duyulmamış <br> ilginç erkek bebek isimleri ...</p>
                <a class="btn btn-primary btn-lg" href="erkekmi.php" role="button">Listele</a>
              </div>
            </div>
            <div class="carousel-item">
              <div class="jumbotron text-center bg-warning">
                <h1 class="display-4">Kız İsimleri</h1>
                  <p>Kız bebeğiniz için isim araştırmaya başladınız ancak <br>hala karar veremediyseniz doğru yerdesiniz.</p>
                <a class="btn btn-primary btn-lg" href="kizmi.php" role="button">Listele</a>
              </div>
            </div>
            <div class="carousel-item">
              <div class="jumbotron text-center bg-success">
                <h1 class="display-4">Üniseks İsimler</h1>
                  <p>Farklı, modern, değişik ve popüler erkek bebek isimleri arasından<br> seçiminizi hemen yapabilirsiniz.</p>
                <a class="btn btn-primary btn-lg" href="uniseksmi.php" role="button">Listele</a>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="col-sm-2">

      </div>
    </div>
  </div>
  <!-- /SLAYT -->

  <!-- CARD -->
  <div class="container">
    <div class="row ">
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="img/erkekmi.jpg" alt="Erkek İsimleri">
          <div class="card-body">
            <h5 class="card-title">Erkek İsimleri</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="erkekmi.php" class="btn btn-primary">Listele</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="img/kizmi.jpg" alt="Erkek İsimleri">
          <div class="card-body">
            <h5 class="card-title">Kız İsimleri</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="kizmi.php" class="btn btn-primary">Listele</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="img/uniseksmi.jpg" alt="Erkek İsimleri">
          <div class="card-body">
            <h5 class="card-title">Üniseks İsimler</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="uniseksmi.php" class="btn btn-primary">Listele</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- CARD -->
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
