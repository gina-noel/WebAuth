<!DOCTYPE html>
<html lang="en">
<head>
    <title>Final Project by Gina Noel</title>
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/form.css" />
    <link rel="stylesheet" href="css/styles.css" />

    <!-- JQuery -->
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <!-- MenuMaker Plugin -->
    <script src="https://kit.fontawesome.com/d782dc6da9.js" crossorigin="anonymous"></script>
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
    <!-- Icon Library -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" >
    <script src="js/script.js"></script>
</head>
<body>
<main>
    <header>
        <h1><a href="index.html">8 ELEMENT SOLUTIONS</a></h1>
        <nav id="cssmenu">
            <ul>
                <li><a href="about.html"><i class="fa fas fa-om"></i> ABOUT STEVEN</a></li>
                <li><a href="testimonials.html"><i class="fa fa-users" aria-hidden="true"></i> WHAT PEOPLE ARE SAYING</a></li>
                <!-- dropdown menu for training and consultancy -->
                <li><a href="#">TRAINING & CONSULTANCY</a>
                    <ul>
                        <li><a href="training.html"><i class="fa fa-fw fa-thumbs-o-up"></i> ONLINE WORKSHOPS</a></li>
                        <li><a href="consultancy.php"><i class="fa fa-fw fa-globe"></i> WORK WITH ME</a></li>
                    </ul>
                </li>
                <li><a href="index.html"><i class="fa fa-fw fa-home"></i> HOME</a></li>
            </ul>
        </nav>
    </header>

<div id="consultancy" class="wrapper">

    <img class="desktop" src="images/buddha.jpg" alt="Desktop image"/>
    <img class="tablet" src="images/buddha600.jpg" alt="Tablet image"/>
    <img class="phone" src="images/buddha150.jpg" alt="Phone image"/>
    <h2 class="subheader">A little about 8 Element Solutions!</h2>
    <p>Details about the 8 Element Solutions programs and it's online offerings and personal coaching goes here! 8 Element Solutions has not finalized it's programs, so this is just fake text until they do so.</p>
    <p>Pudding I love oat cake marshmallow bear claw pudding candy toffee icing. Sweet halvah I love I love tootsie roll muffin icing gummi bears carrot cake. Bonbon liquorice dragée cheesecake chocolate bar.</p>
    <p>Croissant tootsie roll halvah I love macaroon. Jelly cookie cupcake. Apple pie lemon drops I love I love cheesecake topping lemon drops cake. Jelly candy I love ice cream gingerbread I love wafer bear claw fruitcake.</p>
    <p>Oat cake lollipop cupcake cake sweet roll lemon drops. Apple pie bonbon gummies. Cake tiramisu jelly candy sugar plum pastry wafer cotton candy.</p>
    <p>Cake jelly liquorice I love. I love candy wafer pudding soufflé carrot cake sugar plum candy.</p>


    <?php
    /*
     * Below are 2 different forms to be re-used
     *
     * Only use one at a time, comment out the other!
     *
     */

    include 'includes/contact_include.php'; #site keys & code here

    $toAddress = "8elementsolutions@gmail.com";
    $toName = "Steven Ross";
    $website = "http://www.8elementsolutions.com/";

//             echo loadContact('simple.php');#demonstrates a simple contact form
    echo loadContact('multiple.php');#demonstrates multiple form elements

    ?>
    <footer>
        <p><small>&copy; 2021 by <a href="contact.php" target="_blank">HiJackingLife.com</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
</div>

</main>
</body>
</html>