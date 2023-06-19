<header class="header">
  <nav class="navbar navbar-expand-sm">
    <div class="container">
      <a class="brand" href="{{ home_url('/') }}">
        <img src="@asset('images/logo-desjoyaux.png')" alt="">
      </a>
      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <i class="fa fa-solid fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">

        @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu([
        'theme_location' => 'primary_navigation',
        // 'container_class' => 'collapse navbar-collapse justify-content-center',
        'menu_class' => 'main-menu navbar-nav',
        // 'fallback_cb' => false,
        'depth' => 2,
        ]) !!}
        @endif
      </div>
      <div class="nav-cta d-none d-md-block">
        <a href="#" class="btn btn-primary">Contato</a>
      </div>
    </div>
  </nav>
</header>