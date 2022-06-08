<!-- 
    Project 1 - accomodation page
    ISTE - 230
    Vito Schuster
    01/03/2022
-->
<?php
    $page = 'Cuisine';
    include './assets/inc/header.php';
    echo '<body>';
    include './assets/inc/nav.php'
?>

<div class="wrapper">
    <!-- wrapper START -->



    <!-- icon from first page to make it look nice  -->
    <div id="icon1" class="icon">
        <img src="https://img.icons8.com/ios/100/000000/restaurant.png" alt="food-icon" />
    </div>


    <!-- actual header - therefore the semantic tag  -->
    <header>
        <h1>Cuisine</h1>
    </header>

    <!-- first section START  -->
    <div id="h2a" class="h2">
        <h2>Food</h2>
    </div>

    <div id="text-style1" class="text-style">
        <p>
            The traditional cuisine of the Dolomites has poor origins and it's based on simple dishes, but with the
            authentic and distinctive taste which reflects the nature of these beautiful alpine valleys - it is a
            mix of Austrian and Italian food.

        </p>
        <p>
            Potatoes, tomatoes, maize, barley, mushrooms, and other spices are common ingredients in the dishes.

        </p>
        <p>
            The popular traditional meals "Casunziei" (ravioli loaded with pumpkin or spinach) and "Canederli"
            (potato gnocchi with smoked cottage cheese or pumpkin) are one hundred percent a must-try.

        </p>
    </div>
    <div id="img1" class="img-style">
        <img src="./assets/img/cuisine-dolomiti.jpg" alt="image should be here">
    </div>
    <!-- first section END  -->


    <!-- second section START  -->
    <div id="h2b" class="h2">
        <h2>Restaurants</h2>
    </div>

    <div id="img2" class="img-style">
        <img src="./assets/img/pasta.jpg" alt="image should be here">
    </div>

    <div id="text-style2" class="text-style">
        <p>
            The Restaurant choice in the Dolomites can't be overlooked - it's one of the finest in europe. Dining in
            the mountains gives a different vibe than in a plain old city restaurant.


        </p>
        <p>
            There are so many choices to choose from depending on the circumstance: on the slopes - you can stop by
            the mountain huts located on most major peaks such as Piz Boe or Piz Sorega (Piz = Peak).
        </p>
        <p>
            A fine restaurant of my choice would definately be Anna Stuben 1. Hands down the best ravioli ever
            cooked. It is a nightmare for your wallet throgh.

        </p>
    </div>
    <!-- second section END  -->
</div> <!-- wrapper END-->
<?php include './assets/inc/footer.php' ?>