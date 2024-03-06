
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
                <h3 class="titleText">Title</h3>
                <input type="text" class="fnameInput" name="firstname" placeholder="Title...">
            </div>
            <div class="postBox">
                <h3 class="postText">Post</h3>
                <textarea name="post" class="post" placeholder = "Post content..." cols="30" rows="2"></textarea>
            </div>
            <input type="submit" class="submitButton" value="Submit">
    </form>
    <?php
    require_once("db_connection.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $title = filter_input(INPUT_POST,'firstname',FILTER_SANITIZE_STRING);
        $content = filter_input(INPUT_POST,'post',FILTER_SANITIZE_STRING);
        if(empty($title)||empty($content)){
            echo "<p class='error'>Title and content are required</p>";
            echo '<script>';
            echo 'window.scrollTo({ top: document.body.scrollHeight, behavior: "smooth" });'; 
            echo '</script>';        }
    }
    ?>
    </main>

    <div class="footerBar"></div>

</body>

</html>