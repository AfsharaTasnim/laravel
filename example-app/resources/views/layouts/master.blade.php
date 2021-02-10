
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Groovin one page bootstrap template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- styles -->
    <link rel="stylesheet" href="{{asset('assets/css/fancybox/jquery.fancybox.css')}}">
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/bootstrap-theme.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/css/slippry.css')}}">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/color/default.css')}}">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="{{asset('assets/js/modernizr.custom.js')}}"></script>
    @stack('css')
</head>
<body>
@include('partials.header')

@yield('content')
@include('partials.footer')






<a href="#" class="scrollup"><i class="fa fa-angle-up fa-2x"></i></a>
<!-- javascript -->
<script src="{{asset('assets/js/jquery-1.9.1.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.easing.js')}}"></script>
<script src="{{asset('assets/js/classie.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/js/slippry.min.js')}}"></script>
<script src="{{asset('assets/js/nagging-menu.js')}}"></script>
<script src="{{asset('assets/js/jquery.nav.js')}}"></script>
<script src="{{asset('assets/js/jquery.scrollTo.js')}}"></script>
<script src="{{asset('assets/js/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('assets/js/jquery.fancybox-media.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
<script src="{{asset('assets/js/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/imagesloaded.js')}}"></script>
<script src="{{asset('assets/js/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('assets/js/validate.js')}}"></script>
<script src="{{asset('assets/js/AnimOnScroll.js')}}"></script>
<script>
    new AnimOnScroll( document.getElementById( 'grid' ), {
        minDuration : 0.4,
        maxDuration : 0.7,
        viewportFactor : 0.2
    } );
</script>
<script>
    $(document).ready(function(){
        $('#slippry-slider').slippry(
            defaults = {
                transition: 'vertical',
                useCSS: true,
                speed: 5000,
                pause: 3000,
                initSingle: false,
                auto: true,
                preload: 'visible',
                pager: false,
            }

        )
    });
</script>

<script src="assets/js/custom.js"></script>
<script type="text/javascript">
    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 11,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(40.6700, -73.9400), // New York

            // How you would like to style the map.
            // This is where you would paste any style found on Snazzy Maps.
            styles: [	{		featureType:"all",		elementType:"all",		stylers:[		{			invert_lightness:true		},		{			saturation:10		},		{			lightness:30		},		{			gamma:0.5		},		{			hue:"#5C9F24"		}		]	}	]
        };

        // Get the HTML DOM element that will contain your map
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map');

        // Create the Google Map using out element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);
    }
</script>
@stack('js')
</body>
</html>
