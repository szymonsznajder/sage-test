<header class="banner">
  <div class="container">
    @if(is_front_page())
      <h1 class="site-title" headline="headline">
      @endif
      @php
       $custom_logo_id = get_theme_mod ('custom_logo');
       $image = wp_get_attachment_image_src ($custom_logo_id , 'full' ); 
      @endphp
      @if ($image)
          <a class="brand" href="{{ home_url('/') }}">
            <img src="{{ $image[0] }}" alt="{{ get_bloginfo('name', 'display') }}">
          </a>
         @else 
         <a class="brand" href="{{ home_url('/') }}">
          <img src="@asset('image/logo.png')" alt="{{ get_bloginfo('name', 'display') }}">
        </a>
         @endif
         @if(is_front_page())
         <span class="screen-reader-text">{{ get_bloginfo('sitename') }}</span>
      </h1>
    @endif
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
    @endif
     <div class="mobile-nav">
      <button class="hamburger hamburger--vortex" type="button">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>
      <div class="nav">
        @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
       </div>
     </div>
    </nav>
  </div>
</header>
