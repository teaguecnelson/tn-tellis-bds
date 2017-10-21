<div class="subnav">
    <nav class="topnavsr" id="selfRelianceTopnav">
        <div class="nav-wrapper">
            @if (has_nav_menu('primary_navigation'))
                {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
            @endif
        </div>
    </nav>
</div>

<script>
function navResponsiveSR() {
    var x = document.getElementById("selfRelianceTopnav");
    if (x.className === "topnavsr") {
        x.className += " responsive";
    } else {
        x.className = "topnavsr";
    }
}
</script>