<?php
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $email = $_POST["email"];
        $phoneNumber = $_POST["phoneNumber"];
        $message = $_POST["message"];

        $to = $email;
        $subject = $message;

        $message = "Email: {$email} Phone: {$phoneNumber} Message: ". $message;

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: torabinia.t.86@gmail.com';

        $mail = mail($to,$subject,$message,$headers);

        if($mail){
            echo "<script>alert('Mail Sent')</script>";
        }else{
            echo "<script>alert('Mail Not Sent')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../CSS/homepage-header.css">
    <link rel="stylesheet" href="../CSS/Contactuspage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    
    <div class="header">
        <div class="nav-logo">
            <a href="../HTML/homepage.php"><img src="../IMGs/Logo.svg" alt=""></a>
            <h2>DSE College</h2>
        </div>

        <ul class="nav-links">
            <li onclick="window.location='../HTML/homepage.php'" class="nav-link"><a href="../HTML/homepage.php">Home</a></li>
            <li onclick="window.location='../HTML/aboutuspage.php'" class="nav-link"><a href="../HTML/aboutuspage.php">About</a></li>
            <li class="nav-link active"><a href="../HTML/Contactuspage.php">Contact</a></li>
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

    <div class="container contact-us-container">
        <div class="contact-us-left">
            <div class="content">
                <div class="logo-name">
                    <img src="../IMGs/Logo2.svg" alt="">
                    <h2>DSE College</h2>
                </div>
                <p>
                    Learn at the comfort of your 
                    own home.
                </p>
    
                <div class="socials">
                    <div class="social"><i class="fa-brands fa-facebook-f"></i></div>
                    <div class="social"><i class="fa-brands fa-instagram"></i></div>
                    <div class="social"><i class="fa-brands fa-twitter"></i></div>
                    <div class="social"><i class="fa-brands fa-linkedin-in"></i></div>
                </div>
            </div>

            <img class="cloud1" src="../IMGs/cloud1.svg" alt="">
            <img class="cloud2" src="../IMGs/cloud2.svg" alt="">
            <img class="paper-airplane1" src="../IMGs/paper airplane1.svg" alt="">
        </div>

        <div class="contact-us-right">
            <h1>Get In <span style="color: #3f3fbc;">Touch</span></h1>
            <p>Contact us and our team will be there to help you right away.</p>

            <form action="" method="post" autocomplete="off" >
                <div class="wrap">
                    <div class="input-wrap">
                        <input name="name" type="text" class="input" required >
                        <label for="" class="move-up">First Name</label>
                        <label for="" class="icon"><i class="fa-regular fa-user"></i></label>
                    </div>
        
                    <div class="input-wrap">
                        <input name="surname" type="text" class="input" required>
                        <label for="" class="move-up">Last Name</label>
                        <label for="" class="icon"><i class="fa-regular fa-user"></i></label>
                    </div>
                </div>
    
                <div class="input-wrap">
                    <input id="email" name="email" type="text" class="input" required>
                    <label for="" class="move-up">Email</label>
                    <label for="" class="icon"><i class="fa-regular fa-envelope"></i></label>
                </div>
    
                <div class="input-wrap">
                    <input name="phoneNumber" type="text" class="input" required>
                    <label for="" class="move-up">Phone Number</label>
                    <label for="" class="icon"><i class="fa-solid fa-phone"></i></label>
                </div>
    
                <div class="input-wrap">
                    <textarea class="text-area" name="message" id="" cols="30" rows="10" placeholder="Your Message" required></textarea>
                </div>

                <div class="input-wrap">
                    <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
                </div>
                
            </form>
        </div>
    </div>

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
</body>
</html>