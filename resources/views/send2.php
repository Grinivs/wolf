<!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="top-header-content h-100 d-flex align-items-center justify-content-between">
                            <!-- Top Headline -->
                            <div class="top-headline">
                                <p>Willkommen bei <span>Buycoins.ch</span></p>
                            </div>
                            <!-- Top Login & Faq & Earn Monery btn -->
                            <div class="login-faq-earn-money">
                                <a href="signin">Login</a>
                                <a href="#">FAQ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="cryptos-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="cryptosNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="home"><img src="img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    {!! menu('Frontend', 'incloudings/frontend') !!}
                                </ul>

                                <!-- Newsletter Form -->
                                <div class="header-newsletter-form">
                                    <?php
          if($_POST['email'] != "" )
        {
          $empf = "info@buycoins.ch";
          $from = $_POST['email'];
          $betreff = "Benachrichtige Mich!" ;
          $betreff2 = "Herzlichen Glückwunsch";
          $message2 = "Sie haben unseren Newsletter erfolgreich Abonniert. Sie werden informiert, sobald es News zu unserer Seite gibt.";

          mail($empf, $betreff, $from);

          mail($from, $betreff2, $empf, $message2);

          echo "Vielen Dank. Sie werden, sobald die Webseite verfügbar ist, von uns benachrichtigt.";
        }
         else
         {
           echo "Bitte füllen Sie alle Felder aus";
         }

         ?>
                                </div>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->