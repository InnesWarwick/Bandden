

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheets/generalStyle.css">
    <link rel="stylesheet" href="stylesheets/browseStyle.css">
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
    <div class="filters">
        <select name="distance" class="filterDistance">
            <option value="" disabled selected>Distance</option>
            <option value="5km">5km</option>
            <option value="20km">20km</option>
            <option value="50km">50km</option>
            <option value="100km">100km</option>
        </select>
        <select name="type" class="filterType">
            <option value="" disabled selected>Ad Type</option>
            <option value="band">Band</option>
            <option value="work">Work</option>
            <option value="tracking">Tracking</option>
            <option value="session">Session</option>
        </select>
        <select name="date" class="filterDate">
            <option value="" disabled selected>Order</option>
            <option value="band">Oldest</option>
            <option value="work">Newest</option>
        </select>
        <a class="createpost" href="createPost.php">Create post</a>
    </div>

    <main class="contentBlock col-2">
    <?php
        require_once("classes/post.php");
        $posts = Post::getPosts();
        Post::displayPosts($posts);
    ?>

    </main>
    <div class="footerBar"></div>

</body>

</html>
