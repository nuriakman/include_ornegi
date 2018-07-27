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

  <link rel="stylesheet" href="stil.css">

  <style media="print">
    #carouselExampleIndicators {
      display: none;
    }
    #divKAYNAKNOTU {
      display: block;
    }
  </style>

  <style media="screen">
    #divKAYNAKNOTU {
      display: none;
    }
  </style>

</head>

<body>
  <!-- NAVBAR -->
  <div class="container-fluid fixed-top" id="divNAVBAR">
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
            <a class="nav-link" href="index.php?sayfa=e">Erkek İsimleri</a>
          </li>
          <li class="nav-item ml-0">
            <a class="nav-link" href="index.php?sayfa=k">Kız İsimleri</a>
          </li>
          <li class="nav-item ml-0">
            <a class="nav-link" href="index.php?sayfa=u">Üniseks İsimler</a>
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
