<header class="banner bg-dark">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" role="navigation">
      <div class="branding mx-sm-auto">
        <div>
        <a href="{{ home_url('/') }}">
          <img src="{{ get_template_directory_uri() . '/assets/images/torashinkan-logo-no-text.svg' }}" alt="Torashinkan">
        </a>
        </div>
        <div><h1>{{get_bloginfo( 'name' )}}</h1></div>
      </div>
      <button class="navbar-toggler border-0" type="button" data-toggle="collapse"
              data-target="#navbarSupportedContent" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false"
              aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="fas fa-bars"></i>
            </span>
      </button>
        <div class="collapse navbar-collapse nav-primary ml-auto justify-content-end" id="navbarSupportedContent">
            @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(),
            'menu_class' => 'navbar-nav nav justify-content-end']) !!}
            @endif
        </div>
    </nav>
</header>
