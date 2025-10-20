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
    <section class="header">
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
        <div class="text-box">
            <h1>World's Biggest University</h1>
            <p>Making website is now one of the easiest thing in world. you just need to learn HTML, CSS,<br>JAVASCRIPT and you are good to go.</p>
            <a href="" class="hero-btn">Visit Us To Know More</a>
        </div>
    </section>

    <!----- Course ----->
    <section class="course">
        <h1>Course We Offer</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

        <div class="row">
            <div class="course-col">
                <h3>Intermediate</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos eius eveniet cupiditate accusantium porro voluptatum tempora neque odit omnis ipsa!</p>
            </div>

            
            <div class="course-col">
                <h3>Degree</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil veniam amet fugiat vero veritatis sit temporibus quia tenetur quis iste.</p>
            </div>

            
            <div class="course-col">
                <h3>Post Graduation</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum quibusdam nesciunt autem ipsa voluptatem culpa maiores iusto harum incidunt quaerat!</p>
            </div>

        </div>

    </section>

    <!--------Campus -------->

    <section class="campus">
        <h1>Our Global Camp</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

        <div class="row">
            <div class="campus-col">
                <img src="images/sch1.jpg" alt="">
                <div class="layer">
                    <h3>LONDON</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="images/sch4.jpg" alt="">
                <div class="layer">
                    <h3>NEW YORK</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="images/sch6.jpg" alt="">
                <div class="layer">
                    <h3>WASHINTON</h3>
                </div>
            </div>
        </div>

    </section>

    <!-------facilities--------->

    <section class="facilities">
        <h1>Our Facilities</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>

        <div class="row">
            <div class="facilities-col">
                <img src="images/sch10.jpg" alt="">
                <h3>World class Libary</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, optio.</p>

            </div>
            <div class="facilities-col">
                <img src="images/sch9.jpg" alt="">
                <h3>Largest Play Ground</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, optio.</p>

            </div>
            <div class="facilities-col">
                <img src="images/sch7.jpg" alt="">
                <h3>Tasty And Healthy Food</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, optio.</p>

            </div>
        </div>

    </section>

    <!--------testimonials---------->

    <section class="testimonials">
        <h1>What Our Student Says</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>

        <div class="row">
            <div class="testimonial-col">
                <img src="images/3.jpg" alt="">
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos reprehenderit impedit omnis dolore esse error molestias et ad voluptatibus possimus.</p>
                    <h3>Christine Berkley</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                
            </div>
            
            <div class="testimonial-col">
                <img src="images/3.jpg" alt="">
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos reprehenderit impedit omnis dolore esse error molestias et ad voluptatibus possimus.</p>
                    <h3>David Byer</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-stay-o"></i>
                </div>
                
            </div>
        </div>

    </section>

    <section class="cta">
        <h1>Enroll For Our Various Online Courses<br> Anywhere From The World</h1>
        <a href="wcontact" class="hero-btn">CONTACT US</a>

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


    
    <script src="{{ asset('js/web.js') }}"></script>


    
</body>
</html>