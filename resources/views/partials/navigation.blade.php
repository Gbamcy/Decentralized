<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{asset('assets/img/logo.png')}}" alt="church logo" style="border-radius: 5px">
            <!--        <h1>Rhema Salvation City<span>.</span></h1>-->
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li>
                    <form class="d-flex input-group w-auto opacity-75" style="padding: 0 20px;">
                        <input
                            type="search"
                            class="form-control rounded"
                            placeholder="Search"
                            aria-label="Search"
                            aria-describedby="search-addon"
                        />
                           <span class="input-group-text border-0" id="search-addon">
                            <i class="fas fa-search"></i>
                           </span>
                    </form>

                </li>

                <li><a href="{{url('/')}}" class="active">Home</a></li>
                <li><a href="{{url('/about')}}">About</a></li>
                <li><a href="{{url('/gallery')}}">Gallery</a></li>
                <li class="dropdown"><a href="{{url('/activities')}}"><span>Activities</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="{{url('/pastor')}}">Meet Pastor</a></li>
                        <li class="dropdown"><a href="{{url('/posts')}}"><span>Announcement</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><a href="#"></a></li>
                                <li><a href="{{url('/donation')}}">Tithe</a></li>
                                <li><a href="{{url('/pastor')}}">Bible Study</a></li>
                                <li><a href="{{url('/donation')}}">Donation</a></li>
                                <li><a href="{{url('/posts')}}">Announcement</a></li>
                                <li><a href="{{('/donation')}}">Church Projects</a></li>

                            </ul>
                        </li>
                        <li><a href="{{url('/template')}}">Live stream</a></li>
                        <li><a href="{{url('/template')}}">Audio</a></li>
                        <li><a href="{{url('/template')}}">Video</a></li>
                    </ul>
                </li>
                <li><a href="{{url('/contact')}}">Contact</a></li>
                @if(Auth::check())
                    <li>
                        <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">@csrf</form>
                        <a class="dropdown-item" href="{{url('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Logout</a>

                    </li>

                @else
                    <li><a href="{{url('/login')}}">Login</a></li>

                @endif


            </ul>
        </nav><!-- .navbar -->
        <!--search --->

    </div>
</header> <!=====end header============>





