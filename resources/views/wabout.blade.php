<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/web.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section class="sub-header">
        <nav>
            <a href="index.html"><img src="images/Cortouch-Media-logo-new-12.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="whome">HOME</a></li>
                    <li><a href="wabout">ABOUT</a></li>
                    <li><a href="wcourse">COURSE</a></li>
                    <li><a href="wblog">BLOG</a></li>
                    <li><a href="wcontact">CONTACT</a></li>
                </ul>

            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>About Us</h1>
    </section>

    <section class="about-us">
        <div class="row">
            <div class="about-col">
                <h1>we are the world's largest University</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut temporibus mollitia nisi consectetur explicabo hic itaque expedita provident quae suscipit asperiores alias cupiditate perspiciatis voluptatibus ratione praesentium rerum, perferendis optio.</p>
                <a href="" class="hero-btn red-btn">EXPLORE NOW</a>
            </div>
            <div class="about-col">
                <img src="images/sch1.jpg" alt="">
            </div>
        </div>

    </section>

    

    

    <!-----footer ------->

    <section class="footer">
        <h4>About Us</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>Quaerat quae fuga cum aliquid quas nobis tenetur atque ipsa nostrum qui.</p>
        <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>
        </div>
        <p>Made with <i class="fa fa-heart-o"></i> by Easy Tutorials</p>


    </section>
    
</body>
</html>