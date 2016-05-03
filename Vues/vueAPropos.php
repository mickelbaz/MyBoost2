<?php require 'Vues/header.php'; ?>
<p>
<h1> A quoi sert ce site ? </h1>
Afin de faciliter la mise en place création de cours de sport, MyBoost te met en contact avec d'autres personnes qui partagent la même passion que toi.
</p>

<p> <h1> Qui sommes nous ? </h1>
Nous sommes 7 étudiants en école d'ingénieur, passionez de sport nous avons voulu faciliter les rencontres permettant l'organisation d'évènements sportifs.
</p>

<p> <h1> Où sommes nous ? </h1>
Nous sommes localisés au 26, rue Notre Dame des champs 75116 PARIS.
<a href=""<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
<div style='overflow:hidden;height:400px;width:600px;'>
  <div id='gmap_canvas' style='height:400px;width:600px;'></div>
  <div><small><a href="http://embedgooglemaps.com">
    google maps carte							</a></small></div><div><small><a href="http://youtubeembedcode.com">youtube generator</a>
    </small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div>
    <script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(48.8453849,2.328134900000009),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(48.8453849,2.328134900000009)});infowindow = new google.maps.InfoWindow({content:'<strong>MyBoost</strong><br>28, rue notre dame des champs<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>

</p>

<p> <h1> Comment nous contacter ? </h1>
Vous pouvez nous envoyer des messages à l'adresse suivante : contact@myboost.fr
Vous pouvez également nous retrouver sur les réseaux sociaux.
</p>

<?php require 'Vues/footer.php'; ?>
