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
		<link type="text/css" rel="stylesheet" href="/ss/slick.css"/>
		<link type="text/css" rel="stylesheet" href="/css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="/css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="/css/style.css"/>
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
										<span>Liste de souhait</span>
										<div class="qty">0</div>
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

@if (Session('success'))
<div class="alert alert-success">
    {{Session('success')}}
</div>
@endif

@if (Session('danger'))
<div class="alert alert-danger">
    {{Session('danger')}}
</div>
@endif


    @if (Cart::count()>0)
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <div class="px-4 px-lg-0">
                    <!-- For demo purpose -->
                    <!-- End -->

                    <div class="pb-5">
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

                            <!-- Shopping cart table -->
                            <div class="table-responsive">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col" class="border-0 bg-light">
                                      <div class="p-2 px-3 text-uppercase">Produit</div>
                                    </th>
                                    <th scope="col" class="border-0 bg-light">
                                      <div class="py-2 text-uppercase">Prix</div>
                                    </th>
                                    <th scope="col" class="border-0 bg-light">
                                      <div class="py-2 text-uppercase">Quantité</div>
                                    </th>
                                    <th scope="col" class="border-0 bg-light">
                                      <div class="py-2 text-uppercase">Retirer</div>
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                 @foreach (Cart::content() as $product)
                                 <tr>
                                    <th scope="row" class="border-0">
                                      <div class="p-2">
                                      <img src="{{asset('storage/' .$product->model->image)}}" alt="" width="70" class="img-fluid rounded shadow-sm">
                                        <div class="ml-3 d-inline-block align-middle">
                                        <h5 class="mb-0"> <a  class="text-dark d-inline-block align-middle">{{$product->model->nommat}}</a></h5><span class="text-muted font-weight-normal font-italic d-block"></span>
                                        </div>
                                      </div>
                                    </th>
                                <td class="border-0 align-middle"><strong>{{getprix($product->subtotal())}}</strong></td>
                                    <td class="border-0 align-middle">
                                    <select name="qty" id="qty" data-id="{{$product->rowId}}" data-stock="{{$product->model->stock}}" class="custom-select">
                                            @for ($i = 1; $i <=6; $i++)
                                                <option value="{{$i}}" {{$i == $product->qty ? 'selected' : ''}}>{{$i}}</option>

                                            @endfor
                                        </select>
                                    </td>
                                    <td class="border-0 align-middle">
                                        <form action= "{{ route('cart.destroy', $product->rowId) }}", method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-dark"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                  </tr>

                                 @endforeach
                                </tbody>
                              </table>
                            </div>
                            <!-- End -->

                          </div>
                        </div>

                        <div class="row py-5 p-4 bg-white rounded shadow-sm">
                            <div class="col-lg-6">
                              <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Code du coupon</div>
                              @if (!request()->session()->has('coupon'))

                                <div class="p-4">
                                    <p class="font-italic mb-4">Si vous detenez un code coupon, entrez le dans dans le champs si dessous.</p>
                                <form action="{{route('cart.store.coupon')}}" method="POST">
                                    <div class="input-group mb-4 border rounded-pill p-2">

                                        @csrf
                                        <input type="text" placeholder="Entrer votre code ici" name="code" aria-describedby="button-addon3" class="form-control border-0">
                                        <div class="input-group-append border-0">
                                        <button id="button-addon3" type="submit" class="btn btn-dark px-4 rounded-pill"><i class="fa fa-gift mr-2"></i>Appliqué le coupon</button>

                                    </div>
                                    </div>
                                </form>
                                </div>
                              @else
                              <div class="p-4">
                                <p class="font-italic mb-4">Un coupon est déjà appliqué.</p>
                              </div>
                              @endif
                              <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Instructions pour le vendeur</div>
                              <div class="p-4">
                                <p class="font-italic mb-4">Si vous avez une une information pour le vendeur vous pouvez l'écrire dans le box</p>
                                <textarea name="" cols="30" rows="2" class="form-control"></textarea>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Détailles de la commande</div>
                              <div class="p-4">
                                <p class="font-italic mb-4">Les frais d'expédition et supplémentaires sont calculés en fonction des valeurs que vous avez saisies.</p>
                                <ul class="list-unstyled mb-4">
                                  <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Sous-total: </strong><strong>{{getprix(Cart::subtotal())}}</strong></li>
                               <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Coupon: </strong></li>
                                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax:</strong><strong>{{getprix(Cart::tax())}}</strong></li>
                                  <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total:</strong>
                                    <h5 class="font-weight-bold"><strong>{{getprix(Cart::total())}}</strong></h5>
                                  </li>
                                </ul><a href="{{route('checkout.index')}}" class="btn btn-dark rounded-pill py-2 btn-block">Passer à la caisse</a>
                              </div>
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
    @else
    <div class="col-md-12">
        <p style="align-content: center">Votre panier est vide!!!</p>
    </div>

    @endif



	@include('include.newsletter')

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
<script src="/js/jquery.zoom.min.js"></script>
<script src="/js/main.js"></script>
<script>
    var selects = document.querySelectorAll('#qty');
    Array.from(selects).forEach((element)=>{
        element.addEventListener('change', function(){
            var rowId = this.getAttribute('data-id');
            var stock = element.getAttribute('data-stock');
            var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            fetch(
                `/panier/${rowId}`,
                {
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json, text-plain, */*",
                        "X-Requested-With": "XMLHttRequest",
                        "X-CSRF-TOKEN": token

                    },
                    method: 'put',
                    body: JSON.stringify({
                        qty: this.value,
                        stock : stock
                    })
                }
            ).then((data)=>{
                console.log(data);
               location.reload();
            }).catch((error)=>{
                console.log(error);
            })
        });
    });
</script>
@yield('extra-js')
</body>
</html>

