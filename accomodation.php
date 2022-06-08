<!-- 
    Project 1 - accomodation page
    ISTE - 230
    Vito Schuster
    01/03/2022
-->
<?php
    $page = 'Accomodation';
    include './assets/inc/header.php';
    echo '<body>';
    include './assets/inc/nav.php'
?>

    <div class="wrapper">
        <!-- wrapper START -->


        <!-- icon from first page to make it look nice  -->
        <div id="icon1" class="icon">
            <img src="https://img.icons8.com/ios/100/000000/home--v1.png" alt="acc-icon" />
        </div>


        <!-- actual header - therefore the semantic tag  -->
        <header>
            <h1>Accomodation</h1>
        </header>

        <!-- first section START  -->
        <div id="h2a" class="h2">
            <h2>Where to stay</h2>
        </div>

        <div id="text-style1" class="text-style">
            <p>
                There is an amazing range of lodging for your well-deserved stay in the Dolomites, including hotels,
                apartments, and mountain huts.
            </p>
            <p>
                There is no shortage of outstanding lodging options, which range from
                theme hotels (bike, skiing, hiking) to budget and luxury options.
                The Dolomites are a well-developed summer hiking paradise as well as a winter wonderland. It's no
                surprise that there are so many mountain cabins here.

            </p>
            <p>
                Any mountain enthusiast will never forget spending a night in an alpine hut in the Dolomites, soaking up
                the sun in the afternoon and marveling at the early dawn in almost complete silence.
            </p>
        </div>
        <div id="img1" class="img-style">
            <img src="./assets/img/hotel-dolomites.jpg" alt="image should be here">
        </div>
        <!-- first section END  -->


        <!-- second section START  -->
        <div id="h2b" class="h2">
            <h2>Recommendations</h2>
        </div>

        <div id="img2" class="img-style">
            <img src="./assets/img/chalet_.jpg" alt="image should be here">
        </div>

        <div id="text-style2" class="text-style">
            <p>
                The quality of hotels and guesthouses in the Dolomites is among the best in the world, despite the wide
                choice of possibilities.

            </p>
            <p>
                Even at 3 stars, hospitality and comfort are highly prized here, so don't expect a dingy, unpleasant
                accommodation.
            </p>
            <p>
                Some of the top choices for lodging in Alta Badia (which is ull of Croatian people in the winter) are
                Badia, Colfosco, Corvara, San Cassiano and La Villa. But make no mistake, these accomodations can be
                costly with starting prices over 100 euros per night.
            </p>
        </div>
        <!-- second section END  -->
    </div> <!-- wrapper END-->

<?php include './assets/inc/footer.php' ?>