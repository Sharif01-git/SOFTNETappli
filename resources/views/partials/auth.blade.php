   <!-- Authentication Links -->
   @guest
   <li class="nav-item">
       <a class="nav-link" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
   </li>
   @if (Route::has('register'))
       <li class="nav-item">
           <a class="nav-link" href="{{ route('register') }}">{{ __('S\'enrégistrer') }}</a>
       </li>
   @endif
@else
   <li class="nav-item dropdown">
       <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
           {{ Auth::user()->name }}
       </a>

       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('home') }}" style="color: red">Mes commandes </a><br>

           <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" style="color:red">
               {{ __('Se déconnecter') }}
           </a>

           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
               @csrf
           </form>
       </div>
   </li>
@endguest
