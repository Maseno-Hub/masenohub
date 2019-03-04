<?php include 'header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Maseno Hub Team</title>

  <!-- custom stylesheet -->
  <link rel="stylesheet" href="css/main.css">

  <!-- font-awesome icons -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Jquery CDN -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

  <!-- Plugin  -->
  <script src="js/jquery.reflection.js"></script>
  <script src="js/jquery.cloud9carousel.js"></script>
</head>
<body>
  <div id="wrap">
    <div id="showcase">
      <img src="img/teams/Alison.png" alt="Mike" class="cloud9-item">
      <img src="img/teams/Adam.png" alt="Ken K" class="cloud9-item">
      <img src="img/teams/Amy.png" alt="Emmanuel" class="cloud9-item">
      <img src="img/teams/Blake.png" alt="Symons" class="cloud9-item">
      <img src="img/teams/Angela.png" alt="Jaywezz" class="cloud9-item">
      <img src="img/teams/Angela.png" alt="Nduta" class="cloud9-item">
      <img src="img/teams/Claire.png" alt="CoderJaymoh" class="cloud9-item">
      <img src="img/teams/Claire.png" alt="Peterson" class="cloud9-item">
      <img src="img/teams/Blake.png" alt="Peet" class="cloud9-item">
    </div>

    <p id="item-title">&nbsp;</p>

    <div class="nav noselect">
      <button class="left"><i class="fa fa-arrow-left"></i></button>
      <button class="right"><i class="fa fa-arrow-right"></i></button>
    </div>

  </div>

  <script type="text/javascript">

  $(function() {
    var showcase = $("#showcase")

    showcase.Cloud9Carousel( {
      yPos: 42,
      yRadius: 48,
      mirrorOptions: {
        gap: 12,
        height: 0.2
      },
      buttonLeft: $(".nav > .left"),
      buttonRight: $(".nav > .right"),
      autoPlay: true,
      bringToFront: true,

      onRendered: showcaseUpdated,
      onLoaded: function() {
        showcase.css( 'visibility', 'visible' )
        showcase.css( 'display', 'none')
        showcase.fadeIn( 1500 )
      }
    })

    function showcaseUpdated( showcase ) {
      var title = $("#item-title").html(
        $(showcase.nearestItem()).attr( 'alt' )
      )

      var c = Math.cos((showcase.floatIndex() % 1) * 2 * Math.PI)
      title.css('opacity', 0.5 + (0.5 * c))
    }

    $('.nav > button').click( function( e ) {
      var b = $(e.target).addClass( 'down' )
      setTimeout( function() { b.removeClass( 'down' ) }, 80)
    } )

    $(document).keydown( function( e ) {
      switch( e.keyCode ) {
        case 37:
        $('.nav > .left').click()
        break

        case 39:
        $('.nav > .right').click()
      }
    })
  })

  </script>
</body>
</html>
