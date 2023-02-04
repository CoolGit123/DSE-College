<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/homepage-header.css">
    <link rel="stylesheet" href="../CSS/separateCoursePage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="header">
        <div class="nav-logo">
            <a href="../HTML/homepage.html"><img src="../IMGs/Logo.svg" alt=""></a>
            <h2>DSE College</h2>
        </div>

        <ul class="nav-links">
            <li onclick="window.location='../HTML/homepage.php'" class="nav-link"><a href="../HTML/homepage.php">Home</a></li>
            <li onclick="window.location='../HTML/aboutuspage.php'" class="nav-link"><a href="../HTML/aboutuspage.php">About</a></li>
            <li onclick="window.location='../HTML/Contactuspage.php'" class="nav-link"><a href="../HTML/Contactuspage.php">Contact</a></li>
            <li onclick="window.location='../HTML/cources.php'" class="nav-link"><a href="../HTML/cources.php">Courses</a></li>
            <li onclick="window.location='../HTML/migrationpage.php'" class="nav-link"><a href="../HTML/migrationpage.php">Migration</a></li>
            <li onclick="window.location='../HTML/separateNewPage.php'" class="nav-link"><a href="../HTML/separateNewPage.php">News</a></li>
        </ul>

        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </div>
    
    <div class="container separate-course-top">
        <div class="background"></div>
        <div class="tutors">
            <div class="circle">
                <img src="../IMGs/oyemike-princewill-N9fGkZBXNvY-unsplash_thumbnail.png" alt="">
            </div>
            <div class="details">
                <h3>Jamal</h3>
                <p>Professional fullstack developer</p>

                <div class="star-container">
                    <i class="fa-solid fa-star active"></i>
                    <i class="fa-solid fa-star active"></i>
                    <i class="fa-solid fa-star active"></i>
                    <i class="fa-solid fa-star active"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
            </div>
        
        </div>

        <div class="course-details">
            <div class="course-card">
                <h3>More than 90 hours</h3>
                <i class="fa-regular fa-clock"></i>
            </div>

            <div class="course-card">
                <h3>350+ lessons</h3>
                <i class="fa-solid fa-person-chalkboard"></i>
            </div>

            <div class="course-card">
                <h3>1 month return policy</h3>
                <i class="fa-solid fa-rotate-left"></i>
            </div>
        </div>
    </div>


    <div class="container small-course-detail">
        <h1>Brief explanation of the course</h1>
        <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem eaque aliquid earum. Doloremque quis in consectetur error ipsum aut sequi harum reiciendis dolores illum accusantium assumenda nobis, commodi mollitia architecto eveniet voluptates nulla culpa asperiores alias possimus doloribus eligendi quod a. Quod molestias, velit animi illo necessitatibus quia reiciendis maiores ullam ex fugiat nulla consequuntur praesentium mollitia eaque, possimus voluptatibus! Officiis cupiditate iusto, labore dicta maxime numquam ipsa rem, repellat eveniet magnam placeat veritatis natus voluptatem. Et fugit corrupti accusamus consectetur quod modi aut non! Ratione, enim aspernatur! Dicta illum ut excepturi nobis, culpa veniam id adipisci odit ducimus possimus.</h3>
    </div>


    <div class="container features-container">
        <h1>Features of the course</h1>
        <div class="inner-container">
            <div class="features-left">
                <button class="button active" data-button="1"><i class="fa-solid fa-rotate-left"></i> <span>Return guarantee</span></button>
                <button class="button" data-button="2"><i class="fa-solid fa-graduation-cap"></i> <span>Skill-based training</span></button>
                <button class="button" data-button="3"><i class="fa-solid fa-comments"></i> <span>Troubleshooting and technical support</span></button>
                <button class="button" data-button="4"><i class="fa-solid fa-clock"></i> <span>Permanent and unlimited access</span></button>
                <button class="button" data-button="5"><i class="fa-solid fa-handshake-angle"></i> <span>1 year support after purchase</span></button>
            </div>
            <div class="features-right">
                
                <div class="feature active" data-feature="1">
                    <div class="cont"><i class="fa-solid fa-rotate-left"></i></div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet minus atque fuga natus repudiandae nulla, obcaecati aut, adipisci recusandae exercitationem est possimus numquam ipsa inventore esse nihil. Ad cupiditate eaque temporibus iste provident facere autem?</p>
                </div>

                <div class="feature" data-feature="2">
                    <div class="cont"><i class="fa-solid fa-graduation-cap"></i></div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae praesentium dolorem rerum quas repellat expedita, facere libero iste perferendis sapiente.</p>
                </div>
                
                <div class="feature" data-feature="3">
                    <div class="cont"><i class="fa-solid fa-comments"></i></div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae praesentium dolorem rerum quas repellat expedita, facere libero iste perferendis sapiente.</p>
                </div>

                <div class="feature" data-feature="4">
                    <div class="cont"><i class="fa-solid fa-clock"></i></div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae praesentium dolorem rerum quas repellat expedita, facere libero iste perferendis sapiente.</p>
                </div>

                <div class="feature" data-feature="5">
                    <div class="cont"><i class="fa-solid fa-handshake-angle"></i></div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae praesentium dolorem rerum quas repellat expedita, facere libero iste perferendis sapiente.</p>
                </div>

            </div>
        </div>
    </div>

    <div class="container how-to-get-course-container">
        <div>
            <h1>How to get the course</h1>
            <p>As of now, you can contact us on either email, whatsapp or telegram in case you want to know more about the price and details of the course or purchase But our team is working hard to make this process faster and easier.</p>
        </div>
        <div class="contacts">
            <div class="contact">
                <i class="fa-solid fa-phone"></i>
                <h3>Phone number</h1>
                <p>999-444-666</p>
            </div>

            <div class="contact">
                <i class="fa-solid fa-envelope"></i>
                <h3>Email</h1>
                <p>DSEcollege@gmail.com</p>
            </div>

            <div class="contact">
                <i class="fa-brands fa-instagram"></i>
                <h3>Instagram</h1>
                <p>@DSECollege</p>
            </div>
        </div>
    </div>


    <!-- ? footer -->
    <div class="container footer-container">

        <div>
            <h2>Get in touch</h2>
            <p>torabinia.t.86@gmail.com</p>
            <p>(995) 352-6258</p>
        </div>

        
        <div class="socials">
            <div class="social"><a href=""><img src="../IMGs/SVG6.1.svg" alt=""></a></div>
            <div class="social"><a href=""><img src="../IMGs/facebook-app-symbol.png" alt=""></a></div>
            <div class="social"><a href=""><img src="../IMGs/instagram.png" alt=""></a></div>
            <div class="social"><a href=""><img src="../IMGs/twitter.png" alt=""></a></div>
        </div>

    </div>


    <!-- ? script -->
    <script src="../JS/header.js"></script>
    <script src="../JS/separatecoursepage.js"></script>
</body>
</html>