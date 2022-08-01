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
