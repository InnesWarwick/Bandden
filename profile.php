<?php 
session_start();
if(!isset($_SESSION["loggedIn"])){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheets/generalStyle.css">
    <link rel="stylesheet" href="stylesheets/profileStyle.css">
    <link rel="stylesheet" href="stylesheets/browseStyle.css">
    <title>Bandden</title>
</head>

<body>
    <div class="logoDiv">
        <img src="BanndenLogo.png" alt="website logo">
        <a href="profile.php">
        <img src="icons/account_circle_FILL0_wght400_GRAD-25_opsz40.png" alt="profile photo" class="profileIcon">
        </a>
        <a href="classes/logout.php" class="logout">Logout</a>
    </div>
    <div class="navBar">
        <a class="homeButton" href="index.php">Home</a>
        <a class="browseButton" href="browse.php">Browse</a>
        <a class="contactUs" href="contactUs.php"> contact us</a>
    </div>
    <main class="contentBlock">
        <div class="profileInfo">
            <?php
                $user_id = $_SESSION["user_id"];
                echo "<h2>".$_SESSION["username"]."</h2>";
                require_once("classes/post.php");
                $posts = Post::getPostsOfUser($user_id);
                Post::displayPosts($posts);
            ?>
        </div>
        <a href="classes/changePassword.php" class="change">Change password</a>

    </main>
    <div class="footerBar"></div>
</body>
</html>