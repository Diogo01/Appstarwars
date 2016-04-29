<div class="container">

     <ul class="nav navbar-nav navbar-right">
	    <!-- Authentication Links -->
	    @if (Auth::guest())
	        <li><a href="{{ url('/login') }}">Login</a></li>
	        <li><a class="btn-default" href="{{ url('/register') }}">Identifier</a></li>
	    @else
	    	<li><a href="{{ url('/') }}">Site</a></li>
			 <li><a href="{{ url('/post') }}">Admin</a></li>
			 <li><a href="{{ url('/post/create') }}">Create</a></li>
			 <li><a href="{{ url('/post/edit') }}">Edite</a></li>
	        <li class="dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
	                {{ Auth::user()->name }} <span class="caret"></span>
	            </a>

	            <ul class="dropdown-menu" role="menu">
	                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
	            </ul>
	        </li>
	    @endif
	</ul>

</div>