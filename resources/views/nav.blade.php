<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="/">
      LODYBMS
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          More
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item">
            About
          </a>
          <a class="navbar-item">
            Jobs
          </a>
          <a class="navbar-item">
            Contact
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item">
            Report an issue
          </a>
        </div>
      </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
            @auth
                @if(Route::currentRouteName() !== 'index')
                    <a href="{{ route('index') }}" class="button">Index</a>
                @endif

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="button" type="submit">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="button">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="button">Register</a>
                @endif
            @endauth
        </div>
      </div>
    </div>
  </div>
</nav>
