@include('include.header')

	<body>

@include('include.navigation')
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <h1>Votre commande a bien été prise en compte!</h1><br>
            <p>Cliquez sur télécharger pour avoir la facture
        <a href="{{route('checkout.download')}}"><button type="submit">Télecharger</button></a>
    </p>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>

@include('include.newsletter')

@include('include.footer')
	</body>
</html>
