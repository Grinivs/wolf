<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Free coming soon template with jQuery countdown">

  <title>Buycoins.ch - Deine Kryptowährungsplattform</title>

  <!-- Bootstrap -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/bootstrap-theme.css" rel="stylesheet">
  <link href="assets/css/font-awesome.css" rel="stylesheet">

  <!-- siimple style -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: WeBuild
    Theme URL: https://bootstrapmade.com/free-bootstrap-coming-soon-template-countdwon/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

  <div id="wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-12"><br><br>
		<img src="img/white_logo_transparent_background.png" style="max-width: 350px;"><br><br><br><br>
          <h2 class="subtitle">Wir arbeiten daran die Webseite aufzubauen. Der Launch der Webseite ist in</h2>
          <div id="countdown"></div>
         <br>



          <div class="social">
            <a href="https://www.facebook.com/BuycoinsCH"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/buycoins.ch/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>


<br><br><br><br><br><br><br><br><br><br>
      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
          <p class="copyright">&copy; WeBuild - All Rights Reserved</p>
          <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.countdown.min.js"></script>
  <script type="text/javascript">
    $('#countdown').countdown('2018/07/20', function(event) {
      $(this).html(event.strftime('%w Wochen %d Tage <br /> %H:%M:%S'));
    });
  </script>

  <script src="contactform/contactform.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121432726-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-121432726-1');
</script>

</body>

</html>
