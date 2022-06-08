<!-- 
    Project 1 - skiing page
    ISTE - 230
    Vito Schuster
    01/03/2022
-->
<?php
    $page = 'Skiing';
    include './assets/inc/header.php';
    echo '<body id = "sports">';
    include './assets/inc/nav.php'
?>
<div class="sports-container">
    <video id="bg-video" preload autoplay loop muted>
        <source src="./assets/vid/ski-video.mp4" type="video/mp4">
        Your browser doesn't support the feature for video playback.
    </video>


    <h1>skiing</h1>

    <p id="top-cover-text">
        Let your skis do the work.
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
        <h2>Down the slopes</h2>
    </div>

    <div class="sports-text1 text-style">
        <p>
            Skiers can explore more than thousand km of ski slopes. Visiting number of ski resort by jumping from
            one area to another and is really convenient, only by changing lifts or gondolas.

        </p>

        <p>
            Every day you can find
            yourself in a different ski slope layout, but always surrounded by fantastic scenery.

        </p>


        <p>
            Slopes are well-prepared, equipped not only by artificial snow machines, but also with "hutte" for
            refreshment or
            meeting friends and enjoying local food.
        </p>


        <p>
            The Alpine skiing competition held on the challenging and iconic Gran Risa slope attracts a large number
            of spectators, and ambitious skiers should take up the challenge and go down the hill at least once in
            their lives.
        </p>
    </div>

    <div class="sports-img1">
        <img src="./assets/img/skier-fast.jpg" alt="biker-jump-img">
    </div>

    <div class="sports-text-header2 h2">
        <h2>Not just skiing</h2>
    </div>

    <div class="sports-img2">
        <img src="./assets/img/skier-biathlon.jpg " alt="biker-jump-img">
    </div>


    <div class="sports-text2 text-style">
        <p>
            Alpine skiing isn't the only way to have fun on the slopes. Borders may select from a variety of ski
            parks with various forms and even half-pipes. Take a downhill course through the trees or go off-piste
            in heavy snow if you're feeling more daring.
        </p>


        <p>
            Nordic skiers are also welcome; if you're looking for a challenge rather than a race, pick a resort
            where you may practice free-style or classical skiing.
        <p>
            Rent a rifle and try biathlon if you're searching for a new challenge. If you wish to mix alpine and
            nordic skiing, consider ski touring, which involves climbing and descending alpine slopes. Do you want
            to try skiing the old way?
            Enroll at Telemark ski school and ready to take a step back in time.

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