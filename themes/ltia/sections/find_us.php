<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBgYpZNncqNgqDsmHhkHUZAsKlbb9jG9MM&sensor=false&extension=.js'></script>  <script>     google.maps.event.addDomListener(window, 'load', init);    var map;    function init() {        var mapOptions = {            center: new google.maps.LatLng(-22.338198,  -49.029306),            zoom: 15,            zoomControl: false,            zoomControlOptions: {                style: google.maps.ZoomControlStyle.DEFAULT,            },            disableDoubleClickZoom: false,            mapTypeControl: false,            scaleControl: true,            scrollwheel: false,            panControl: false,            streetViewControl: false,            draggable : false,            overviewMapControl: false,            overviewMapControlOptions: {                opened: false,            },            mapTypeId: google.maps.MapTypeId.ROADMAP,        }        var mapElement = document.getElementById('map');        var map = new google.maps.Map(mapElement, mapOptions);        var locations = [['LTIA - Laboratório de Tecnologia da Informação Aplicada', '', '+55 14 3103-6000 | Ramal: 7523', 'undefined', 'http://www.ltia.fc.unesp.br', -22.344198,  -49.029306, 'https://mapbuildr.com/assets/img/markers/default.png']        ];        for (i = 0; i < locations.length; i++) {            if (locations[i][1] =='undefined'){ description ='';} else { description = locations[i][1];}            if (locations[i][2] =='undefined'){ telephone ='';} else { telephone = locations[i][2];}            if (locations[i][3] =='undefined'){ email ='';} else { email = locations[i][3];}           if (locations[i][4] =='undefined'){ web ='';} else { web = locations[i][4];}           if (locations[i][7] =='undefined'){ markericon ='';} else { markericon = locations[i][7];}            marker = new google.maps.Marker({                icon: markericon,                position: new google.maps.LatLng(locations[i][5], locations[i][6]),                map: map,                title: locations[i][0],                desc: description,                tel: telephone,                email: email,                web: web            });link = '';     }}</script><section class="local blockSection" id="local">    <div id='map'></div>    <div class="section-header">        <h2 class="white-text" data-scrollreveal="enter left after 0s over 1s">Local</h2>        <p class="white-text map-desc" data-scrollreveal="enter right after 0s over 1s">Av. Engenheiro Edmundo Carrijo Coube, 14-01 Prédio LTIA<br>Vargem Limpa, Bauru - SP, 17033-360</p>    </div></section><!--<style>    .gm-style-iw * {        display: block;        width: 100%;    }    .gm-style-iw h4, .gm-style-iw p {        margin: 0;        padding: 0;    }    .gm-style-iw a {        color: #4272db;    }</style><section class="local blockSection" id="local">	<div class="container">        <div class="section-header">    		<h2 data-scrollreveal="enter left after 0s over 1s">Local</h2>            <p class="map-desc" data-scrollreveal="enter right after 0s over 1s">Av. Engenheiro Edmundo Carrijo Coube, 14-01 Prédio LTIA<br>Vargem Limpa, Bauru - SP, 17033-360</p>        </div>        <a href="https://www.google.com.br/maps/@-22.3447671,-49.0315582,17.5z?hl=pt-BR"><img class="map" data-scrollreveal="enter left after 0s over 1s" src='<?php echo get_template_directory_uri();?>/images/mapa.jpg'></a>    </div></section>-->