
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>SOFTNET</title>
        <script src="{{ asset('/js/app.js') }}" defer></script>


		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="/css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="/css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="/css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="/css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
        <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/jquery-3.3.1.slim.min.js') }}" rel="stylesheet">
        <link href="{{ asset('/css/bootstrap.bundle.min.js') }}" rel="stylesheet">
        <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<header>
            <!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +228 93 07 21 73</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> softnettogo@gmail.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i>Agoè koffi-panou</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-dollar"></i>XOF</a></li>
						@include('partials.auth')
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<h1 style="color: white">SOFTNET</h1>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
                        @include('partials.search')
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									<a href="#">
										<i class="fa fa-heart-o"></i>
										<span>Your Wishlist</span>
										<div class="qty">2</div>
									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								<div>
                                <a href="{{route('cart.index')}}">
										<i class="fa fa-shopping-cart"></i>
										<span>Panier</span>
                                    <div class="qty">{{Cart::count()}}</div>
									</a>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->


<!-- NAVIGATION -->
<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                <li class="active"><a href="{{route('Layout.base')}}">Home</a></li>
                @foreach (App\Category::all() as $category)
            <li><a href="{{route('Layout.base', ['categorie' => $category->slug])}}">{{ $category->nom }}</a></li>
                @endforeach
            <li ><a href="{{route('include.store')}}">Tous produits</a></li>


            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>
<!-- /NAVIGATION -->



<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                          <strong>  <div class="card-header">{{ __('Liste des commandes qui ont étées passées') }}</div></strong>

                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                               @foreach (Auth()->user()->orders as $order)
                                    <div class="card">
                                        <div class="card-header">
                                            Commande passé le {{Carbon\Carbon::parse($order->payment_created_at)->format('d/m/y à H:i')}} d'un montant de
                                        <strong>{{getprix($order->amount/100)}}</strong>
                                        </div>
                                        <div class="cart-body">
                                            <h6>Liste des produits</h6>
                                            @foreach (unserialize($order->products) as $product)
                                                <div>Nom du produit: {{$product[0]}}</div>
                                                <div>Prix: {{getprix($product[1]/1000)}}</div>
                                                <div>Quantité: {{$product[2]}}</div>
                                            @endforeach
                                        </div>
                                    </div>

                               @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>

<!-- NEWSLETTER -->
<div id="newsletter" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="newsletter">
                    <p>Sign Up for the <strong>NEWSLETTER</strong></p>
                    <form>
                        <input class="input" type="email" placeholder="Enter Your Email">
                        <button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
                    </form>
                    <ul class="newsletter-follow">
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /NEWSLETTER -->


	<!-- FOOTER -->
<footer id="footer">
    <!-- top footer -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">A propos de nous</h3>
                        <p>SOFTNET est une entreprise spécialisée dans la vente des matériels informatiques</p>
                        <ul class="footer-links">
                            <li><a href="#"><i class="fa fa-map-marker"></i>Agoè koffi-panou</a></li>
                            <li><a href="#"><i class="fa fa-phone"></i>+228 93 07 21 73</a></li>
                            <li><a href="#"><i class="fa fa-envelope-o"></i>softnettogo@gmail.com</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Categories</h3>
                        <ul class="footer-links">
                            <li><a href="#">Hot deals</a></li>
                            <li><a href="#">Laptops</a></li>
                            <li><a href="#">Smartphones</a></li>
                            <li><a href="#">Cameras</a></li>
                            <li><a href="#">Accessories</a></li>
                        </ul>
                    </div>
                </div>

                <div class="clearfix visible-xs"></div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Informations</h3>
                        <ul class="footer-links">
                            <li><a href="#">A propos de nous</a></li>
                            <li><a href="#">Contactez nous</a></li>
                            <li><a href="#">Termes & Conditions</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Service</h3>
                        <ul class="footer-links">
                            <li><a href="#">Mon compte</a></li>
                            <li><a href="#">Panier</a></li>
                            <li><a href="#">Liste de souhait</a></li>
                            <li><a href="#">Aide</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /top footer -->

    <!-- bottom footer -->
    <div id="bottom-footer" class="section">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="footer-payments">
                        <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                        <li><a href="#"><i class="fa fa-credit-card"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
                    </ul>
                    <span class="copyright">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous droits reservés | Ce template a été réadapté<i class="fa fa-heart-o" aria-hidden="true"></i> par<a href="https://colorlib.com" target="_blank">Sharif</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </span>
                </div>
            </div>
                <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bottom footer -->
</footer>
<!-- /FOOTER -->

<!-- jQuery Plugins -->
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/slick.min.js"></script>
<script src="/js/nouislider.min.js"></script>
<script src="/composer.jsonjs/jquery.zoom.min.js"></script>
<script src="/js/main.js"></script>
@yield('extra-js')
</body>
</html>

