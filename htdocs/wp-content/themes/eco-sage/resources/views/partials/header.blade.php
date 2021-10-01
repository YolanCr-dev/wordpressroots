<header class="banner">
    <div class="container">
        <nav class="nav-primary">
            <div class="nav-left">
                <a class="brand site_logo" href="{{ home_url('/') }}"><img src="http://wordpressroots.local/wp-content/uploads/2021/10/Screenshot-from-2021-10-01-12-23-43.png" alt="logo ecosage"></a>
            </div>
            <div class="nav-right">
                <ul>
                    <li><a href="/shop">Shop</a></li>
                    <li><a href="/partners">Partners</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
            {{-- @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif --}}
        </nav>
    </div>
</header>
