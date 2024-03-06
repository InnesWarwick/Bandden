<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheets/generalStyle.css">
    <link rel="stylesheet" href="stylesheets/createPostStyle.css">
    <title>Bandden</title>
</head>

<body>
    <div class="logoDiv">
        <img src="BanndenLogo.png" alt="website logo">
        <a href="profile.php">
            <img src="icons/account_circle_FILL0_wght400_GRAD-25_opsz40.png" alt="profile photo" class="profileIcon">
        </a>
    </div>

    <div class="navBar">
        <a class="homeButton" href="index.php">Home</a>
        <a class="browseButton" href="browse.php">Browse</a>
        <a class="contactUs" href="contactUs.php"> contact us</a>
    </div>

    <main class="contentBlock">
        
    <form class="postForm" method = "post" action = "createPost.php">
            <div class="title">
                <h3 class="titleText">Email</h3>
                <input type="text" class="fnameInput" name="firstname" placeholder="user@me.com">
            </div>
            <div class="postBox">
                <h3 class="postText">Password</h3>
                <input type="text" class="fnameInput" name="firstname" placeholder="************">
            </div>
            <input type="submit" class="submitButton" value="Login">
            <input type="submit" class="submitButton" value="Register">
    </form>
    </main>

    <div class="footerBar"></div>

</body>

</html>