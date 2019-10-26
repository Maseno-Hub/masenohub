<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <title>MASENO HUB</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/png" href="img/favicon.jpg" />

  <!-- Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700'
    rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,300,600,700' rel='stylesheet'
    type='text/css'>

  <!-- Revolution css -->
  <link rel="stylesheet" type="text/css" href="vendor/rs-plugin/css/settings.css" media="screen" />
  <link rel="stylesheet" href="vendor/rs-plugin/css/extralayer.css">

  <!-- Flat icon css -->
  <link rel="stylesheet" href="vendor/flat-icon/flaticon.css">

  <!-- Font awesome -->
  <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
  <!-- max cdn -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <!-- custom style -->
  <link rel="stylesheet" href="css/event.css" />

  <!-- Owl Carosel css -->
  <link rel="stylesheet" href="vendor/owl/css/owl.carousel.css">
  <link rel="stylesheet" href="vendor/owl/css/owl.theme.default.css">
  <link rel="stylesheet" href="vendor/owl/css/owl.theme.css">
  <!-- mmenu -->
  <link type="text/css" rel="stylesheet" href="vendor/mmenu/css/jquery.mmenu.css" />

  <!-- Bootstrap css -->
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <!-- Animate css -->
  <link rel="stylesheet" href="css/animate.css">

  <!-- Custom Style css -->
  <link rel="stylesheet" href="css/hover.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/custom.css">

  <!-- custom stylesheet -->
  <?php if (basename($_SERVER['PHP_SELF']) == "team.php"): ?>
  <link rel="stylesheet" href="css/main.css">
  <?php endif; ?>

  <!-- font-awesome icons -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Jquery CDN -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

  <!-- Plugin  -->
  <script src="js/jquery.reflection.js"></script>
  <script src="js/jquery.cloud9carousel.js"></script>
  <script src="js/event.js"></script>



  <!--[if lt IE 9]>
  <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')
  </script>
  <![endif]-->
</head>

<body>

  <div class="main">
    <header class="header-part">
      <div id="home">
        <!-- Fixed navbar -->
        <div class="navi navbar-default navbar navbar-expand-sm bg-light  fixed-top" role="navigation">
          <div class="container">
            <a class="navbar-brand brand mb-5 mr-5 mt-0" href="index.php">MASENO HUB</a>

            <div class="navbar-header page-scroll">
              <a href="#menu">
                <button type="button" data-effect="st-effect-1" class="navbar-toggle collapsed" data-toggle="collapse"
                  data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </a>
            </div>
            <!-- When edditing any content in the navigation. please edit this file   -->
            <?php include 'navigation.php'; ?>

            <!-- When edditing any content in the navigation. please edit this file -->
          </div>
        </div><!-- End of Nav -->
      </div>
    </header>
  </div>
  <div class="pt-5">
    <div class="container-fluid pt-5">
      <br>
      <br><br>
      <div class="container-fluid card bg-light pt-5">
        <div class="row">
          <div class="col-sm-4 image" id="boxshadow">
            <img src="img/event.jpg" style="position: relative;" alt="Event">
            <span style="position:absolute; bottom: 100px; left: 50px;color:white;display:none;font-size:25px">Event 1
              <i class="far fa-star w-25"></i> <br> 
              <a href="whatsapp://send?text=The link will be supplied later" class="text-success"
                data-action="share/whatsapp/share"><i class="fas fa-share-alt"> </i> WhatsApp</a>
            </span>
          </div>
          <div class="col-sm-8 pt-5">
            <span class="badge badge-pill" id="spanProgress" style="padding:5px"><h3 id="progress"></h3></span>
            <h1>Event 1</h1><br>
            <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi libero
              minus nisi cumque excepturi labore minima saepe temporibus repudiandae et?
              Earum, unde est? Explicabo ab dolore doloribus dolor voluptatem fugiat? </p>
            <p><a href="gallery.php"> View Event resources</a></p>
            <div class="timer" id="timer">
              <div class="timer" id="days"></div>
              <div class="timer" id="hours"></div>
              <div class="timer" id="minutes"></div>
              <div class="timer" id="seconds"></div>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <br><br>
      <div class="container-fluid card bg-light pt-5">
        <div class="row  flex-column-reverse flex-sm-row">
          <div class="col-sm-8 pt-5">
            <span class="badge badge-pill p-2 badge-danger"><h4>The event has passed </h4></span>
            <h1>Event 1</h1><br>
            <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi libero
              minus nisi cumque excepturi labore minima saepe temporibus repudiandae et?
              Earum, unde est? Explicabo ab dolore doloribus dolor voluptatem fugiat? </p>
            <p><a href="gallery.php"> View Event resources</a></p>
            <div class="timer" id="timer">
              <div class="timer" id="days"></div>
              <div class="timer" id="hours"></div>
              <div class="timer" id="minutes"></div>
              <div class="timer" id="seconds"></div>
            </div>
          </div>
          <div class="col-sm-4 image" id="boxshadow">
            <img src="img/event.jpg" style="position: relative;" alt="Event">
            <span style="position:absolute; bottom: 100px; left: 50px;color:white;display:none;font-size:25px">Event 1
              <i class="far fa-star w-25"></i> <br> 
              <a href="whatsApp://send?text=The link will be supplied later" class="text-success"
                data-action="share/whatsapp/share"><i class="fas fa-share-alt"> </i> Whatsapp</a>
            </span>
          </div>
        </div>
      </div>
    </div>
    <br>
    <?php include 'footer.php'; ?>

  </div>