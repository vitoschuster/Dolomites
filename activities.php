<!-- 
    Project 1 - activities page
    ISTE - 230
    Vito Schuster
    01/03/2022
-->
<?php
    $page = 'Activities';
    include './assets/inc/header.php';
    echo '<body id = "activities">';
    include './assets/inc/nav.php'
?>

<div class="activities-container">
    <!--grid container-->

    <div class="activities-header">
        <h1>activities</h1>
    </div>
    <div class="text-style">
        <p>
            You can simply appreciate the scenery of the North Italian Alps if you are a mountain enthusiast.
            However, whether it's winter or summer, there's a lot more to see and do.

        </p>
        <p>
            Regardless of ski ability, one can always find the ideal slope in the winter, ranging from gentle blue
            slopes for novices and landscape lovers to black slopes for aggressive skiers and ski parks for
            youngsters and acrobats.
        </p>
        <p>
            Cycling enthusiasts should take advantage of the summer months to climb famed mountain roads and
            complete a full circle around the Sella massive. Do you want to immerse yourself in nature? Choose from
            a variety of uphill and downhill mountain tracks.
        </p>
        <p>
            If you want to challenge yourself and in need for adrenaline rush, choose sky trekking, climbing, via
            ferrata or trial running. Alternatively, take on a sky journey and fly by paraglider. Play mountain golf
            and go on gastronomic vacations if leisure is your way of recharging your batteries.
        </p>
    </div>
    <div class="image-ski">
        <img src="./assets/img/skier.jpg" alt="skier-pic">
    </div>

    <!-- arrow  reference (this code helped me out to understand making this - i did not copy it line by line):https://codepen.io/pjwiebe/pen/VmmxpM-->
    <div class="arrow-container">
        <a href="#activities-links">
            <div class="arrow"></div>
        </a>
    </div>
</div>
<!--grid container END-->

<!-- links with cover photos here  -->
<div id="activities-links" class="activities-link-container">
    <a id="bike" href="mtb.php">
        <div class="bike link-image">
            <h2>
                Mountain Biking
            </h2>
        </div>
    </a>
    <a id="ski" href="ski.php">
        <div class="ski link-image">
            <h2>
                Skiing
            </h2>
        </div>
    </a>
    <a id="others" href="others.php">
        <div class="others link-image">
            <h2>
                Other Sports
            </h2>
        </div>
    </a>
</div>
<!-- links with cover photos END  -->


<?php include './assets/inc/footer.php' ?>