@extends('layouts.layout')
@section('content')
<div class="cryptos-feature-area section-padding-100-0">
    <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto">
                        <h3>Alle aktuellen Kurse <br><span>auf einem Blick</span></h3><br>
            						<script type="text/javascript">
            						baseUrl = "https://widgets.cryptocompare.com/";
            						var scripts = document.getElementsByTagName("script");
            						var embedder = scripts[ scripts.length - 1 ];
            						(function (){
            						var appName = encodeURIComponent(window.location.hostname);
            						if(appName==""){appName="local";}
            						var s = document.createElement("script");
            						s.type = "text/javascript";
            						s.async = true;
            						var theUrl = baseUrl+'serve/v1/coin/multi?fsyms=BTC,ETH,LTC,TRON,XVG,XMR&tsyms=CHF,EUR,USD';
            						s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
            						embedder.parentNode.appendChild(s);
            						})();
            						</script>
               		 </div>
                 </div>
               </div>
       </div>
   </div>



@endsection
