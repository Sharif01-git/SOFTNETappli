<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- shop -->
            <div class="col-md-4 col-xs-6">
                <div class="shop">
                    <div class="shop-img">
                        <img src="./img/shop01.png" alt="">
                    </div>
                    <div class="shop-body">
                        <h3>Laptop<br>Collection</h3>
                        <a href="{{route('include.store')}}" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- /shop -->

            <!-- shop -->
            <div class="col-md-4 col-xs-6">
                <div class="shop">
                    <div class="shop-img">
                        <img src="./img/shop03.png" alt="">
                    </div>
                    <div class="shop-body">
                        <h3>Accessories<br>Collection</h3>
                        <a href="{{route('include.store')}}" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- /shop -->

            <!-- shop -->
            <div class="col-md-4 col-xs-6">
                <div class="shop">
                    <div class="shop-img">
                        <img src="./img/shop02.png" alt="">
                    </div>
                    <div class="shop-body">
                        <h3>Cameras<br>Collection</h3>
                        <a href="{{route('include.store')}}" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- /shop -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">Nouveaux Produits</h3>
                    <div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                                @foreach (App\Category::all() as $category)
                            <li><a href="{{route('Layout.base', ['categorie' => $category->slug])}}">{{ $category->nom }}</a></li>
                                @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab1" class="tab-pane active">
                            <div class="products-slick" data-nav="#slick-nav-1">
                                <!-- product -->
                                @foreach ( $products as $product)
                                <div class="product">
                                    <div class="product-img">
                                        <img src="{{asset('storage/' .$product->image)}}" alt="">
                                        <div class="product-label">

                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">
                                            @foreach ($product->categories as $category)
                                               {{$category->nom}}
                                            @endforeach
                                        </p>
                                        <h3 class="product-name"><a href="#">{{$product -> nommat}}</a></h3>
                                        <h4 class="product-price">{{$product -> getprix()}}</del></h4>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                            <button class="quick-view"><a href="{{ route('include.show', $product->slug) }}"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></a></button>
                                        </div>
                                    </div>

                                </div>
                                @endforeach

                                <!-- /product -->


                            </div>
                            <div id="slick-nav-1" class="products-slick-nav"></div>
                        </div>
                        <!-- /tab -->
                    </div>
                </div>
            </div>
            <!-- Products tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- HOT DEAL SECTION -->
