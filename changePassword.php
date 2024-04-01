<?php 
session_start();
require("classes/utils.php");
if(!isset($_SESSION["loggedIn"])){
    header("Location: login.php");
}
$output = "";
if($_SERVER["REQUEST_METHOD"] === "POST"){
    require("classes/user.php");
        $output = User::updatePassword($_SESSION["user_id"]);
        if(!$output){
            header("Location: login.php");
        } 
}
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
        <a href="classes/logout.php" class="logout">Logout</a>

    </div>

    <div class="navBar">
        <a class="homeButton" href="index.php">Home</a>
        <a class="browseButton" href="browse.php">Browse</a>
        <a class="contactUs" href="contactUs.php"> contact us</a>
    </div>
    <div><?php echo $output; ?></div>
    <main class="contentBlock">
        <form class="postForm" method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <div class="title">
                <h3 class="titleText">New password</h3>
                <input type="password" name="password1" class="fnameInput" placeholder="************">
                <h3 class="titleText">Confirm password</h3>
                <input type="password" name="password2" class="fnameInput" placeholder="************">
            </div>
            <input type="submit" name="confirm" class="submitButton" value="Confirm">
        </form>
    </main>

    <div class="footerBar"></div>
</body>
</html>
