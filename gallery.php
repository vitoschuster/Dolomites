<!-- 
    Project 1 - gallery showcase page
    ISTE - 230
    Vito Schuster
    01/03/2022
-->
<?php
    $page = 'Gallery';
    include './assets/inc/header.php';
    echo '<body id = "gallery">';
    include './assets/inc/nav.php'
?>

<header>
    <h1>Photo Gallery</h1>
</header>


<div class="gallery-wrapper">
    <div id = "0" class="card card-tall card-wide" onclick= "zoomImage(this);" style="background-image: url('./assets/img/alpe-di-siusi.jpeg');"></div>
    <div id = "1" class="card" onclick= "zoomImage(this);"  style="background-image: url('./assets/img//skier.jpg');"></div>
    <div id = "2" class="card" onclick= "zoomImage(this);"  style="background-image: url('./assets/img/biker-jump.jpg');"></div>
    <div id = "3" class="card" onclick= "zoomImage(this);" style="background-image: url('./assets/img/hikers.jpg');"></div>
    <div id = "4" class="card card-tall" style="background-image: url('./assets/img/cortina-dampezzo_.jpg');"></div>
    <div id = "5"  class="card" onclick= "zoomImage(this);" style="background-image: url('./assets/img/kronplatz_.jpg');"></div>
    <div id = "6" class="card" onclick= "zoomImage(this);" style="background-image: url('./assets/img/rafting.jpg');"></div>
    <div id = "7" class="card" onclick= "zoomImage(this);"  style="background-image: url('./assets/img/road-trip.jpeg');"></div>
    <div id = "8" class="card" onclick= "zoomImage(this);"  style="background-image: url('./assets/img/chalet_.jpg');"></div>
    <div id = "9" class="card card-wide" onclick= "zoomImage(this);"  style="background-image: url('./assets/img/cuisine-dolomiti.jpg');"></div>
    <div id = "10" class="card"  onclick= "zoomImage(this);" style="background-image: url('./assets/img/biker-lift.jpg');"></div>
    <div id = "11" class="card card-wide"  onclick= "zoomImage(this);" style="background-image: url('./assets/img/3zinnen.jpg');"></div>
    <div id = "12" class="card" onclick= "zoomImage(this);"  style="background-image: url('./assets/img/val-gardena_.jpg');"></div>
    <div id = "13" class="card"  onclick= "zoomImage(this);" style="background-image: url('./assets/img/marmolada.jpg');"></div>
    <div id = "14" class="card card-wide" onclick= "zoomImage(this);"  style="background-image: url('./assets/img/biker-sellaronda.jpg');"></div>
    <div id = "15" class="card" onclick= "zoomImage(this);"  style="background-image: url('./assets/img/alta-badia_.jpg');"></div>
    <div id = "16" class="card"  onclick= "zoomImage(this);" style="background-image: url('./assets/img/mountain-biker-cover.jpg');"></div>
</div>
<script src="./assets/js/img.js"></script>
<?php include './assets/inc/footer.php' ?>