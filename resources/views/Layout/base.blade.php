@include('include.header')

	<body>

@include('include.navigation')
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

@if (count($errors) > 0 )
    <div class="alert alert-danger">
        <ul class="mb-0 mt-0">
            @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>

@endif

@if (request()->input('q'))
<h6>{{ $products->total() }} résultat pour la recherche "{{request()->q}}"</h6>
@endif

		@include('include.contenu')
		@include('include.newsletter')

	@include('include.footer')
	</body>
</html>
