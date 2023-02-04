<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../CSS/homepage-header.css">
    <link rel="stylesheet" href="../CSS/cources.css">
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
            <li class="nav-link active"><a href="">Courses</a></li>
            <li onclick="window.location='../HTML/migrationpage.php'" class="nav-link"><a href="../HTML/migrationpage.php">Migration</a></li>
            <li onclick="window.location='../HTML/separateNewPage.php'" class="nav-link"><a href="../HTML/separateNewPage.php">News</a></li>
        </ul>

        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </div>



    <section class="gallery">
        <h1 style="text-align: center;">Courses</h1>
        <div class="buttons">
            <button type="button" class="btn-clicked">All</button>
            <button type="button" data-btn="1">Languages</button>
            <button type="button" data-btn="2">programming</button>
            <button type="button" data-btn="3">Design</button>
        </div>
        <div class="container cards-container">


            <div class="card" data-img="1">
                <div style="background-image: url(../IMGs/languages.png);" class="img-cont"></div>
                <div class="text">
                    <p>English</p>
                    <h3>learning English up to C1 level.</h3>
                    <div class="compacted">
                        <span><span class="price">$20/</span>course</span>
                        <a href="separateCoursePage.php" class="btn btn-secondary">View Details</a>
                    </div>
                </div>
            </div>
    
            <div class="card" data-img="1">
                <div style="background-image: url(../IMGs/languages.png);" class="img-cont"></div>
                <div class="text">
                    <p>German</p>
                    <h3>learning German up to B2 level.</h3>
                    <div class="compacted">
                        <span><span class="price">$20/</span>course</span>
                        <a href="separateCoursePage.php" class="btn btn-secondary">View Details</a>
                    </div>
                </div>
            </div>
    
            <div class="card" data-img="2">
                <div style="background-image: url(../IMGs/website\ coding.jpg);" class="img-cont"></div>
                <div class="text">
                    <p>HTML, CSS, JS</p>
                    <h3>learning how to code and create websites.</h3>
                    <div class="compacted">
                        <span><span class="price">$28/</span>course</span>
                        <a href="separateCoursePage.php" class="btn btn-secondary">View Details</a>
                    </div>
                </div>
            </div>
    
            <div class="card" data-img="2">
                <div style="background-image: url(../IMGs/programming.webp);" class="img-cont"></div>
                <div class="text">
                    <p>Java</p>
                    <h3>learning how to code and create websites.</h3>
                    <div class="compacted">
                        <span><span class="price">$15/</span>course</span>
                        <a href="separateCoursePage.php" class="btn btn-secondary">View Details</a>
                    </div>
                </div>
            </div>
    
            <div class="card" data-img="3">
                <div style="background-image: url(../IMGs/website\ design.avif);" class="img-cont"></div>
                <div class="text">
                    <p>Design</p>
                    <h3>learning how to design websites.</h3>
                    <div class="compacted">
                        <span><span class="price">$20/</span>course</span>
                        <a href="separateCoursePage.php" class="btn btn-secondary">View Details</a>
                    </div>
                </div>
            </div>
    
            <div class="card" data-img="3">
                <div style="background-image: url(../IMGs/visual\ design.jpeg);" class="img-cont" data-img="4"></div>
                <div class="text">
                    <p>Visual Design</p>
                    <h3>Designing visual aspects.</h3>
                    <div class="compacted">
                        <span><span class="price">$25/</span>course</span>
                        <a href="separateCoursePage.php" class="btn btn-secondary">View Details</a>
                    </div>
                </div>
            </div>
    
        </div>
    </section>
    
    




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

    <script src="../JS/header.js"></script>
    <script src="../JS/coursepage.js"></script>
</body>
</html>