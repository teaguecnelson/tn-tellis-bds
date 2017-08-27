<nav class="topnav" id="myTopnav">
	<div class="nav-wrapper">
	    @if (has_nav_menu('primary_navigation'))
	        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
	    @endif
	</div>
    @include('partials.email-hook')
</nav>

<script>
function navResponsive() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>