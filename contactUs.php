<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheets/generalStyle.css">
    <link rel="stylesheet" href="stylesheets/contactStyle.css">
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
        <div class="contactForm">
            <div class="firstNameBox">
                <h3 class="fname">First name</h3>
                <input type="text" class="fnameInput" name="firstname" placeholder="First name...">
            </div>
            <div class="lastNameBox">
                <h3 class="lname">Last name</h3>
                <input type="text" class="lnameInput" name="lastname" placeholder="Last name...">
            </div>
            <div class="emailBox">
                <h3 class="email">email</h3>
                <input type="text" class="emailInput" name="email" placeholder="me@example.com">
            </div>
            <div class="queryBox">
                <h3 class="query">Query</h3>
                <textarea name="query" class="queryArea" placeholder = "Contact us here..." cols="30" rows="10"></textarea>
            </div>
            <input type="submit" class="submitButton" value="Submit">
        </div>
    </main>
</body>

</html>
