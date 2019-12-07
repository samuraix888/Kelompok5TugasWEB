

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <title>DataPerijinan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style_user.css">

  </head>
  <body>
        <!--Header-->
<div style="background:  #00dac6;">
<div class="banner">
  <div class="text-center">
  <h1>SMA Negeri 5 Jember</h1>
<h7>Sistem Monitoring Pelajar Online </h7> 
  </div>


  

</div>
<div style="background:  #009688;">
<nav class="navbar navbar-expand-lg navbar-light border border-dark mt-2">
    
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index_user.php">Beranda <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Absen</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Jadwal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Nilai</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Lain-Lain
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php">Perizinan</a>
        </div>
      </li>
      
    </ul>

    <ul class="navbar-nav float-right">
    <li class="nav-item">
    <a class="nav-link" href="#" style="color: black;">Username</a>
    </li>

    <li class="nav-item">
    <a class="nav-link" href="#" style="color: black;">Keluar</a>
    </li>
    </ul>
    
        
        
  </div>
  </div>
</nav>
</div>        

                  <!--Akhir Header-->
                  


    <div id="wrapper">

      <nav class="navbar navbar-light bg-faded">
      <a>DataPerijinan</a>
      <ul class="nav navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php"><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=add"></a>
        </li>
      </ul>
      </nav>

      <div class="container box">
       <?php include "form.php";?>
      </div>

    </div>


    <!--Foter-->
    <footer>
       <div class="container text-center">
        <div class="row">
        <p>&copf; Copyright 2019 |built by :MotorPro <i class="glyphicon glyphicon-heart"></i>by.<a href="https://www.facebook.com/ansory.ansory.399" class="btn btn-danger"><i class="glyphicon glyphicon-play"></i>Contac Me</a></p>

        </div>

       </div>
      </footer>

      <!--akhirFoter-->

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="ckeditor/ckeditor.js"></script>
    <script type="text/javascript">
     <script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </script>
  </body>
</html>