<nav class="topnav" id="myTopnav">
	<div class="nav-wrapper">
	    @if (has_nav_menu('primary_navigation'))
	        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
	    @endif
	</div>
    <div class="email-nav-capture">
    	<div class="email-nav-capture-wrapper">
    		<div class="efbg">
    			<img class="efbg-img" src="https://i.pinimg.com/736x/51/6d/ac/516dac82b06d40f392b21160dbf98500--camping-survival-survival-skills.jpg" />
    		</div>
    		<div class="email-nav-capture-form">
    			<h2 class="nav-email-header">Sign Up and Recieve Your Free Copy of the Emergency Food Buyers Guide Ebook</h2>
    			@include('partials.email-capture')
    		</div>
    	</div>
    </div>
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