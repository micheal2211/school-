<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/web.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href href="https://fonts.googleaps.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"rel="stylesheet">
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
        <h1>Contact Us</h1>
    </section>

    <!-----contact ------->
    <section class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d126433.05869611021!2d3.8567078924718246!3d7.3827038511794845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sng!4v1759058446881!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            

    </section>

    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fa fa-home"></i>
                    <span>
                        <h5>XYZ Road, ABC Building</h5>
                        <p>ibandan oyo state</p>
                    </span>                    
                </div>
                 <div>
                    <i class="fa fa-phone"></i>
                    <span>
                        <h5>08041961925</h5>
                        <p>monday to saturday, 10am to 6pm</p>
                    </span>                    
                </div>
                 <div>
                    <i class="fa fa-envelope-o"></i>
                    <span>
                        <h5>micheal12@gmail.com</h5>
                        <p>Email us uour query</p>
                    </span>                    
                </div>
            </div>
           <div class="contact-col">
    <form action="{{ route('wcontact.submit') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Enter your name" required>
        <input type="email" name="email" placeholder="Enter email address" required>
        <input type="text" name="subject" placeholder="Enter your subject" required>
        <textarea rows="8" name="message" placeholder="Message" required></textarea>
        <button type="submit" class="hero-btn red-btn">Send message</button>
    </form>
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