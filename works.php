<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title> Maseno ICT Club </title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/png" href="img/favicon.jpg"/>

  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,300,600,700' rel='stylesheet' type='text/css'>

  <!-- Revolution css -->
  <link rel="stylesheet" type="text/css" href="vendor/rs-plugin/css/settings.css" media="screen"/>
  <link rel="stylesheet" href="vendor/rs-plugin/css/extralayer.css">

  <!-- Flat icon css -->
  <link rel="stylesheet" href="vendor/flat-icon/flaticon.css">

  <!-- Font awesome -->
  <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">

  <!-- Owl Carosel css -->
  <link rel="stylesheet" href="vendor/owl/css/owl.carousel.css">
  <link rel="stylesheet" href="vendor/owl/css/owl.theme.default.css">
  <link rel="stylesheet" href="vendor/owl/css/owl.theme.css">

  <!-- mmenu -->
  <link type="text/css" rel="stylesheet" href="vendor/mmenu/css/jquery.mmenu.css" />

  <!-- Bootstrap css -->
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">

  <!-- Animate css -->
  <link rel="stylesheet" href="css/animate.css">

  <!-- Custom Style css -->
  <link rel="stylesheet" href="css/hover.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/custom.css">
  <!-- <script type="text/javascript">
    window.onload = function(){ alert("Hi there Please not that this site is under construction get in touch with me Abraham @ abramogol@gmail.com or 0790463533 or karimkanji101@gmail.com");}
  </script> -->


<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')
</script>
<![endif]-->
</head>
<body>

  <header  class="header-part">
    <div id="home" class="wrapper">
      <!-- Fixed navbar -->
      <div class="navi navbar-default" role="navigation">
        <div class="container">
          <div class="navbar-header page-scroll">
            <a href="#menu">
              <button type="button" data-effect="st-effect-1" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </a>
            <!-- <a class="navbar-brand" href="index.php"><img src="img/logol.png" alt="Maseno ICT"></a> -->
            <a class="navbar-brand brand" href="index.php">MASENO HUB</a>
          </div>
          <!-- When edditing any content in the navigation. please edit this file   -->
          <?php include 'navigation.php'; ?>
          <!-- When edditing any content in the navigation. please edit this file -->
      </div>
    </div><!-- End of Nav -->
  </div>
  </header>


