

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

  </head>
  <body>
        <!--Header-->
  
        <section class="Header">
                    <div class="content">
                    <div class="header">
                    <h1 class="tq">SMA 5 JEMBER </h1>
                    <h7>DATA PERIJINAN</h7>

                        
                                </div>
                                </div>
                </section>

                   

                  <!--Akhir Header-->
                  


    <div id="wrapper">

      <nav class="navbar navbar-light bg-faded">
      <a>DataPerijinan</a>
      <ul class="nav navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Beranda<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=add">Add Data</a>
        </li>
      </ul>
      </nav>

      <div class="container box">
       <?php include "pages.php";?>
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
      CKEDITOR.replace( 'alamat',{height: 300} );
    </script>
  </body>
</html>