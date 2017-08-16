<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
    <div class="add-clear"></div>
    @php(do_action('get_header'))
    @include('partials.header')
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
    @php(do_action('get_footer'))
    @include('partials.footer')
    @php(wp_footer())
  </body>
</html>
