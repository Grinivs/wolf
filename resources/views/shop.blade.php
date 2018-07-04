@extends('layouts.layout')
@section('content')
<script><?php require_once(__DIR__.'/public/config.php'); ?></script>
<!-- ##### Course Area Start ##### -->
    <div class="cryptos-feature-area section-padding-100-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto">
                        <h3>Eine Investition in die <br><span>Zukunft</span></h3>
                        <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod erat. Ut at erat et arcu pulvinar cursus a eget nisl. Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Course Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <form action="charge.php" method="post">
                    <div class="single-feature-area mb-100 text-center">
                        <img src="img/bitcoin.png" style="max-width: 120px;"><br><br>
                        <h3>Bitcoin - BTC</h3>
                        <div>
                          <script type="text/javascript">
                                                      baseUrl = "https://widgets.cryptocompare.com/";
                                                      var scripts = document.getElementsByTagName("script");
                                                      var embedder = scripts[ scripts.length - 1 ];
                                                      var cccTheme = {"General":{"background":""},"Currency":{"color":"#000"},"Menu":{"background":""}};
                                                      (function (){
                                                      var appName = encodeURIComponent(window.location.hostname);
                                                      if(appName==""){appName="local";}
                                                      var s = document.createElement("script");
                                                      s.type = "text/javascript";
                                                      s.async = true;
                                                      var theUrl = baseUrl+'serve/v2/coin/header?fsyms=BTC&tsyms=CHF';
                                                      s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                                                      embedder.parentNode.appendChild(s);
                                                      })();
                                                      </script>
                        </div>
                        <br>
                        <a href="chart#C1"><p>Für eine detaillierte Kursübersicht hier klicken</p></a>
                        <input type="integer" name="price"><br><br>
                        <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                         data-key=""
                         data-description="Litecoin"
                         data-name="Buycoins.ch"
                         data-shipping-address="true"
                         data-locale="auto"
                         data-currency="chf">
                       </script>
                    </div>
                    </form>
                </div>


        </div>
    </div>
    <!-- ##### Course Area End ##### -->
@endsection
