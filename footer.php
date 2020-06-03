<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio-stas
 */

?>
<!-- start footer Section -->
<footer id="ft_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ft">
                    <ul>
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                        <li><a href=""><i class="fa fa-rss"></i></a></li>
                        <li><a href=""><i class="fa fa-flickr"></i></a></li>
                        <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                        <li><a href=""><i class="fa fa-skype"></i></a></li>
                        <li><a href=""><i class="fa fa-google"></i></a></li>
                    </ul>
                </div>
                <ul class="copy_right">
                    <li>&copy;Sima 2015</li>
                    <li>developer by md. shiddikur rahman</li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- End footer Section -->

<?php wp_footer(); ?>
<script>
    function initialize() {
        var mapOptions = {
            zoom: 14,
            scrollwheel: false,
            center: new google.maps.LatLng(41.092586000000000000, -75.592688599999970000)
        };
        var map = new google.maps.Map(document.getElementById('googleMap'),
            mapOptions);
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            animation:google.maps.Animation.BOUNCE,
            icon: 'img/map-marker.png',
            map: map
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>

<script type="text/javascript">

    jQuery(document).ready(function(){


        jQuery('.show_hide').showHide({
            speed: 1000,  // speed you want the toggle to happen
            easing: '',  // the animation effect you want. Remove this line if you dont want an effect and if you haven't included jQuery UI
            changeText: 1, // if you dont want the button text to change, set this to 0
            showText: 'View',// the button text to show when a div is closed
            hideText: 'Close' // the button text to show when a div is open

        });


    });

</script>
<script>
    jQuery(document).ready(function( jQuery ) {
        jQuery('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });
</script>

<script>

    //Hide Overflow of Body on DOM Ready //
    jQuery(document).ready(function(){
        jQuery("body").css("overflow", "hidden");
    });

    // Show Overflow of Body when Everything has Loaded
    jQuery(window).load(function(){
        jQuery("body").css("overflow", "visible");
        var nice=jQuery('html').niceScroll({
            cursorborder:"5",
            cursorcolor:"#00AFF0",
            cursorwidth:"3px",
            boxzoom:true,
            autohidemode:true
        });

    });
</script>



</body>
</html>



