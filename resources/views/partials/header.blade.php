<header class="site-header">
  <div class="header-organism">
    <div class="header-inner">
      <a href="javascript:void(0);" class="icon" id="menu-icon" onclick="navResponsive()">&#9776;</a>
      <a class="logo-wrapper" href="{{ home_url('/') }}"><img class="logo" src="https://scontent-lga3-1.xx.fbcdn.net/v/t31.0-8/21083352_1737564502940958_9155833762759206814_o.png?oh=d346799fcdec998a1aa71faaedd2272b&oe=5A1C33EA" /></a>
      <div class="header-right">
        <div class="header-email">
          @include('partials.email-input')
        </div>
        <div class="header-search">
          <a href="/search-backdoor-survival/"><i class="fa fa-search" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
  </div>
  @include('partials.nav')
</header>
