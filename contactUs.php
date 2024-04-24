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
            <img src="icons/pfp.png" alt="profile photo" class="profileIcon">
        </a>
        <a href="classes/logout.php" class="logout">Logout</a>

    </div>
    <div class="navBar">
        <a class="homeButton" href="index.php">Home</a>
        <a class="browseButton" href="browse.php">Browse</a>
        <a class="contactUs" href="contactUs.php"> contact us</a>
    </div>
    <main class="contentBlock">
        <div class="contactForm">
            <form id="contactForm" action="submit.php" method="POST">
                <div class="firstNameBox">
                    <h3 class="fname">First name</h3>
                    <input type="text" class="fnameInput" name="firstname" id="firstname" placeholder="First name...">
                    <span id="fnameError"></span>
                </div>
                <div class="lastNameBox">
                    <h3 class="lname">Last name</h3>
                    <input type="text" class="lnameInput" name="lastname" id="lastname" placeholder="Last name...">
                    <span id="lnameError"></span>
                </div>
                <div class="emailBox">
                    <h3 class="email">Email</h3>
                    <input type="email" class="emailInput" name="email" id="email" placeholder="me@example.com">
                    <span id="emailError"></span>
                </div>
                <div class="queryBox">
                    <h3 class="query">Query</h3>
                    <textarea name="query" id="query" class="queryArea" placeholder="Contact us here..." cols="30" rows="10"></textarea>
                    <span id="queryError"></span>
                </div>
                <input type="submit" class="submitButton" value="Submit" onclick="validateForm()">
            </form>
        </div>
    </main>
    <script src="scripts.js"></script>
</body>

</html>
