<!-- 
    Project 1 - regions page
    ISTE - 230
    Vito Schuster
    01/03/2022
-->
<?php
    $page = 'Regions';
    include './assets/inc/header.php';
    echo '<body id="activities" class="region">';
    include './assets/inc/nav.php'
?>
<div class="activities-container">
    <!--grid container-->

    <div class="activities-header">
        <h1>regions</h1>
    </div>
    <div class="text-style">
        <p>
            The Dolomites are part of the Alps. They run through the provinces of South Tyrol/Südtirol, Trento, and
            Belluno, reaching their highest point of 3,343 meters atop the Marmolada. The two regions described
            below are the ones I visited.


        </p>
        <p>
            Alta Badia is a mountain range in the South Tyrolean Dolomites, located in the southern part of Val
            Badia valley, which splits from Val Pusteria valley at San Lorenzo. The six small villages that make up
            the Alta Badia region are located at the foot of impressive Dolomite summits, nestled in a large, sunny
            valley surrounded by pristine nature: Corvara, Colfosco, La Villa, San Cassiano, Badia, and La Val.
        </p>
        <p>
            Val Gardena, in South Tyrol, is the ideal location for experiencing the most intense sensations in the
            heart of the unique Dolomites mountains throughout the year.
            It's an Eldorado for hikers, climbers, and mountain bikers, not to mention the mystical autumn days and
            the mesmerizing 'Burning Dolomites' light show that takes place across the towering rocky terrain.
        </p>
    </div>
    <div id="image-region" class="image-ski">
        <img src="./assets/img/regions-map.gif" alt="skier-pic">
    </div>

    <!-- arrow  reference (this code helped me out to understand making this - i did not copy it line by line):https://codepen.io/pjwiebe/pen/VmmxpM-->
    <div class="arrow-container">
        <a href="#regions-links">
            <div class="arrow"></div>
        </a>
    </div>
</div>
<!--grid container END-->

<!-- links with cover photos here  -->
<div id="regions-links" class="regions-link-container activities-link-container">
    <a id="kronplatz" href="https://www.kronplatz.com/en">
        <div class="kronplatz link-image">
            <h2>
                Kronplatz
            </h2>
        </div>
    </a>
    <a id="val-gardena" href="https://www.valgardena.it/en/">
        <div class="val-gardena link-image">
            <h2>
                Val Gardena
            </h2>
        </div>
    </a>
    <a id="alta-badia" href="https://www.altabadia.org/en/alta-badia-italian-alps-dolomites.html">
        <div class="alta-badia link-image">
            <h2>
                Alta Badia
            </h2>
        </div>
    </a>
    <a id="cortina" href="https://www.dolomiti.org/en/cortina/">
        <div class="cortina link-image">
            <h2>
                Coritna
            </h2>
        </div>
    </a>
    <a id="zinnen" href="https://www.dreizinnen.com/en/skiresort-three-peaks.html">
        <div class="3zinnen link-image">
            <h2>
                3 Zinnen
            </h2>
        </div>
    </a>
    <a id="val-di-fassa" href="https://www.fassa.com/index.asp?l=en">
        <div class="val-di-fassa link-image">
            <h2>
                Val di Fassa
            </h2>
        </div>
    </a>
    <a id="alpe-di-siusi" href="https://www.seiseralm.it/en/holidays-in-the-dolomites.html">
        <div class="alpe-di-siusi link-image">
            <h2>
                Alpe Di Siusi
            </h2>
        </div>
    </a>
    <a id="marmolada" href="https://www.dolomitisuperski.com/en/Experience/Ski-areas/Marmolada">
        <div class="marmolada link-image">
            <h2>
                Marmolada
            </h2>
        </div>
    </a>
</div>
<!-- links with cover photos END  -->


<?php include './assets/inc/footer.php' ?>