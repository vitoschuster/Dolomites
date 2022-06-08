<!-- 
    Project 1 - home page
    ISTE - 230
    Vito Schuster
    01/03/2022
-->
<?php
    $page = 'Dolomites';
    include './assets/inc/header.php';
    echo '<body>';
    include './assets/inc/nav.php'
?>


<!-- hero section start -->
<section id="hero">
    <div class="hero-container">



        <!-- header -->
        <div class="hero-header">
            <h1>Dolomites</h1>
        </div>

        <!-- text below header  -->
        <div class="hero-text">
            <p>Best Destination in both Summer and Winter</p>
        </div>

        <!-- text above button -->
        <div class="button-text">
            <p>Take a tour</p>
        </div>

        <!-- arrow  reference (this code helped me out to understand making this - i did not copy it line by line):https://codepen.io/pjwiebe/pen/VmmxpM-->
        <div class="arrow-container">
            <a href="#cards">
                <div class="arrow"></div>
            </a>
        </div>
    </div>
</section>
<!-- hero section end -->

<!-- cards section start -->
<section id="cards">
    <div class="cards-container">
        <div class="cards-header h2">
            <p>Explore The Dolomites</p>
        </div>

        <div class="text">
            <p>If you're in the area, a vast mountain range in northeastern Italy has everything you need for a
                relaxing vacation or a quick one- or two-day trip. The Dolomites are a huge national park that spans
                through more than ten smaller regions and is home to some of Europe's tallest and steepest peaks.
                During the winter, they attract visitors from all over Europe, as well as tourists from other
                continents; this trend continues in the summer, when the mountains and their biking and hiking
                trails provide unrivaled views and bursts of very much needed fresh air.
            </p>
        </div>
        <!-- cards start-->
        <a href="./activities.php" class="card-link1">
            <div class="activities card">
                <img src="https://img.icons8.com/ios/100/000000/running.png" alt="run-icon" />
                <p>Activities</p>
            </div>
        </a>
        <a href="./regions.php" class="card-link2">
            <div class="regions card">
                <img src="https://img.icons8.com/ios/100/000000/bangalore.png" alt="region-icon" />
                <p>Regions</p>
            </div>
        </a>
        <a href="./location.php" class="card-link3">
            <div class="location card">
                <img src="https://img.icons8.com/ios/100/000000/marker--v1.png" alt="loc-icon" />
                <p>Location</p>
            </div>
        </a>
        <a href="./accomodation.php" class="card-link4">
            <div class="accomodation card">
                <img src="https://img.icons8.com/ios/100/000000/home--v1.png" alt="acc-icon" />
                <p>Accomodation</p>
            </div>
        </a>
        <a href="./cuisine.php" class="card-link5">
            <div class="cuisine card">
                <img src="https://img.icons8.com/ios/100/000000/restaurant.png" alt="food-icon" />
                <p>Cuisine</p>
            </div>
        </a>
        <a href="./gallery.php" class="card-link6">
            <div class="gallery card">
                <img src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/100/000000/external-gallery-miscellaneous-kiranshastry-lineal-kiranshastry.png"
                    alt="gal-icon" />
                <p>Gallery</p>
            </div>
        </a>
        <a href="./comments.php" class="card-link7">
            <div class="grading card">
                <img src="https://img.icons8.com/ios/100/000000/to-do.png" alt="todo-icon" />
                <p>Comments</p>
            </div>
        </a>
        <a href="./references.php" class="card-link8">
            <div class="history card">
                <img src="https://img.icons8.com/external-tanah-basah-detailed-outline-tanah-basah/100/000000/external-history-user-interface-tanah-basah-detailed-outline-tanah-basah.png"
                    alt="history-icon" />
                <p>References</p> <!-- weather,lakes etc. if needed to add-->
            </div>
        </a>
        <!-- cards end-->
    </div>
</section>
<!-- cards section end -->
<script src="./assets/js/home.js"></script> 
<?php include './assets/inc/footer.php' ?>