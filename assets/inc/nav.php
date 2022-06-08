<!--
     nav.php - shared nav file among all pages 
     ISTE 240
     @author V. Schuster
     @version 0105
-->

<?php   /* nifty function to add current classes and replace code duplication */
        $currentPage = '';
        function activeClass($currentPage) {
            global $page;
            echo (isset($page) && $page == $currentPage) ? 'class = "current"' : '';
        }
    ?>

<!-- nav desktop -->
<nav id="navbig" aria-label="desktop menu">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a <?php activeClass('Activities'); ?> href="activities.php">Activities</a>
            <ul class="dropdown">
                <li><a href="mtb.php" <?php activeClass('Mountain Biking'); ?>>Biking</a></li>
                <li><a href="ski.php" <?php activeClass('Skiing'); ?>>Skiing</a></li>
                <li><a href="others.php" <?php activeClass('Other Sports'); ?>>Other</a></li>
            </ul>
        </li>
        <li><a href="regions.php" <?php activeClass('Regions'); ?>>Regions</a></li>
        <li><a href="location.php" <?php activeClass('Location'); ?>>Location</a></li>
        <li><a href="accomodation.php" <?php activeClass('Accomodation'); ?>>Accomodation</a></li>
        <li><a href="cuisine.php" <?php activeClass('Cuisine'); ?>>Cuisine</a></li>
        <li><a href="gallery.php" <?php activeClass('Gallery'); ?>>Gallery</a></li>
        <li><a href="comments.php" <?php activeClass('Comments'); ?>>Comments</a></li>
        <li><a href="references.php" <?php activeClass('References'); ?>>References</a></li>
    </ul>
</nav>
<!-- nav desktop end -->

<!-- nav mobile hamburger start -->
<nav id="navsmall" aria-label="mobile menu">
    <div id="menuToggle">
        <input type="checkbox">
        <span></span>
        <span></span>
        <span></span>
        <ul id="menu">
            <a href="index.php">
                <li>Home</li>
            </a>
            <a href="activities.php">
                <li>Activities</li>
            </a>
            <a href="mtb.php">
                <li>MTB</li>
            </a>
            <a href="ski.php">
                <li>Skiing</li>
            </a>
            <a href="others.php">
                <li>More</li>
            </a>
            <a href="regions.php">
                <li>Regions</li>
            </a>
            <a href="location.php">
                <li>Location</li>
            </a>
            <a href="accomodation.php">
                <li>Accomodation</li>
            </a>
            <a href="cuisine.php">
                <li>Cuisine</li>
            </a>
            <a href="gallery.php">
                <li>Gallery</li>
            </a>
            <a href="comments.php">
                <li>Comments</li>
            </a>
            <a href="references.php">
                <li>References</li>
            </a>
        </ul>
    </div>
</nav>

<!-- nav mobile hamburger end -->