<!-- OUR LATEST WORKS -->
<section class="protfolio section-padding" id="product">
  <div class="container">
    <div class="row">
      <div class="wow zoomIn col-xs-12 text-center p-padding animated" style="visibility: visible; animation-name: zoomIn;">
        <h1 class="section-title">our latest works</h1>
        <p>
          At Maseno ICT, we are always on the move, always on the code. We strive to build better applications each time we meet and brainstorm. Here are some of the projects
          that have been completed by various ICT teams over the years.
        </p>
      </div>
    </div><!-- row -->
  </div><!-- container -->
  <div class="portfolio-menu">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul class="wow zoomIn animated" id="filter" style="visibility: visible; animation-name: zoomIn;">
            <li><a data-group="all" href="#" class="active">all</a></li>
            <li><a data-group="wordpress" href="#">wordpress</a></li>
            <li><a data-group="video" href="#">video</a></li>
            <li><a data-group="image" href="#">image</a></li>
            <li><a data-group="branding" href="#">branding</a></li>
          </ul><!-- /#filter -->
        </div><!-- /.col-xs-12 -->
      </div>
    </div>
  </div>



  <div class="row">
    <div id="grid" class="shuffle" style="position: relative; height: 600px;">
      <!-- portfolio-item -->
      <div data-groups='["all", "image", "video"]' class=" portfolio-item col-xs-12 col-sm-6 col-md-3 shuffle-item filtered animated" style="margin:0; padding:0;">
        <div class="portfolio">
          <figure class="effect-julia">
            <img alt="img21" src="img/portfolio01.jpg">
            <figcaption>
              <div class="socia ls">
                <a data-toggle="modal" data-target="#myModal1" href=""><i class="fa fa-expand"></i></a>
                <a href=""><i class="fa fa-share animated"></i></a>
              </div>
              <div class="scoial-heading">
                <p>Mornign Dew</p>
                <strong>Icons, Illustrations</strong>
              </div>
            </figcaption>
          </figure>
        </div><!-- /.portfolio -->
      </div><!-- /.portfolio-item -->
      <!-- MODAL/POPUP -->
      <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class=" btn btn-default pull-right" data-dismiss="modal">X</button>
              <span class="modal-title" id="myModalLabel">Our recent work</span>
            </div>
            <div class="modal-body" >
              <img src="img/portfolio01.jpg" alt="img21"/>
            </div>
          </div>
        </div>
      </div>
      <!-- MODAL/POPUP -->


      <!-- portfolio-item -->
      <div data-groups='["all", "image","wordpress","branding"]' class=" portfolio-item col-xs-12 col-sm-6 col-md-3 shuffle-item filtered " style="margin:0; padding:0;">
        <div class="portfolio">
          <figure class="effect-julia">
            <img alt="img21" src="img/portfolio02.jpg">
            <figcaption>
              <div class="socials">
                <a data-toggle="modal" data-target="#myModal2" href=""><i class="fa fa-expand"></i></a>
                <a href=""><i class="fa fa-share animated"></i></a>
              </div>
              <div class="scoial-heading">
                <p>Mornign Dew</p>
                <strong>Icons, Illustrations</strong>
              </div>
            </figcaption>
          </figure>
        </div><!-- /.portfolio -->
      </div><!-- /portfolio-item -->
      <!-- MODAL/POPUP -->
      <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class=" btn btn-default pull-right" data-dismiss="modal">X</button>
              <span class="modal-title" id="myModalLabel">Our recent work</span>
            </div>
            <div class="modal-body" >
              <img src="img/portfolio02.jpg" alt="img21"/>
            </div>
          </div>
        </div>
      </div>
      <!-- MODAL/POPUP -->



      <!-- portfolio-item -->
      <div data-groups='["all", "image","wordpress", "circle", "video"]' class=" portfolio-item col-xs-12 col-sm-6 col-md-3 shuffle-item filtered " style="margin:0; padding:0;">
        <div class="portfolio">
          <figure class="effect-julia">
            <img alt="img21" src="img/portfolio03.jpg">
            <figcaption>
              <div class="socials">
                <a data-toggle="modal" data-target="#myModal3" href=""><i class="fa fa-expand"></i></a>
                <a href=""><i class="fa fa-share animated"></i></a>
              </div>
              <div class="scoial-heading">
                <p>Mornign Dew</p>
                <strong>Icons, Illustrations</strong>
              </div>
            </figcaption>
          </figure>
        </div><!-- /.portfolio -->
      </div><!-- /portfolio-item -->
      <!-- MODAL/POPUP -->
      <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class=" btn btn-default pull-right" data-dismiss="modal">X</button>
              <span class="modal-title" id="myModalLabel">Our recent work</span>
            </div>
            <div class="modal-body" >
              <img src="img/portfolio03.jpg" alt="img21"/>
            </div>
          </div>
        </div>
      </div>
      <!-- MODAL/POPUP -->


      <!-- portfolio-item -->
      <div data-groups='["image", "all","wordpress", "branding"]' class=" portfolio-item col-xs-12 col-sm-6 col-md-3 shuffle-item filtered " style="margin:0; padding:0;">
        <div class="portfolio">
          <figure class="effect-julia">
            <img alt="img21" src="img/portfolio04.jpg">
            <figcaption>
              <div class="socials">
                <a data-toggle="modal" data-target="#myModal4" href=""><i class="fa fa-expand"></i></a>
                <a href=""><i class="fa fa-share animated"></i></a>
              </div>
              <div class="scoial-heading">
                <p>Mornign Dew</p>
                <strong>Icons, Illustrations</strong>
              </div>
            </figcaption>
          </figure>
        </div><!-- /.portfolio -->
      </div><!-- /portfolio-item -->
      <!-- MODAL/POPUP -->
      <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class=" btn btn-default pull-right" data-dismiss="modal">X</button>
              <span class="modal-title" id="myModalLabel">Our recent work</span>
            </div>
            <div class="modal-body" >
              <img src="img/portfolio04.jpg" alt="img21"/>
            </div>
          </div>
        </div>
      </div>
      <!-- MODAL/POPUP -->


      <!-- portfolio-item -->
      <div data-groups='["all","wordpress", "video", "branding"]' class=" portfolio-item col-xs-12 col-sm-6 col-md-3 shuffle-item filtered " style="margin:0; padding:0;">
        <div class="portfolio">
          <figure class="effect-julia">
            <img alt="img21" src="img/portfolio05.jpg">
            <figcaption>
              <div class="socials">
                <a data-toggle="modal" data-target="#myModal5" href=""><i class="fa fa-expand"></i></a>
                <a href=""><i class="fa fa-share animated"></i></a>
              </div>
              <div class="scoial-heading">
                <p>Mornign Dew</p>
                <strong>Icons, Illustrations</strong>
              </div>
            </figcaption>
          </figure>
        </div><!-- /.portfolio -->
      </div><!-- /portfolio-item -->
      <!-- MODAL/POPUP -->
      <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class=" btn btn-default pull-right" data-dismiss="modal">X</button>
              <span class="modal-title" id="myModalLabel">Our recent work</span>
            </div>
            <div class="modal-body" >
              <img src="img/portfolio05.jpg" alt="img21"/>
            </div>
          </div>
        </div>
      </div>
      <!-- MODAL/POPUP -->



      <!-- portfolio-item -->
      <div data-groups='["image", "all","wprdpress", "branding", "video"]' class=" portfolio-item col-xs-12 col-sm-6 col-md-3 shuffle-item filtered " style="margin:0; padding:0;">
        <div class="portfolio">
          <figure class="effect-julia">
            <img alt="img21" src="img/portfolio06.jpg">
            <figcaption>
              <div class="socials">
                <a data-toggle="modal" data-target="#myModal6" href=""><i class="fa fa-expand"></i></a>
                <a href=""><i class="fa fa-share animated"></i></a>
              </div>
              <div class="scoial-heading">
                <p>Mornign Dew</p>
                <strong>Icons, Illustrations</strong>
              </div>
            </figcaption>
          </figure>
        </div><!-- /.portfolio -->
      </div><!-- /portfolio-item -->
      <!-- MODAL/POPUP -->
      <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class=" btn btn-default pull-right" data-dismiss="modal">X</button>
              <span class="modal-title" id="myModalLabel">Our recent work</span>
            </div>
            <div class="modal-body" >
              <img src="img/portfolio06.jpg" alt="img21"/>
            </div>
          </div>
        </div>
      </div>
      <!-- MODAL/POPUP -->


      <!-- portfolio-item -->
      <div data-groups='["all", "branding", "video"]' class=" portfolio-item col-xs-12 col-sm-6 col-md-3 shuffle-item filtered " style="margin:0; padding:0;">
        <div class="portfolio">
          <figure class="effect-julia">
            <img alt="img21" src="img/portfolio07.jpg">
            <figcaption>
              <div class="socials">
                <a data-toggle="modal" data-target="#myModal7" href=""><i class="fa fa-expand"></i></a>
                <a href=""><i class="fa fa-share animated"></i></a>
              </div>
              <div class="scoial-heading">
                <p>Mornign Dew</p>
                <strong>Icons, Illustrations</strong>
              </div>
            </figcaption>
          </figure>
        </div><!-- /.portfolio -->
      </div><!-- /portfolio-item -->
      <!-- MODAL/POPUP -->
      <div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class=" btn btn-default pull-right" data-dismiss="modal">X</button>
              <span class="modal-title" id="myModalLabel">Our recent work</span>
            </div>
            <div class="modal-body" >
              <img src="img/portfolio07.jpg" alt="img21"/>
            </div>
          </div>
        </div>
      </div>
      <!-- MODAL/POPUP -->


      <!-- portfolio-item -->
      <div data-groups='["image", "all", "wordpress", "video"]' class=" portfolio-item col-xs-12 col-sm-6 col-md-3 shuffle-item filtered " style="margin:0; padding:0;">
        <div class="portfolio">
          <figure class="effect-julia">
            <img alt="img21" src="img/portfolio08.jpg">
            <figcaption>
              <div class="socials">
                <a data-toggle="modal" data-target="#myModal8" href=""><i class="fa fa-expand"></i></a>
                <a href=""><i class="fa fa-share animated"></i></a>
              </div>
              <div class="scoial-heading">
                <p>Mornign Dew</p>
                <strong>Icons, Illustrations</strong>
              </div>
            </figcaption>
          </figure>
        </div><!-- /.portfolio -->
      </div><!-- /portfolio-item -->
      <!-- MODAL/POPUP -->
      <div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn btn-default pull-right" data-dismiss="modal">X</button>
              <span class="modal-title" id="myModalLabel">Our recent work</span>
            </div>
            <div class="modal-body" >
              <img src="img/portfolio08.jpg" alt="img21"/>
            </div>
          </div>
        </div>
      </div>
      <!-- MODAL/POPUP -->
    </div> <!-- /grid -->
  </div><!-- /row -->
</section><!-- /our latest works -->
<?php include 'footer.php'; ?>
</body>
</html>