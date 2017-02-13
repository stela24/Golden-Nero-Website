<div class="section autoHeight" id="section4">
    <div class="fruits">
        <img src="images/fruit1.png" class="fruit" id="fruit1" data-speed="400" data-min="26" data-max="52">
        <img src="images/fruit2.png" class="fruit" id="fruit2" data-speed="900" data-min="60" data-max="100">
        <img src="images/fruit3.png" class="fruit" id="fruit3" data-speed="550" data-min="10" data-max="60">
        <img src="images/fruit4.png" class="fruit" id="fruit4" data-speed="400" data-min="33" data-max="55">
        <img src="images/fruit5.png" class="fruit" id="fruit5" data-speed="700" data-min="10" data-max="78">
        <img src="images/fruit6.png" class="fruit" id="fruit6" data-speed="500" data-min="50" data-max="86">
    </div>
    <div class="contacts container">
        <div class="contacts-info">
            <h1><? echo lang('work-time') ?></h1>
            <p><? echo lang('work-days') ?></p>
            <p>08:30 - 02:00</p>
            <p><? echo lang('work-kitchen') ?></p>

            <h1><? echo lang('reservation') ?></h1>
            <p>0887 097 171</p>
            <p>0898 490 885</p>
            <p><? echo lang('adress') ?></p>

            <h1><? echo lang('follow') ?></h1>
            <p class="insta-link"><a href="https://www.instagram.com/goldennerorestaurant/" target="_blank" class="insta-icon"></a></p>
            <p class="fb-link"><a href="https://www.facebook.com/GoldenNero.sofia/?fref=ts" target="_blank" class="fb-icon"></a></p>
        </div>
    </div>
    <div id="map"></div>
    <div class="rights">
        <div class="container">
            <div class="pull-right">
                <p>Created by:</p>
                <a href="http://e-act.info" target="_blank" class="e-act"><img src="images/e-act-logo.png"></a>
            </div>
        </div>
    </div>
</div>


<script>
      function initMap() {
        // Styles a map in night mode.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 42.677863, lng: 23.309854},
          zoom: 17,
          styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
        });

         var marker = new google.maps.Marker({
             position: {lat: 42.677863, lng: 23.309854},
             animation: google.maps.Animation.DROP,
             icon: "images/map-icon.png"
         });

         marker.setMap(map);
      }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeXBlld-3Picp4MRYIV5WgDDOg1-V0TQ4&callback=initMap" async="" defer="defer"></script>
