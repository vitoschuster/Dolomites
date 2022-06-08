<?php
    $page = 'Comments';
    include './assets/inc/header.php';
    echo '<body onload ="checkComments();">';
    include './assets/inc/nav.php'
?>

<div class="comments-header">
    <h1>Comments</h1>
    <img src="https://img.icons8.com/ios/70/000000/to-do.png" alt="comments-logo">
</div>

<div id="comments-container" class="comments-container">
<!-- data from database will be appended here -->
</div>


<form action="javascript:void(0);">
    <!-- changed form to stop reloading - ajax -->
    <h3>Leave A Comment</h3>
    <p>Your data will not be shared in public. Mandatory fields are marked with *</p>
    <textarea name="comment" id="comment" cols="70" rows="10" placeholder="Leave a comment*"></textarea>
    <span><input type="text" id="name" name="name" placeholder="Name*" />
        <input type="email" name="email" id="email" placeholder="Email*" />
        <input type="text" name="country" id="country" placeholder="Country" /></span>

    <h3>Gender</h3>
    <p>Please choose your gender</p>

    <label for="female">
        Female <input type="radio" name="gender" id="female" value="female">
    </label>

    <label for="male">
        Male <input type="radio" name="gender" id="male" value="male">
    </label>
    <label for="other">
        Other <input type="radio" name="gender" id="other" value="other" checked="checked">
    </label>

    <button id="submit" type="button">Submit</button>

</form>
<script src="./assets/js/ajax.js"></script>

<?php include './assets/inc/footer.php'; ?>