<div id="hot-deal" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="hot-deal">
                    <ul class="hot-deal-countdown">
                        <li>
                            <div>
                                <h3>02</h3>
                                <span>Days</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3>10</h3>
                                <span>Hours</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3>34</h3>
                                <span>Mins</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3>60</h3>
                                <span>Secs</span>
                            </div>
                        </li>
                    </ul>
                    <h2 class="text-uppercase">hot deal this week</h2>
                    <p>New Collection Up to 50% OFF</p>
                    <a class="primary-btn cta-btn" href="#">Shop now</a>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /HOT DEAL SECTION -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">Les plus vendus</h3>
                    <div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                                @foreach (App\Category::all() as $category)
                            <li><a href="{{route('Layout.base', ['categorie' => $category->slug])}}">{{ $category->nom }}</a></li>
                                @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab2" class="tab-pane fade in active">
                            <div class="products-slick" data-nav="#slick-nav-2">
                                <!-- product -->
                                @foreach ($products as $product)
                                <div class="product">
                                    <div class="product-img">
                                        <img src="{{asset('storage/' .$product->image)}}" alt="">
                                        <div class="product-label">

                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">
                                            @foreach ($product->categories as $category)
                                               {{$category->nom}}
                                            @endforeach
                                        </p>
                                        <h3 class="product-name"><a href="#">{{$product -> nommat}}</a></h3>
                                        <h4 class="product-price">{{$product -> getprix()}}</del></h4>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                            <button class="quick-view"><a href="{{ route('include.show', $product->slug) }}"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></a></button>
                                        </div>
                                    </div>

                                </div>
                                @endforeach

                                <!-- /product -->


                            </div>
                            <div id="slick-nav-2" class="products-slick-nav"></div>
                        </div>
                        <!-- /tab -->
                    </div>
                </div>
            </div>
            <!-- /Products tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-4 col-xs-6">
                <div class="section-title">
                    <h4 class="title">Les plus vendus</h4>
                    <div class="section-nav">
                        <div id="slick-nav-3" class="products-slick-nav"></div>
                    </div>
                </div>

                <div class="products-widget-slick" data-nav="#slick-nav-3">
                    <div>
                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./img/product07.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Smartphone</p>
                                <h3 class="product-name"><a href="#">samsung</a></h3>
                                <h4 class="product-price">50 0000 FCFA</h4>
                            </div>
                        </div>
                        <!-- /product widget -->

                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./img/product08.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Ordinateur</p>
                                <h3 class="product-name"><a href="#">PC HP</a></h3>
                                <h4 class="product-price">300 000 FCFA</h4>
                            </div>
                        </div>
                        <!-- /product widget -->

                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./img/product09.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Cameras</p>
                                <h3 class="product-name"><a href="#">appareil photo</a></h3>
                                <h4 class="product-price">30 000 FCFA</h4>
                            </div>
                        </div>
                        <!-- product widget -->
                    </div>

                    <div>
                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./img/product01.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Ordinateur</p>
                                <h3 class="product-name"><a href="#">PC ASUS</a></h3>
                                <h4 class="product-price">350 000 FCFA</h4>
                            </div>
                        </div>
                        <!-- /product widget -->

                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./img/product02.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Accessoires</p>
                                <h3 class="product-name"><a href="#">Casque</a></h3>
                                <h4 class="product-price">15 000 FCFA</h4>
                            </div>
                        </div>
                        <!-- /product widget -->

                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./img/product03.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Ordinateur</p>
                                <h3 class="product-name"><a href="#">PC Lenovo</a></h3>
                                <h4 class="product-price">250 000 FCFA</h4>
                            </div>
                        </div>
                        <!-- product widget -->
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xs-6">
                <div class="section-title">
                    <h4 class="title">Les plus vendus</h4>
                    <div class="section-nav">
                        <div id="slick-nav-4" class="products-slick-nav"></div>
                    </div>
                </div>

                <div class="products-widget-slick" data-nav="#slick-nav-3">
                    <div>
                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./img/product07.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Smartphone</p>
                                <h3 class="product-name"><a href="#">samsung</a></h3>
                                <h4 class="product-price">50 0000 FCFA</h4>
                            </div>
                        </div>
                        <!-- /product widget -->

                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./img/product08.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Ordinateur</p>
                                <h3 class="product-name"><a href="#">PC HP</a></h3>
                                <h4 class="product-price">300 000 FCFA</h4>
                            </div>
                        </div>
                        <!-- /product widget -->

                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./img/product09.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Cameras</p>
                                <h3 class="product-name"><a href="#">appareil photo</a></h3>
                                <h4 class="product-price">30 000 FCFA</h4>
                            </div>
                        </div>
                        <!-- product widget -->
                    </div>

                    <div>
                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./img/product01.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Ordinateur</p>
                                <h3 class="product-name"><a href="#">PC ASUS</a></h3>
                                <h4 class="product-price">350 000 FCFA</h4>
                            </div>
                        </div>
                        <!-- /product widget -->

                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./img/product02.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Accessoires</p>
                                <h3 class="product-name"><a href="#">Casque</a></h3>
                                <h4 class="product-price">15 000 FCFA</h4>
                            </div>
                        </div>
                        <!-- /product widget -->

                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./img/product03.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Ordinateur</p>
                                <h3 class="product-name"><a href="#">PC Lenovo</a></h3>
                                <h4 class="product-price">250 000 FCFA</h4>
                            </div>
                        </div>
                        <!-- product widget -->
                    </div>
                </div>
            </div>

            <div class="clearfix visible-sm visible-xs"></div>

            <div class="col-md-4 col-xs-6">
                <div class="section-title">
                    <h4 class="title">Les plus vendus</h4>
                    <div class="section-nav">
                        <div id="slick-nav-5" class="products-slick-nav"></div>
                    </div>
                </div>

                <div class="products-widget-slick" data-nav="#slick-nav-3">
                    <div>
                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./img/product07.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Smartphone</p>
                                <h3 class="product-name"><a href="#">samsung</a></h3>
                                <h4 class="product-price">50 0000 FCFA</h4>
                            </div>
                        </div>
                        <!-- /product widget -->

                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./img/product08.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Ordinateur</p>
                                <h3 class="product-name"><a href="#">PC HP</a></h3>
                                <h4 class="product-price">300 000 FCFA</h4>
                            </div>
                        </div>
                        <!-- /product widget -->

                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./img/product09.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Cameras</p>
                                <h3 class="product-name"><a href="#">appareil photo</a></h3>
                                <h4 class="product-price">30 000 FCFA</h4>
                            </div>
                        </div>
                        <!-- product widget -->
                    </div>

                    <div>
                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./img/product01.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Ordinateur</p>
                                <h3 class="product-name"><a href="#">PC ASUS</a></h3>
                                <h4 class="product-price">350 000 FCFA</h4>
                            </div>
                        </div>
                        <!-- /product widget -->

                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./img/product02.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Accessoires</p>
                                <h3 class="product-name"><a href="#">Casque</a></h3>
                                <h4 class="product-price">15 000 FCFA</h4>
                            </div>
                        </div>
                        <!-- /product widget -->

                        <!-- product widget -->
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="./img/product03.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Ordinateur</p>
                                <h3 class="product-name"><a href="#">PC Lenovo</a></h3>
                                <h4 class="product-price">250 000 FCFA</h4>
                            </div>
                        </div>
                        <!-- product widget -->
                    </div>
                </div>
            </div>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->
