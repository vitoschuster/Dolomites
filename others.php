<!-- 
    Project 1 - other sports page
    ISTE - 230
    Vito Schuster
    01/03/2022
-->

<?php
    $page = 'Other Sports';
    include './assets/inc/header.php';
    echo '<body id = "sports">';
    include './assets/inc/nav.php'
?>
<div class="sports-container">
    <video id="bg-video" preload autoplay loop muted>
        <source src="./assets/vid/other-video_trim.mp4" type="video/mp4">
        Your browser doesn't support the feature for video playback.
    </video>


    <h1>Other Sports</h1>

    <p id="top-cover-text">
        The alternatives don't disappont.
    </p>
    <p id="bottom-cover-text">
        Explore the sports
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
        <h2>Hiking</h2>
    </div>

    <div class="sports-text1 text-style">
        <p>The official hiking season typically begins in May and ends around the middle of October.</p>
        <p>It will still be possible to visit the Dolomites and enjoy some of the easier hikes before and after
            that, but the higher hiking trails will most likely be covered in snow. Therefore, summer is a wonderful
            time of year to spend time outside and to travel by foot, slowly but steadily. </p>
        <p> With rugged mountain peaks everywhere you look, the Dolomites are a true hiker's paradise. The crystal
            clear lakes and enchanting valleys you'll come across along the way are just the cherry on top. There
            are a plethora of fantastic hikes to choose from, making it difficult not only to complete one but also
            to choose one.</p>
    </div>

    <div class=" other-img1 sports-img1 ">
        <img src="./assets/img/hikers.jpg" alt="biker-jump-img">
    </div>

    <div class="sports-text-header2 h2">
        <h2>Rafting</h2>
    </div>

    <div class="sports-img2 other-img2">
        <img src="./assets/img/rafting.jpg" alt="biker-jump-img">
    </div>


    <div class="sports-text2 text-style">
        <p>Not willing to use your feet? Then, get some water to flow through you. The Dolomites' large and small
            rivers offer a variety of options for action-packed rafting tours.</p>

        <p> To immerse yourself in the fascinating world of wild water rafting in the Dolomites, no prior knowledge
            is required. </p>
        <p>The certified boating guides ensure a high level of safety when rafting down the mountain
            streams' rollers and waves in rafting boats.</p>

        <p>Everything can be found in the Dolomites' waters, which you can explore in a sturdy dinghy - as part of a
            team, of course, and with a life jacket, helmet, and paddle.</p>
        <!-- map section start  -->

        <div class="sports-map-container">

        </div>


        <!-- map section end  -->

    </div>

</div>

<!-- bottom section end  -->
<?php include './assets/inc/footer.php' ?>