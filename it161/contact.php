<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gina Noel's IT161 Portal Website</title>
    <meta name="robots" content="noindex,nofollow"/>
    <meta name="viewport" content="width=device-width"/>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="css/portal.css"/>
    <link rel="stylesheet" href="css/nav.css"/>
    <link rel="stylesheet" href="css/forms.css"/>
</head>
<body>
<header>
    <h1>Gina's IT161 Website</h1>
    <nav class="topnav" id="myTopnav">
        <a href="index.html" class="active">Welcome</a>
        <a href="elements.html">HTML Elements</a>
        <a href="aia.html">AIA</a>
        <a href="big/index.html">BIG</a>
        <a href="http://w3schools.com" target="_blank">W3 Schools</a>
        <a href="https://www.linkedin.com/learning/" target="_blank">LinkedIn Learning</a>
        <a href="flowchart.html">Flowchart</a>
        <a href="fp/index.html">Final Project</a>
        <a href="contact.php">Contact Gina</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
    </nav>
</header>

<div class="wrapper">

    <img class="desktop" src="images/desktop.jpg" alt="Sunrise delight!"/>

    <img class="tablet" src="images/tablet.jpg" alt="Evening views!"/>

    <img class="phone" src="images/phone.jpg" alt="Yoga anyone?"/>

    <h2 class="subheader">A little about me!</h2>

    <p>My name is Gina Noel. I am currently a full-time student improving my HTML skills! I have been in the software
        industry for roughly 22 years.</p>
    <p>I have a wide range of things I love to do. Some of my favorite activities would include yoga, travel, adventure,
        bike riding, hiking, knitting and writing code.</p>
    <p>I am also a certified yoga instructor. I would say my favorite yoga to teach is power yoga or vinyasa flow yoga.
        I have been teaching yoga for roughly 2 years and prefer outdoor yoga in beautiful locations with close friends.
        I someday hope to come up with that perfect yoga business name!</p>

    <?php
    /*
     * Below are 2 different forms to be re-used
     *
     * Only use one at a time, comment out the other!
     *
     */

    include 'includes/contact_include.php'; #site keys & code here

    $toAddress = "gina.noel@comcast.net";  //place your/your client's email address here  TODO: change this later to 8elementsolultions.com
    $toName = "Steven Ross"; //place your client's name here
    $website = "http://www.8elementsolutions.com/";  //place NAME of your client's website

    //         echo loadContact('simple.php');#demonstrates a simple contact form
    echo loadContact('multiple.php');#demonstrates multiple form elements

    ?>

    <footer>
        <p><small>&copy; 2019 by <a href="contact.php" target="_blank">Gina Noel</a>, All Rights Reserved ~ <a
                        href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a
                        href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid
                    CSS</a></small></p>
    </footer>
</div>

<!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->

<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>

</body>
</html>