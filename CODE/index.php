<?php
// session_start(); // Start the session to use session variables
include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="img/Brand_Broker_logo black 1.png" type="image/x-icon">
    <!-- animation cdn -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!--bootstrap cdn-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--fontawsome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <!--css link-->

    <link rel="stylesheet" href="css/landing.css">
    <link rel="stylesheet" href="css/round.css">
    <link rel="stylesheet" href="css/carddesign.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/scrollontop.css">
    <link rel="stylesheet" href="css/loader.css">
    <title>BrandBrokers.in</title>
</head>

<body>
    <div id="cruse">
        <div class="loader_bg">
            <div class="loader"></div>
        </div>
        <!-- Scroll to Top Button -->
        <button id="scrollToTopBtn" class="scroll-to-top"><img src="img/scroll on top .png" alt=""></button>
        <div class="header home">
            <nav class="menubar" data-aos="fade-up">
                <!-- <h1>LIBRARY</h1> -->
                <img src="img/Brand_Broker_logo black 1.png" alt="logo" id="logoimg">
                <ul class="navlink">
                    <li class="nav-item active"><a href="#"> Home </a></li>
                    <li class="nav-item"><a href="#ourserviceheading">Services</a></li>
                    <li class="nav-item"><a href="#about-us"> About Us </a></li>
                    <li class="nav-item"><a href="#ourclientsheading">Clients</a></li>
                    <li class="nav-item"><a href="contactus">Contact Us</a></li>
                </ul>
                <ul class="navicon">
                    <!-- <i class="fa-solid fa-bars" style="color: #ffffff;"></i> -->
                    <input id="checkbox" type="checkbox">
                    <label class="toggle" for="checkbox">
                        <div id="bar1" class="bars"></div>
                        <div id="bar2" class="bars"></div>
                        <div id="bar3" class="bars"></div>
                    </label>

                </ul>
            </nav>
        </div>
        <!-- landing1 part -->
        <div class="land_part" data-aos="fade-up">
            <div class="mainland">
                <img src="img/Group 4.png" alt="" class="responsive-image">
                <center> <img src="img/mainimgphphone.png" alt="" class="responsive-image1"></center>

            </div>
            <div class="sideimg">
                <img src="img/Ellipse 2.png" alt="" class="sideimgbig">
                <img src="img/sideimgfor small screen.png" alt="" class="slideimgsmall">
            </div>

        </div>


        <!--Our Service Part-->
        <center>
            <h1 class="ourserviceheading" id="ourserviceheading" data-aos="zoom-in-up">Our Services</h1>
        </center>

        <!-- section 1 -->
        <section id="ourservice" data-aos="zoom-in-up">

            <div class="ourservice-left-col">
                <img src="img/ourservice1.png">
            </div>
            <div class="ourservice-right-col">
                <CENTER>
                    <div class="ourservice-text">
                        <div class="head_os">
                            <img src="img/image.png" alt=""> &nbsp;&nbsp;
                            <h1>Talent Management</h1>
                        </div>

                        <p>We provide talent management services to budding content creators by providing the
                            proper
                            guidance to grow as a content creator and help them become successful influencers.
                        </p>
                    </div>
                </CENTER>
            </div>
        </section>


        <!-- New section with swapped content -->
        <!-- section2 -->
        <section id="new-ourservice" data-aos="zoom-in-up">
            <div class="new-ourservice-left-col">
                <div class="new-ourservice-text">
                    <div class="new-head_os">
                        <img src="img/qualitycontroicon.png">&nbsp;&nbsp;
                        <h1>Quality Content
                        </h1>
                    </div>
                    <p>We are a close-knitted company governed by a content management team that cares deeply about
                        content
                        quality, advertiser friendliness, and professionalism.
                    </p>
                </div>
            </div>
            <div class="new-ourservice-right-col">
                <img src="img/qualitycontol.png" alt="Service Image">
            </div>
        </section>


        <!-- section 1 repeat 1-->
        <section id="ourservice" data-aos="zoom-in-up">
            <div class="ourservice-left-col">
                <img src="img/eventmanagement.png">
            </div>
            <div class="ourservice-right-col">
                <CENTER>
                    <div class="ourservice-text">
                        <div class="head_os">
                            <img src="img/eventmanagementicon.png" alt=""> &nbsp;&nbsp;
                            <h1>Event Management</h1>
                        </div>

                        <p>We organize tournaments and events for gaming content creators to build up their confidence and make bonding with other gamers on board.
                        </p>
                    </div>
                </CENTER>
            </div>
        </section>

        <!-- New section with swapped content -->
        <!-- section2 repeat 1 -->
        <section id="new-ourservice" data-aos="zoom-in-up">
            <div class="new-ourservice-left-col">
                <div class="new-ourservice-text">
                    <div class="new-head_os">
                        <img src="img/careerdevelopmenticon.png">&nbsp;&nbsp;
                        <h1>Career Development</h1>
                    </div>
                    <p>We aim to make content creation more than passion and encourage the creators to make a career out of their hobbies and learn a way to monetize their craft by taking the right steps.


                    </p>
                </div>
            </div>
            <div class="new-ourservice-right-col">
                <img src="img/careerdevelopment.png" alt="Service Image">
            </div>
        </section>



        <!-- section 1 repeat 2-->
        <section id="ourservice" data-aos="zoom-in-up">
            <div class="ourservice-left-col">
                <img src="img/influencermarketing.png">
            </div>
            <div class="ourservice-right-col">
                <CENTER>
                    <div class="ourservice-text">
                        <div class="head_os">
                            <img src="img/influencermarketingicon.png" alt=""> &nbsp;&nbsp;
                            <h1>Influencer Marketing</h1>
                        </div>

                        <p>We at BrandBrokers have always believed that each and every creator is unique. With the help of media and
                            brand partners we enable influencers unlock their true potential.</p>
                    </div>
                </CENTER>
            </div>
        </section>

        <!-- New section with swapped content -->
        <!-- section2 repeat 2 -->
        <section id="new-ourservice" data-aos="zoom-in-up">
            <div class="new-ourservice-left-col">
                <div class="new-ourservice-text">
                    <div class="new-head_os">
                        <img src="img/esportsmanagementicon.png">&nbsp;&nbsp;
                        <h1>Esports Tournaments</h1>
                    </div>
                    <p>From Free Fire to Valorant, we didn't left no stone unturned when it comes to esports
                        tournaments.
                        When it comes to tournaments we excel in both production and League operations.</p>
                </div>
            </div>
            <div class="new-ourservice-right-col">
                <img src="img/esportsmanagement.png" alt="Service Image">
            </div>
        </section>

        <!--Our Service Part-->
        <!-- <center>
        <h1 class="aboutusheading">About Us</h1>
    </center> -->
        <section id="about-us">
            <div class="text-area" data-aos="fade-up">
                <h1>About Us</h1>
            </div>
            <p data-aos="fade-up">
            Founded in 2023, Brandbrokers is a dynamic marketing agency dedicated to empowering creators and connecting them with brands. We understand the unique challenges faced by creators in today’s digital landscape and strive to elevate their visibility and impact. Our mission is to foster meaningful partnerships that not only enhance brand presence but also amplify the voices of innovative creators. At Brandbrokers, we leverage strategic insights and creative solutions to help our clients shine in the limelight they deserve. Join us in transforming your vision into reality, as we navigate the exciting world of marketing together
            </p>
        </section>

        <div class="wrapper11" data-aos="zoom-in-up">
            <div class="container11">
                <span class="num" data-val="80">0</span>
                <span class="text">Brands</span>
            </div>

            <div class="container11">
                <span class="num" data-val="1500">0</span>
                <span class="text">Creators</span>
            </div>

            <div class="container11">
                <span class="num" data-val="4000">0</span>
                <span class="text">Players</span>
            </div>

            <div class="container11">
                <span class="num" data-val="45">0</span>
                <span class="text">Staffs</span>
            </div>
        </div>


        <!--Our clients Part-->
        <center>
            <h1 class="ourclientsheading" id="ourclientsheading">Our Clients</h1>
        </center>
        <section id="our_clints">
            <!-- /* From Uiverse.io by ElSombrero2 */  -->

            <div class="card" data-aos="fade-up">
                <div class="content">
                    <div class="back">
                        <div class="back-content">
                            <img src="img/JeetWin 1.png" class="img">
                        </div>
                    </div>
                    <div class="front">
                        <div class="top">
                            <div class="toptext">
                                <h5>Feedback</h5>
                                <h3>JeetWin </h3>
                            </div>
                        </div>
                        <div class="mid">
                            <p>I've had the pleasure of working with Brandbrokers for several years, and their expertise
                                and dedication in the industry are truly unparalleled. Their strategic vision and
                                ability to navigate complex negotiations make them an invaluable asset to any team.
                                Brandbroker's commitment to excellence and their proactive approach consistently lead to
                                outstanding results. I highly recommend Brandbrokers for anyone looking to elevate their
                                brand or career.</p>
                        </div>

                        <div class="card-footer">
                            <a href="https://www.jeetwin.club/" target="_blank" class="go-to-link">Go To
                                <span>&#8599;</span></a>
                            <div class="bookmark-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="purple"
                                    viewBox="0 0 24 24">
                                    <path d="M5 3v18l7-5 7 5v-18h-14z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" data-aos="fade-up">
                <div class="content">
                    <div class="back">
                        <div class="back-content">
                            <img src="img/mostbet.png" class="img">
                        </div>
                    </div>
                    <div class="front">
                        <div class="top">
                            <div class="toptext">
                                <h5>Feedback</h5>
                                <h3>Mostbet </h3>
                            </div>
                        </div>
                        <div class="mid">
                            <p>Brandbrokers has been fantastic to work with! Their professionalism and talent expertise
                                made
                                the process seamless, exceeding our expectations. We're proud to have them
                                as our partners!
                            </p>
                        </div>

                        <div class="card-footer">
                            <a href="https://mostbet-in46.com" target="_blank" class="go-to-link">Go To
                                <span>&#8599;</span></a>
                            <div class="bookmark-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="purple"
                                    viewBox="0 0 24 24">
                                    <path d="M5 3v18l7-5 7 5v-18h-14z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" data-aos="fade-up">
                <div class="content">
                    <div class="back">
                        <div class="back-content">
                            <img src="img/1win.png" class="img" style="width:170px; height: 150px;">
                        </div>
                    </div>
                    <div class="front">
                        <div class="top">
                            <div class="toptext">
                                <h5>Feedback</h5>
                                <h3>1Win </h3>
                            </div>
                        </div>
                        <div class="mid">
                            <p>Brandbrokers has been fantastic to work with! Their professionalism and talent expertise
                                made
                                the process seamless, exceeding our expectations. We're proud to have them
                                as our partners!
                            </p>
                        </div>

                        <div class="card-footer">
                            <a href="https://1wins.in/" target="_blank" class="go-to-link">Go To
                                <span>&#8599;</span></a>
                            <div class="bookmark-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="purple"
                                    viewBox="0 0 24 24">
                                    <path d="M5 3v18l7-5 7 5v-18h-14z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" data-aos="fade-up">
                <div class="content">
                    <div class="back">
                        <div class="back-content">
                            <img src="img/1xbet.png" class="img" style="width:170px; height: 120px;">
                        </div>
                    </div>
                    <div class="front">
                        <div class="top">
                            <div class="toptext">
                                <h5>Feedback</h5>
                                <h3>1XBET </h3>
                            </div>
                        </div>
                        <div class="mid">
                            <p>Brandbrokers has been fantastic to work with! Their professionalism and talent expertise
                                made
                                the process seamless, exceeding our expectations. We're proud to have them
                                as our partners!
                            </p>
                        </div>

                        <div class="card-footer">
                            <a href="https://india.1x-bet.mobi/" target="_blank" class="go-to-link">Go To
                                <span>&#8599;</span></a>
                            <div class="bookmark-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="purple"
                                    viewBox="0 0 24 24">
                                    <path d="M5 3v18l7-5 7 5v-18h-14z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" data-aos="fade-up">
                <div class="content">
                    <div class="back">
                        <div class="back-content">
                            <img src="img/weplay.png" class="img">
                        </div>
                    </div>
                    <div class="front">
                        <div class="top">
                            <div class="toptext">
                                <h5>Feedback</h5>
                                <h3>WePlay </h3>
                            </div>
                        </div>
                        <div class="mid">
                            <p>Brandbrokers has been fantastic to work with! Their professionalism and talent expertise
                                made
                                the process seamless, exceeding our expectations. We're proud to have them
                                as our partners!
                            </p>
                        </div>

                        <div class="card-footer">
                            <a href="https://weplayapp.com/?region=U" target="_blank" class="go-to-link">Go To
                                <span>&#8599;</span></a>
                            <div class="bookmark-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="purple"
                                    viewBox="0 0 24 24">
                                    <path d="M5 3v18l7-5 7 5v-18h-14z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" data-aos="fade-up">
                <div class="content">
                    <div class="back">
                        <div class="back-content">
                            <img src="img/gamerji.png" class="img" style="width:170px; height: 160px;">
                        </div>
                    </div>
                    <div class="front">
                        <div class="top">
                            <div class="toptext">
                                <h5>Feedback</h5>
                                <h3>GAMERJI </h3>
                            </div>
                        </div>
                        <div class="mid">
                            <p>Brandbrokers has been fantastic to work with! Their professionalism and talent expertise
                                made
                                the process seamless, exceeding our expectations. We're proud to have them
                                as our partners!
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="https://www.gamerji.com/" target="_blank" class="go-to-link">Go To
                                <span>&#8599;</span></a>
                            <div class="bookmark-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="purple"
                                    viewBox="0 0 24 24">
                                    <path d="M5 3v18l7-5 7 5v-18h-14z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" data-aos="fade-up">
                <div class="content">
                    <div class="back">
                        <div class="back-content">
                            <img src="img/Rummy334.png" class="img" style="width:250px; height: 150px;">
                        </div>
                    </div>
                    <div class="front">
                        <div class="top">
                            <div class="toptext">
                                <h5>Feedback</h5>
                                <h3>Rummy 334</h3>
                            </div>
                        </div>
                        <div class="mid">
                            <p>Brandbrokers has been fantastic to work with! Their professionalism and talent expertise
                                made
                                the process seamless, exceeding our expectations. We're proud to have them
                                as our partners!
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href=" https://allrummyapp.com.co/334-rummy-apk
                            " target="_blank" class="go-to-link">Go To <span>&#8599;</span></a>
                            <div class="bookmark-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="purple"
                                    viewBox="0 0 24 24">
                                    <path d="M5 3v18l7-5 7 5v-18h-14z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" data-aos="fade-up">
                <div class="content">
                    <div class="back">
                        <div class="back-content">
                            <img src="img/Rummy mars.png" class="img" style="width:120px; height: 120px;">
                        </div>
                    </div>
                    <div class="front">
                        <div class="top">
                            <div class="toptext">
                                <h5>Feedback</h5>
                                <h3>Rummy mars</h3>
                            </div>
                        </div>
                        <div class="mid">
                            <p>Brandbrokers has been fantastic to work with! Their professionalism and talent expertise
                                made
                                the process seamless, exceeding our expectations. We're proud to have them
                                as our partners!
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="https://allrummynow.in/rummy-mars/" target="_blank" class="go-to-link">Go To
                                <span>&#8599;</span></a>
                            <div class="bookmark-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="purple"
                                    viewBox="0 0 24 24">
                                    <path d="M5 3v18l7-5 7 5v-18h-14z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" data-aos="fade-up">
                <div class="content">
                    <div class="back">
                        <div class="back-content">
                            <img src="img/Indiluck.png" class="img" style="width:120px; height: 110px;">
                        </div>
                    </div>
                    <div class="front">
                        <div class="top">
                            <div class="toptext">
                                <h5>Feedback</h5>
                                <h3>Indiluck</h3>
                            </div>
                        </div>
                        <div class="mid">
                            <p>Brandbrokers has been fantastic to work with! Their professionalism and talent expertise
                                made
                                the process seamless, exceeding our expectations. We're proud to have them
                                as our partners!
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="https://www.indiluck.com/" target="_blank" class="go-to-link">Go To
                                <span>&#8599;</span></a>
                            <div class="bookmark-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="purple"
                                    viewBox="0 0 24 24">
                                    <path d="M5 3v18l7-5 7 5v-18h-14z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" data-aos="fade-up">
                <div class="content">
                    <div class="back">
                        <div class="back-content">
                            <img src="img/Rooter_Dark_Register2x.png_1.png" class="img">
                        </div>
                    </div>
                    <div class="front">
                        <div class="top">
                            <div class="toptext">
                                <h5>Feedback</h5>
                                <h3>Rooter</h3>
                            </div>
                        </div>
                        <div class="mid">
                            <p>Brandbrokers has been fantastic to work with! Their professionalism and talent expertise
                                made
                                the process seamless, exceeding our expectations. We're proud to have them
                                as our partners!
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="https://www.rooter.gg/ " target="_blank" class="go-to-link">Go To
                                <span>&#8599;</span></a>
                            <div class="bookmark-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="purple"
                                    viewBox="0 0 24 24">
                                    <path d="M5 3v18l7-5 7 5v-18h-14z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <!-- -------------------------footer part----------------- -->
        <footer>
            <div class="footer-main-row">
                <div class="col" id="col1" data-aos="flip-right">
                    <img src="img/Brand_Broker_logo.png" class="footer-logo">
                    <p>Brandbrokers, established in 2023, connects creators with brands and offers event management
                        services, empowering them to shine in today's digital landscape.</p>
                </div>


                <div class="col" id="col2" data-aos="fade-up">
                    <h1>Office</h1>
                    <h5>Dn Bannerjee Rd, Sodepur</h5>
                    <h5>Kolkata, North 24 Parganas</h5>
                    <h5>West bengal, PIN 700111, India</h5>
                    <h4>support@brandbrokers.in</h4>
                    <!-- <h4>+91-7439268701</h4> -->
                </div>
                <div class="col" id="col3" data-aos="fade-up">
                    <h1>Links</h1>
                    <div class="footer-links">
                        <a href="https://www.facebook.com" target="blank"> <img src="img/facebook.png"></a>
                        <a href="https://www.linkedin.com" target="blank"><img src="img/linkdin.png"></a>
                        <a href="https://x.com" target="blank"><img src="img/twiter.png"></a>
                        <a href="https://www.instagram.com/brandbrokers.in?igsh=MWI1enBja2tlYjgyNg=="
                            target="_blank"><img src="img/instagram.png"></a>
                        <a href="https://www.youtube.com" target="blank"><img src="img/youtube.png"></a>
                        <!-- <a href=""><img src="images/contactus-links/youtube.svg"></a> -->
                    </div>
                </div>
                <div class="col" id="col4" data-aos="fade-up">
                    <h1>Pages</h1>
                    <a href="privacypolicy" class="btmlinks">
                        <h5>Privacy & Policy</h5>
                    </a>
                    <a href="termsandcondition" class="btmlinks">
                        <h5>Terms & Conditions </h5>
                    </a>
                </div>
                <div class="col" id="col5" data-aos="fade-up">
                    <h1>Newsletter</h1>
                    <form class="footerform" action="" method="POST" >

                        <img src="img/mailicon.png" alt="">
                        <input type="email" name="email"placeholder="Enter Your Email Address"autocomplete="off"  required>
                        <button type="submit" name="submit"><img src="img/newsletterarrow.png" alt=""></button>
                    </form>
                </div>
            </div>
            <hr>
            <p class="copyright">Brandbrokers © 2023 - All Rights Reserved</p>
        </footer>
        <?php
if(isset($_POST['submit']))
{


$email=$_POST['email'];
$sql="INSERT INTO newsletter (email) VALUES ('$email')";
$res=mysqli_query($conn,$sql);
if($res)
{
    header('Location:index');
}
else
{
    header('Location:index');  
}
}
?>



        <!-- <script src="js/carosolscript.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
            
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="js/preloader.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init({
                offset: 200,
                duration: 1000,
            }
            );
        </script>
        <script src="js/mobile_nav.js"></script>
        <script src="js/navberactivestate.js"></script>
        <script src="js/counter.js"></script>
        <script src="js/scrollontop.js"></script>
        <script src="js/titlechange.js"></script>
        <script src="js/linkreset.js"></script>
</body>

</html>