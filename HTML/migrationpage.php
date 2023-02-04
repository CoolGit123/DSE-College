<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/homepage-header.css">
    <link rel="stylesheet" href="../CSS/migrationpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
    <div class="header">
        <div class="nav-logo">
            <a href="../HTML/homepage.html"><img src="../IMGs/Logo.svg" alt=""></a>
            <h2>DSE College</h2>
        </div>

        <ul class="nav-links">
            <li onclick="window.location='../HTML/homepage.php'" class="nav-link "><a href="../HTML/homepage.php">Home</a></li>
            <li onclick="window.location='../HTML/aboutuspage.php'" class="nav-link"><a href="../HTML/aboutuspage.php">About</a></li>
            <li onclick="window.location='../HTML/Contactuspage.php'" class="nav-link"><a href="../HTML/Contactuspage.php">Contact</a></li>
            <li onclick="window.location='../HTML/cources.php'" class="nav-link"><a href="../HTML/cources.php">Courses</a></li>
            <li class="nav-link active"><a href="">Migration</a></li>
            <li onclick="window.location='../HTML/separateNewPage.php'" class="nav-link"><a href="../HTML/separateNewPage.php">News</a></li>
        </ul>

        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </div>

    <!-- ? information about migration -->
    <div class="container migration-banner-container">
        <h1>Information for Migrants</h1>
        <div class="backdrop"></div>
    </div>

    <div class="container about-project-container">
        <div class="inner-cont" data-cont="1">
            <div class="details">
                <h1>About the Project</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem dicta eius id corrupti temporibus. Aliquid vel adipisci quasi ipsa perferendis laudantium ipsam perspiciatis! Laboriosam fugit quidem ex magni corporis velit consequuntur dignissimos provident earum! Laudantium corporis reprehenderit molestias, accusantium, dolor eligendi eaque et aperiam, sit cum id odit veniam dolore odio placeat ullam soluta. Provident, dolorem. Atque soluta fugiat unde suscipit. Ipsa officia, id cumque nobis hic obcaecati tenetur soluta.</p>
            </div>
            <div style="background-image: url(../IMGs/project.jpg);" class="img-cont"></div>
        </div>  
    </div>

    <div class="container five-steps-container">
        <div>
            <h1>The 5 steps of the process</h1>
            <div class="steps">
                <div class="step">
                    <div><button class="expand"><i class="fa-sharp fa-solid fa-check"></i></button><h3>Fill out Pre-Assessment form</h3></div>
                    <div class="p-content"><p>Fill out a Pre-Assessment form on our website. Based on your information, we will send you an email regarding your eligibility.</p></div>
                </div>

                <div class="step">
                    <div><button class="expand"><i class="fa-sharp fa-solid fa-check"></i></button><h3>Book Consultation</h3></div>
                    <div class="p-content"><p>We offer 30-minute, or 1-hour consultations depending on your profile and needs. You can see the details of our consultation service on our booking page.</p></div>
                </div>

                <div class="step">
                    <div><button class="expand"><i class="fa-sharp fa-solid fa-check"></i></button><h3>Sign Retainer Agreement</h3></div>
                    <div class="p-content"><p>At this step, we agree to work together, and our goal is to plan all stages of your application carefully and in the best way possible to make sure that you reach your immigration goals. We sign the retainer agreement and start working.</p></div>
                </div>

                <div class="step">
                    <div><button class="expand"><i class="fa-sharp fa-solid fa-check"></i></button><h3>Pay Professional Fee Payment</h3></div>
                    <div class="p-content"><p>Usually, the payment is done in 2 installments, the first is upon signing the retainer agreement and the second installment is upon submission of the application.</p></div>
                </div>
                <div class="step">
                    <div><button class="expand"><i class="fa-sharp fa-solid fa-check"></i></button><h3>Start Working Process</h3></div>
                    <div class="p-content"><p>We provide full support through the whole immigration process from preparing every required document until the decision is made on your application.</p></div>
                </div>
            </div>
        </div>

        <div class="img-cont"></div>
    </div>

    <div class="container pre-assessment-container">
        <div>
            <h1>Pre assessment form for immigration</h1>
            <p>
                Since your pre-assessment will be dependent on the information you submit, kindly make sure that it is accurate. Pre-assessment services are not advise or services related to immigration. 
                To further safeguard the confidentiality of the information supplied, please note that this form does not need your complete name, passport information, or residence address.
                If you receive a brief denial reply, it signifies that at this point we do not see any opportunities since we are unable to react in depth to everyone owing to the enormous volume of forms. By scheduling a consultation, you may learn more about the sources of the issue and potential remedies.
            </p>
        </div>

        <form action="" class="assessment-form">
            <label for="format">What country do you wish to Migrate to</label>
            <select name="format" id="format"required>
                <option value="">*Select*</option>
                <option value="">Canada</option>
                <option value="">USA</option>
                <option value="">France</option>
                <option value="">Turkey</option>
                <option value="">Georgia</option>
                <option value="">UK</option>
                <option value="">Germany</option>
            </select>

            <label for="">Name</label>
            <input type="text" placeholder="Your Name" required>

            <label for="">Surname</label>
            <input type="text" placeholder="Your Surname" required>

            <label for="">Email address</label>
            <input type="text" placeholder="Your Email" required>

            <label for="">Select the program you would like to discuss</label>
            <select name="format" id="format" required>
                <option value="">*Select*</option>
                <option value="">Express Entry</option>
                <option value="">PNP</option>
                <option value="">Study</option>
                <option value="">English Courses</option>
                <option value="">Work Permit (in case you have found a job in your desired country) not provided by us</option>
                <option value="">Visitor Visa</option>
            </select >

            <button class="btn btn-primary">Submit</button>
        </form>
    </div>

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
    <script src="../JS/migrationpage.js"></script>
</body>
</html>