<header>
  	<div class="container">
	<div class="row">
		<div class="col-md-3 col-sm-3 col-xs-3">
			<a href="{{ url('/') }}" id="logo">Landis</a>
		</div>
		<div class="col-md-9 col-sm-9 col-xs-9">
			<div class="pull-right">
                {{-- Authentication Links --}}
                @guest
                    <a href="/login" class="button_top" id="login_top">Sign in</a>    
                    <ul id="top_nav" class="hidden-xs">    
                        <li><a href="/apply">Wizard Apply</a></li>
                        @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                    </ul>
                @endguest

                @auth
                    <div class="pull-right">
                        <a href="/apply" class="button_top hidden-xs" id="apply">Apply now</a>
                    </div>
                @endauth
		</div>
	</div>
</div>
</header>