<!-- 
    Project 1 - biking page
    ISTE - 230
    Vito Schuster
    01/03/2022
-->

<?php
    $page = 'Mountain Biking';
    include './assets/inc/header.php';
    echo '<body id="sports">';
    include './assets/inc/nav.php'
?>
<div class="sports-container">
    <video id="bg-video" preload autoplay loop muted>
        <source src="./assets/vid/biking-video.mp4" type="video/mp4">
        Your browser doesn't support the feature for video playback.
    </video>


    <h1>mountain biking</h1>

    <p id="top-cover-text">
        Climb. Eat. Send it. Repeat.
    </p>
    <p id="bottom-cover-text">
        Explore the slopes
    </p>

    <div class="arrow-container">
        <a href="#sports-text">
            <div class="arrow"></div>
        </a>
    </div>

</div> <!-- HERO SECTION END !-->

<!-- i dont even know how to names these classes anymore, I think i need a course for that  -->



<!-- bottom section start  -->
<div id="sports-text" class="sports-text-container">

    <div class="sports-text-header1 h2">
        <h2>Hit The Trails</h2>
    </div>

    <div class="sports-text1 text-style">
        <p>
            The Italian Dolomites are a region that is often neglected for mountain biking because of their
            unmatching skiing experience - but it is full of incredible opportunities for riders. The popularity of
            the sport is definitely on the rise.
        </p>

        <p>
            More than 400 kilometers of trails include:
        </p>
        <ul>
            <li>rocky singletrack trails</li>
            <li>smooth flow trails</li>
            <li>long-distance climbs</li>
            <li>uphill lifts on all trails</li>
        </ul>


        <p>
            Although I, myself haven’t visited the Dolomites in the summer – I would really love to and so I did
            research and found the best times to visit are during the start or end of the summer – when it’s not
            too busy as this is a top location.
        </p>
        <p>
            According to bikers from other countries a visit to the Dolomites was more than just worth it!
        </p>
    </div>

    <div class="sports-img1">
        <img src="./assets/img/biker-jump.jpg" alt="biker-jump-img">
    </div>

    <div class="sports-text-header2 h2">
        <h2>Around The Hill</h2>
    </div>

    <div class="sports-img2">
        <img src="./assets/img/biker-lift.jpg " alt="biker-jump-img">
    </div>


    <div class="sports-text2 text-style">
        <p>
            You might also be interested in learning about the greatest individual regions and places to visit.
            There's no need to wait any longer; here's the answer:
        </p>

        <ul>
            <li>Alpe di Siusi - northwest</li>
            <li>Col Rodella - east</li>
            <li>Sella Ronda -central</li>
            <li>Val Gardena - southwest</li>
        </ul>




        <p>
            The Sella Ronda and Val Gardena trips are among the most well-known and popular.
            The Sella Ronda massif is a group of steep vertical cliffs located in the middle of
            the listed regions. One loop is longer than 50 kilometers, and, therefore is a one tough nut to crack
            for those who are not in the best shape or ready to take on all kinds of steep rocks.
        </p>
        <p>
            The Val Gardena region, on the other hand has it all -
            steep or flat, rocky or flow so it's a perfect choice for first-timers.
        </p>
    </div>
    <!-- bottom section end  -->

    <!-- map section start  -->

    <div class="sports-map-container">

    </div>


    <!-- map section end  -->

</div>



<!-- bottom section end  -->
<?php include './assets/inc/footer.php' ?>