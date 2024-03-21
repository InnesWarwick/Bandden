<?php 
session_start();
require("classes/utils.php");

if(isset($_SESSION["loggedIn"])){
    header("Location: index.php");
}

$output = "";
if($_SERVER["REQUEST_METHOD"] === "POST"){
    require("classes/user.php");
    if(isset($_POST["loginSubmit"])){
        $output = User::login();
        if(!$output){
            header("Location: index.php");
        } 
    } else if(isset($_POST["registerSubmit"])){
        $output = User::register();
        if(!$output){
            header("Location: index.php");    
        } 
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
                <h3 class="titleText">Email</h3>
                <input type="text" name="email" class="fnameInput" placeholder="user@me.com">
            </div>
            <div class="title">
                <h3 class="titleText">Username</h3>
                <input type="text" name="username" class="fnameInput" placeholder="user123">
            </div>
            <div class="title">
                <h3 class="titleText">Password</h3>
                <input type="password" name="password" class="fnameInput" placeholder="************">
            </div>
            <input type="submit" name="loginSubmit" class="submitButton" value="Login">
            <input type="submit" name="registerSubmit" class="submitButton" value="Register">
        </form>
    </main>

    <div class="footerBar"></div>
</body>
</html>
