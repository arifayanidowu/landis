<nav>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div id="mobnav-btn"></div>
			<ul class="sf-menu">
				<li>
				    <a href="/">Home</a>
				</li>
				<li class="normal_drop_down">
				<a href="#">Course</a>
				<div class="mobnav-subarrow"></div>
				<ul>
                	<li><a href="#">Courses grid</a></li>
                    <li><a href="#">Courses list</a></li>
                    <li><a href="#">Course page Txt</a></li>
                    <li><a href="#">Course page Video</a></li>
                    <li><a href="#">Course details v1</a></li>
                    <li><a href="#">Course details v2</a></li>
                    <li><a href="#">Course details v3</a></li>
					<li><a href="#">Course details v4</a></li>
                    <li><a href="#">Course details v5</a></li>
                    <li><a href="#">Seminar timeline</a></li>
				</ul>
				</li>
				<li><a href="/plans">Prices &amp; Plans</a></li>
				<li><a href="/blog">Blog</a></li>
                <li class="mega_drop_down">
				<a href="#">Pages (Megamenu)</a>
                <div class="mobnav-subarrow"></div>
                <div class="sf-mega">
                	<div class="col-md-4 col-sm-6">
                    	<h5>Communicate</h5>
                            <ul class="mega_submenu">
                            	<li><a href="/about">About us</a></li>
								<li><a href="/teachers">Teachers</a></li>
                                <li><a href="/teacher/profile">Teacher profile</a></li>
                                <li><a href="/member/profile">Member profile</a></li>
                                <li><a href="/blog">Blog</a></li>
                                <li><a href="/events">News &amp; Events</a></li>
                            </ul>
                    </div>
                  <div class="col-md-4 col-sm-6">
                   <h5>Other pages</h5>
                          <ul class="mega_submenu">
                                @guest
                                  <li>
                                    <a href="/login">Login</a>
                                  </li>
                                  @if (Route::has('register'))
                                    <li><a href="{{route('register')}}">Register</a></li>
                                  @endif
                                @endguest
                              <li><a href="/gallery">Photo &amp; video gallery <img src="{{ asset('img/icon/new.png') }}" alt=""></a></li>
                              <li>
                                <a href="/apply" id="apply">Apply now</a>
                              </li>
                          </ul>
                    </div>
                    <div class="col-md-4 col-sm-6">
                    <h5>Submenu with icons</h5>
                            <ul class="mega_submenu icons">
                            	<li><a href="#"> Downloads<i class="icon-download"></i></a></li>
                                <li><a href="#">Video files <i class="icon-video"></i></a></li>
                                <li><a href="#">Audio files <i class="icon-mic"></i></a></li>
                                <li><a href="#">Members <i class="icon-user"></i></a></li>
                            </ul>
                    </div>
                </div>
                </li>
                <li><a href="/contact">Contacts</a></li>
                @auth
                    <li class="normal_drop_down">
                        <a>
                          <i class="fas fa-user mr-2"></i> {{ Auth::user()->name }}
                        </a>
                    <div class="mobnav-subarrow"></div>

                    <ul>
                        <li>
                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                    </li>
                @endauth
			</ul>
            <div class="col-md-3 pull-right hidden-sm hidden-xs">
                    <div id="sb-search" class="sb-search">
						<form action="#" method="POST">
                            @csrf
							<input class="sb-search-input" placeholder="Search Courses..." type="text" value="" name="search" id="search">
							<input class="sb-search-submit" type="submit" value="">
							<span class="sb-icon-search"></span>
						</form>
					</div>
              </div>
		</div>
	</div>
</div>
</nav>
