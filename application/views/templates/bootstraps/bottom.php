<footer id="footer" class="m-none p-none">
  <div class="footer-copyright background-color-light">
    <div class="container">
      <div class="row">
        <div class="col-xs-8 col-sm-11 col-md-9">
          <p>
            © Copyright 2022. Develop By <a href="https://it-konsultan.com" target="_blank" style="color:#555555; text-decoration:none;"> I.C.I</a>
          </p>
        </div>
        <div class="col-xs-4 col-sm-1 col-md-3">
          <ul class="social-icons custom-social-icons-style-2 pull-right">
            <li class="social-icons-facebook">
              <a href="http://www.facebook.com/" class="text-color-quaternary" target="_blank" title="Facebook">
                <i class="fa fa-facebook"></i>
              </a>
            </li>
            <li class="social-icons-twitter">
              <a href="http://www.twitter.com/" class="text-color-quaternary" target="_blank" title="Twitter">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li class="social-icons-linkedin">
              <a href="http://www.linkedin.com/" class="text-color-quaternary" target="_blank" title="Linkedin">
                <i class="fa fa-linkedin"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Vendor -->
<script src="<?=base_url()?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?=base_url()?>assets/vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="<?=base_url()?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?=base_url()?>assets/vendor/jquery-cookie/jquery-cookie.min.js"></script>
<script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/vendor/common/common.min.js"></script>
<script src="<?=base_url()?>assets/vendor/jquery.validation/jquery.validation.min.js"></script>
<script src="<?=base_url()?>assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
<script src="<?=base_url()?>assets/vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="<?=base_url()?>assets/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
<script src="<?=base_url()?>assets/vendor/isotope/jquery.isotope.min.js"></script>
<script src="<?=base_url()?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="<?=base_url()?>assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?=base_url()?>assets/vendor/vide/vide.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="<?=base_url()?>assets/js/theme.js"></script>

<!-- Current Page Vendor and Views -->
<script src="<?=base_url()?>assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="<?=base_url()?>assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<!-- Current Page Vendor and Views -->
<script src="<?=base_url()?>assets/js/views/view.contact.js"></script>

<!-- Demo -->
<script src="<?=base_url()?>assets/js/demos/demo-one-page-agency.js"></script>

<!-- Theme Custom -->
<script src="<?=base_url()?>assets/js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="<?=base_url()?>assets/js/theme.init.js"></script>


<script src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0670111414797!2d106.84013191435095!3d-6.254902262981237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3b584ed9e51%3A0x6fd21939873e8687!2sJl.%20Potlot%20III%2C%20RT.1%2FRW.3%2C%20Duren%20Tiga%2C%20Kec.%20Pancoran%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2C%20Indonesia!5e0!3m2!1sid!2snl!4v1663883420406!5m2!1sid!2snl"></script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script> -->

<script>

  /*
  Map Settings

    Find the Latitude and Longitude of your address:
      - http://universimmedia.pagesperso-orange.fr/geo/loc.htm
      - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

  */

  // Map Markers
  var mapMarkers = [{
    address: "Jl. Potlot III",
    html: "<strong>Ptlmj </strong><br>Jl. Potlot III",
    icon: {
      image: "img/pin.png",
      iconsize: [26, 46],
      iconanchor: [12, 46]
    },
    popup: true
  }];

  // Map Initial Location
  var initLatitude = 40.75198;
  var initLongitude = -73.96978;

  // Map Extended Settings
  var mapSettings = {
    controls: {
      panControl: true,
      zoomControl: true,
      mapTypeControl: true,
      scaleControl: true,
      streetViewControl: true,
      overviewMapControl: true
    },
    scrollwheel: false,
    markers: mapMarkers,
    latitude: initLatitude,
    longitude: initLongitude,
    zoom: 16
  };

  var map = $('#googlemaps').gMap(mapSettings),
    mapRef = $('#googlemaps').data('gMap.reference');

  // Map Center At
  var mapCenterAt = function(options, e) {
    e.preventDefault();
    $('#googlemaps').gMap("centerAt", options);
  }

  var mapRef = $('#googlemaps').data('gMap.reference');

  // Styles from https://snazzymaps.com/
  var styles = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];

  var styledMap = new google.maps.StyledMapType(styles, {
    name: 'Styled Map'
  });

  mapRef.mapTypes.set('map_style', styledMap);
  mapRef.setMapTypeId('map_style');

  // Change Center Position
  if( $(window).width() > 767 ) {
    if( $('html[dir="rtl"]').get(0) ) {
      mapRef.panBy(250,0);
    } else {
      mapRef.panBy(-250,0);
    }
  }

</script>


<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-12345678-1', 'auto');
  ga('send', 'pageview');
</script>
 -->


</body>
</html>
