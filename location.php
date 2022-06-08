<!-- 
    Project 1 - locaiton page
    ISTE - 230
    Vito Schuster
    01/03/2022
-->
<?php
    $page = 'Location';
    include './assets/inc/header.php';
    echo '<body id="activities" class="location">';
    include './assets/inc/nav.php'
?>
<div class=" activities-container location-container">
    <!--grid container-->
    <!-- nav start -->

    <div class="activities-header ">
        <h1>location</h1>
    </div>
    <div class="text-style">
        <p>
            So the first question might be how to actually get there? Is it even accessible by plane?

        </p>
        <p>
            Well, If you're not from Europe and nearby, the only option is the plane. That means expensive tickets,
            but hey that shouldn't stop you from beginning your trip in the first place.
        </p>
        <p>
            The most advised route is landing at the Venice airport (Marco Polo). In Venice there is a bus that
            travels to Cortina which are already in the Dolomites. Alternatively, you could also land at
            Milan and take a bus or rentacar. Plan your trip with the map provided. Also, don't forget that the
            towns in dolomites are well connected via frequent bus routes.
        </p>

    </div>
    <div class="image-ski">
        <img src="./assets/img/location.jpg" alt="skier-pic">
    </div>
    <div class="arrow-container">
        <a href="#iframe">
            <div class="arrow"></div>
        </a>
    </div>



</div>
<!--grid container END-->


<!-- embedded map start -->
<div id="iframe" class="embed-map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1277631.9812156318!2d11.215716741775536!3d46.529762701958674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4778435ff9d21431%3A0x674f270783f8d9bb!2sDolomites!5e0!3m2!1sen!2shr!4v1646261689646!5m2!1sen!2shr"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
<!-- embedded map END-->





<?php include './assets/inc/footer.php' ?>