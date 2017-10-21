<div class="subnav">
    <nav class="topnav" id="preppingTopnav">
    	<div class="nav-wrapper">
    	    @if (has_nav_menu('prepping_navigation'))
    	        {!! wp_nav_menu(['theme_location' => 'prepping_navigation', 'menu_class' => 'nav']) !!}
    	    @endif
    	</div>
    </nav>
</div>

<script>
function navResponsivePrepping() {
    var x = document.getElementById("preppingTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>