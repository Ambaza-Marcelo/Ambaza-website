<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse"
                aria-expanded="false">
                <span class="sr-only">@lang('Toggle Navigation')</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ route('home') }}" style="color: #000;">
                {{ config('app.name') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                <li><a href="{{ route('login') }}" style="color: #000;">@lang('Se connecter')</a></li>
                @else
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle nav-link-align-btn" data-toggle="dropdown" role="button"
                        aria-expanded="false" aria-haspopup="true">
                        <span class="label label-danger">
                            {{ ucfirst(\Auth::user()->role) }}
                        </span>&nbsp;&nbsp;
                        @if(!empty(Auth::user()->pic_path))
                        <img src="{{asset('01-progress.gif')}}" data-src="{{url(Auth::user()->pic_path)}}" alt="Profile Picture"
                            style="vertical-align: middle;border-style: none;border-radius: 50%;width: 30px;height: 30px;">
                        @else
                        @if(strtolower(Auth::user()->gender) == 'male')
                        <img src="{{asset('01-progress.gif')}}" data-src="https://img.icons8.com/color/48/000000/architect.png"
                            alt="Profile Picture" style="vertical-align: middle;border-style: none;border-radius: 50%;width: 30px;height: 30px;">
                        @else
                        <img src="{{asset('01-progress.gif')}}" data-src="https://img.icons8.com/color/48/000000/architect-female.png"
                            alt="Profile Picture" style="vertical-align: middle;border-style: none;border-radius: 50%;width: 30px;height: 30px;">
                        @endif
                        @endif
                        &nbsp;&nbsp;{{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{url('user/config/change_password')}}">@lang('Changer mot de passe')</a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                @lang('Se déconnecter')
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>