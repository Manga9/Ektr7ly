<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="../">Ektr7ly</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
        @if(Auth::guard('web')->check())
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src='user/images/male-avatar.png' alt="profile-pic">{{ Auth::user()->name }}
            @else
            <a class="nav-link" href={{route('login')}}>Login</a>
            <a class="nav-link" href={{route('register')}}>Register</a>
            @endif
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            @if (Auth::guest())
                <a class="nav-link" href={{route('login')}}>Login</a>
                @else
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                 </form>
            @endif
            </div>
        </li>
        </ul>
    </div>
</nav>
