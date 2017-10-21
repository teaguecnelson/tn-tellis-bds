<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <div class="add-clear"></div>
    @php(do_action('get_header'))
    @include('partials.header-nav-bar-primary')
    @yield('mini-hero')
    <div class="body-outer-wrap">
      <div class="body-wrap wrap container" role="document">
        <div class="content-wrapper">
          <div class="content">
            <main class="main">
              @yield('content')
            </main>
            @if (App\display_sidebar())
              <aside class="sidebar-wrapper">
                <div class="sidebar">
                  @include('partials.sidebar-primary')
                </div>
              </aside>
            @endif
          </div>
        </div>
      </div>
    </div>
    @php(do_action('get_footer'))
    @include('partials.footer')
    @php(wp_footer())
    <script
    type="text/javascript"
    async defer
    src="//assets.pinterest.com/js/pinit.js"
></script>
  </body>
</html>
