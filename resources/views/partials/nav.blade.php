<div class="container">

     <ul class="nav navbar-nav">
		
		<li><a href="{{ url('/') }}">Home</a></li>
		<li><a href="{{ url('/post') }}">Admin</a></li>
		 @forelse($categories as $id => $title)

	    <li><a href="{{ Action('FrontController@showPostByCat', $id)}}">{{$title}}</a></li>
	    @empty
	    @endforelse
	</ul>

	<ul class="nav navbar-nav navbar-right">
	    <!-- Authentication Links -->
	    @if (Auth::guest())
	        <li><a href="{{ url('/login') }}">Login</a></li>
	        <li><a class="btn-default" href="{{ url('/register') }}">Identifier</a></li>
	    @else
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

