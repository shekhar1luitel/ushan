<?php
require('../urko-project-sem/database.php');
$userDetails = readAll("users");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neptours</title>
    <link rel="stylesheet" href="/CSS/index.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>

<body>

    <!-- ============ Start NAVBAR Section ====== -->

    <header id="nav">
        <a href="#" class="logo">NepTours</a>

        <ul class="navbar">
            <li><a href="Home">Home</a></li>
            <li><a href="Packages">Packages</a></li>
            <li><a href="Services">Service</a></li>
            <li><a href="Contact">Contact</a></li>
        </ul>
    </header>


    <!-- ========= HOME Section ======== -->

    <section class="home container" id="home">
        <div class="con">
            <div class="home-text">
                <h1>Gmail:</h1>
                <p>"TRAVELING-IT LEAVES YOU SPEECHLESS,<BR>THEN TURNS INTO A STORYTELLER"</BR></p>
            </div>


            <a href="#">
                <button class="btn"> Explore More</button>
            </a>


        </div>
    </section>


    <section class="packages container" id="2">
        <h1 id="title">THE MOST POPULAR TOURS</h1>
        <h1 class="heading">
            <span>P</span>
            <span>a</span>
            <span>c</span>
            <span>k</span>
            <span>a</span>
            <span>g</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="allpack">

            <?php foreach ($userDetails as $user) :
            ?>
                <div class="card">
                    <div class="packimage">
                        <img src="/images/everest basecamp.jpg" alt="">
                    </div>
                    <div class="card-body">
                        <h1 class="card-title"><?=$user['email']?></h1>
                        <p>They call it the “steps to heaven” for a good reason. You will look at the scenery that's so breathtakingly stunning and unlike any mountainous terrain that you have ever seen before changing from lush green farmland, dense forest, and glistening blue fast-flowing rivers to the barren land and glacial pools the higher you climb that you realize it was a good decision.</p>
                        <button class="btn pkbtn"> See More</button>
                    </div>

                </div>

            <?php
            endforeach;
            ?>
            <!-- <div class="card">
                <div class="card-img">
                    <img src="/images/annapurna circuit trek.jpg" alt="">
                </div>
                <div class="card-body">
                    <h1 class="card-title">aanapurna circuit trek</h1>
                    <p>This is one of the most popular treks in the world, famous for dramatic deep gorges, desolate high mountain passes, fantastic viewpoints (Poon Hill), hot springs, Buddhist and Hindu temples, delightful farming villages, and stunning views of Annapurna summits.</p>
                    <button class="btn pkbtn"> See More</button>
                </div>

            </div>

            <div class="card">
                <div class="card-img">
                    <img src="/images/The_Muktinath_Temple.jpg" alt="">
                </div>

                <div class="card-body">
                    <h1 class="card-title"> muktinath</h1>

                    <p>Muktinath Temple holds immense spiritual significance for Hindus, as it is one of the 108 Divya Desams or holy abodes of Lord Vishnu, the god of preservation. The temple is dedicated to Lord Vishnu in the form of a Saligram, a sacred black stone that represents the deity.</p>
                    <button class="btn pkbtn"> See More</button>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <img src="/images/Pathivara.jpg" alt="">
                </div>

                <div class="card-body">
                    <h1 class="card-title">pathivara tour</h1>
                    <p>Its a tour that leads you to one of the prominent Shakti Peeth of Pathibhara Devi, located at 3794m altitude above sea level. The Holy shrine of Pathibhara Bhagwati is the epitome of religious tolerance among Nepalese as Pathibhara is equally venerated by Buddhist and Hindu Devotees. </p>
                    <button class="btn pkbtn">See More</button>
                </div>

            </div>

            <div class="card">
                <div class="card-img">
                    <img src="/images/Pokhara.jpg" alt="">
                </div>
                <div class="card-body">
                    <h1 class="card-title">pokhara</h1>
                    <p>Pokhara is popular for its beautiful landscapes in and around. A valley surrounded by hills and famous landmarks like Begnas Lake and Phewa Lake where the elevation suddenly changes taking you to a hilltop like Sarangkot; ideal spot to observe the thirst healing sunrise falling on giant Himalayan Ranges.</p>
                    <button class="btn pkbtn">See More</button>
                </div>

            </div>
            <div class="card">
                <div class="card-img">
                    <img src="/images/lumbini.jpg" alt="">
                </div>

                <div class="card-body">
                    <h1 class="card-title">lumbini</h1>
                    <p>Walk in the footsteps of Buddha as you explore the region where he spent his childhood as Prince Siddhartha. The exact spot where Buddha was born is marked here in Lumbini and the site has understandably become one of the world's most important holy sites.</p>
                    <button class="btn pkbtn">See More</button>
                </div>

            </div> -->
        </div>
    </section>

    <!-- ******* Cateogry Section *********** --->

    <section class="cateogry container">
        <div class="cat-title">
            <h2>Start Your Vacation <br> with lots of Services !</h2>
        </div>
        <div class="row-item">
            <a href="hiking.html">
                <img src="/icon/hiking1.png" alt="Hiking" id="cat-pic">
                <h2>Hiking</h2>
            </a>
            <a href="tours.html">
                <img src="/icon/tours1.png" alt="Tours" id="cat-pic">
                <h2>Tours</h2>
            </a>
            <a href="junglesafari.html">
                <img src="/icon/safari.png" alt="Jungle Safari" id="cat-pic">
                <h2>Jungle Safari</h2>
            </a>
            <a href="rafting.html">
                <img src="/icon/rafting.png" alt="Rafting" id="cat-pic">
                <h2>Rafting</h2>
            </a>
        </div>
    </section>

    <!-- ******* Cateogry Section End *********** --->


    <!----

    <section class="service" id="3">
        <h1 class="heading">
            <span>S</span>
            <span>e</span>
            <span>r</span>
            <span>v</span>
            <span>i</span>
            <span>c</span>
            <span>e</span>
            <span>s</span>
        </h1>
        <div class="box-container">
            <div class="box">
                <i class="fas fa-hotel"></i>
                <h3>Affordable Hotels</h3>
                <p>We have lots of Affordable Hotels For You All Over Nepal!! So What Are You Waiting For,Just Enjoy our Life Without Spending Much.</p>
            </div>
            <div class="box">
                <i class="fa-solid fa-utensils"></i>
                <h3>Foods And Drinks</h3>
                <p>You Will Get All Kinds Of Food And Drinks At Very Reasonable Prices.</p>
            </div>
            <div class="box">.
                <i class="fa-solid fa-bullhorn"></i>
                <h3>safty guide</h3>
               <p>Travelling With Us Has Never Been Safer .we Always Ensure Our Customers Are Secure And Practice Caution And Safeguarding Measures When Travelling.</p>
            </div>
            <div class="box">
                <i class="fa-solid fa-utensils"></i>
                <h3>All Over Nepal</h3>
                <p>When It Comes To Destinations, The Limit Is Your Imagination As We Have Expanded Our Services To Being Able To Visit Anywhere They Want In Nepal.</p>
            </div>
            <div class="box">
                <i class="fa-solid fa-utensils"></i>
                <h3>adventres</h3>
               <p>Life Is Too Short To Not To Take The Opportunity Of Having An Adventure When It Comes Along And We Can Gurantee You Will Never Regret Your Decision.</p>
            </div>
            <div class="box">
                <i class="fa-solid fa-utensils"></i>
                <h3>Experinced  Guide</h3>
               <p>Life Is Too Short To Not To Take The Opportunity Of Having An Adventure When It Comes Along And We Can Gurantee You Will Never Regret Your Decision.</p>
            </div>


        </div>
    </section>

    <section class="review" id="4">
        <h1 class="heading">
            <span>R</span>
            <span>e</span>
            <span>v</span>
            <span>i</span>
            <span>e</span>
            <span>w</span>
            <span>s</span>

        </h1>
        <div class="rper">
            <div class="review-person">
                <img src="/images/review.jpg" alt="deafultimg" id="dfimg">
                <h3>THESE WERE THE BEST DAYS OF THE YEAR</h 3>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet fugiat ducimus voluptatem, sit sunt aperiam maxime modi optio recusandae voluptatum consectetur nostrum porro hic quia quod doloribus accusantium consequuntur aliquam!</P>
            </div>
            <div class="review-person">
                <img src="/images/review.jpg" alt="deafultimg" id="dfimg">
                <h3>THESE WERE THE BEST DAYS OF THE YEAR</h 3>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet fugiat ducimus voluptatem, sit sunt aperiam maxime modi optio recusandae voluptatum consectetur nostrum porro hic quia quod doloribus accusantium consequuntur aliquam!</P>
            </div>
            <div class="review-person">
                <img src="/images/review.jpg" alt="deafultimg" id="dfimg">
                <h3>THESE WERE THE BEST DAYS OF THE YEAR</h 3>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet fugiat ducimus voluptatem, sit sunt aperiam maxime modi optio recusandae voluptatum consectetur nostrum porro hic quia quod doloribus accusantium consequuntur aliquam!</P>
            </div>
        </div>
    </section>

    <section class="contact" id="5">
        <h1 class="heading">
            <span>C</span>
            <span>o</span>
            <span>n</span>
            <span>t</span>
            <span>a</span>
            <span>c</span>
            <span>t</span>
        </h1>

        <div class="top">
            <div class="contoo">
                <h1>Get in touch</h1>
                <p>Want to get in touch?We'd love to hear from you <br>here's how you can reach us..</p>
            </div>
            <div class="image">

            </div>
        </div>

        <div class="support-cs">
            <div class="talk">
                <i class="fa-solid fa-phone fa-2xl"></i>
                <h2>Talk to series</h2>
                <p>Interested in tours and trekng? Just pick up the phone to talk with a member of our team.</p>
                <button class="bton"> call now</button>

            </div>

            <div class="talk">
                <i class="fa-solid fa-comments fa-2xl"></i>
                <h2>Contact Customer Support</h2>
                <p>Sometimes you need a little help from your friends or a support rep.Don't worry..we're here for you.</p>
                <button class="bton">Contact Support</button>
            </div>
        </div>

    </section>


    <footer>
        <div class="about">
            <div class="col">
                <img src="/images/finallogo.png" class="logo">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi est, eius expedita, et quae id, eligendi deserunt voluptatibus nostrum consectetur impedit perspiciatis quibusdam ut. Quis doloremque voluptate enim nisi assumenda.</p>
            </div>
            <div class="col">
                <h3>Office</h3>
                <p>ABC Road</p>
                <p>Sinamangal 3, kathmandu</p>
                <p>Nepal</p>
                <p class="email-id">abc@gmail.com</p>
                <h4>+977 98********</h4>
            </div>
            <div class="col">
                <h3>Links</h3>
                <ul>
                    <li><a href="#home" style="color: #000;">Home</a></li>
                    <li><a href="#2" style="color: #000;">Packages</a></li>
                    <li><a href="#3" style="color: #000;">Services</a></li>
                    <li><a href="#4" style="color: #000;">Review</a></li>
                    <li><a href="#5" style="color: #000;">Contacts</a></li>

                </ul>
            </div>
            <div class="col">
                <h3>Follow us</h3>
                <div class="social">
                    <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.whatsapp.com/"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="https://www.twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <hr>
        <p class="copyright"> Copyright © 2012 - 2023 NepTours®. All rights reserved.</p>
    </footer>

    <script src="main.js"></script>
</body>
</html>
