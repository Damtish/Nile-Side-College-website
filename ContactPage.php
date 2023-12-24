<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gursha Digitals- Contact</title>
    <link rel="icon" href="pics/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="styles/ContactPage.css">
</head>

<body>
    <button id="scrollToTopButton"><img src="pics/arrow-up-solid.svg" alt=""></button>
    <div class="homepage">
        <div class="logo">
            <img src="images/photo_2023-12-23_17-12-32-removebg-preview.png" alt="">
            <p></p>
        </div>
        <nav class="navbar" id="navbar">

            <input type="checkbox" id="navbar-toggle" class="navbar-toggle">
            <label for="navbar-toggle" class="navbar-toggle-label">
                <span class="navbar-toggle-icon">
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                </span>
            </label>
            <ul class="navbar-menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="service.html">Services</a></li>
                <li><a id="contact" href="ContactPage.php">Contact</a></li>
            </ul>
        </nav>
        <div class="introduction">
            <div class="quote-section">
                <h2>REACH US</h2>
                <p>Near Lideta Square Inside Legehar General Hopsital Building On the 7th and 8th Floor</p>
                <button onclick="window.location.href = '#contactForm';"> SEND A MESSAGE</button>
            </div>
        </div>
    </div>
    <div class="servicepage">
        <div class="service_collection">
            <!-- <div class="digital_marketing services">
                <div class="image-container">
                    <img src="pics/phone-call.png" alt="">
                </div>
                <div class="content">
                    <h5>CALL US</h5>
                    <a href="tel:+251929894864">Call us at +251 92 989 4864 </a>
                </div>

            </div> -->
            <div class="sm_managment services">
                <!-- <div class="image-container">
                    <img src="pics/email.png" alt="">
                </div> -->
                <div class="content">
                    <h2>CALL FOR REGISTRATION</h2>
                    <p>0911147023 <br><br></p>
                    <p>0922465420<br><br></p>
                    <p>0919433321<br><br></p>
                    <a href="mailto:nilesidecollege@gmail.com">Send us an Email ></a>

                </div>

            </div>

            <!-- <div class="boosting services">
                <div class="image-container">
                    <img src="pics/social-media.png" alt="">
                </div>
                <div class="content">
                    <h5>OUR SOCIAL MEDIA</h5>
                    <div class="social-icons">
                        <a href=""><img src="pics/Platform=Facebook, Color=white.svg" alt="Facebook">
                            @GURSHADIGITALS</a>
                        <a href=""><img src="pics/Instagram white.png" alt="Instagram"> @GURSHADIGITALS</a>
                        <a href=""><img src="pics/Platform=LinkedIn, Color=white.png" alt="LinkedIn">@GURSHADIGITALS</a>
                        <a href=""><img src="pics/Platform=Threads, Color=white.png" alt="Threads">@GURSHADIGITALS
                        </a>
                        <a href="">
                            <img src="pics/Platform=Telegram, Color=white.png" alt="Telegram">@GURSHADIGITALS
                        </a>
                    </div>

                </div>

            </div>
 -->


        </div>
    </div>
    <div class="contactform">
        <form method="post" action="send-email.php" id="contactForm">
            <div class="name">
                <label for="name">Full Name </label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="email">
                <label for="email">Email </label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="phone">
                <label for="phone">Phone </label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="subject">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject">
            </div>
            <div class="message">
                <label for="message">Message </label>
                <textarea id="message" required name="message"></textarea>
            </div>
            <button type="submit">SEND MESSAGE</button>
        </form>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.7926580698763!2d38.76064467785033!3d8.991217766574596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b85cef5ab402d%3A0x5df85d306f016ee1!2sXQR8%2BF6J%2C%20Addis%20Ababa!5e0!3m2!1sen!2set!4v1699700863830!5m2!1sen!2set"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <footer class="black-footer">
        <div class="footer-left">
            <img src="pics/URSHA_LOGO-removebg-preview.png" alt="">
            <p class="company-quote">Elevate your brand with digital marketing mastery.</p>
            <p class="phone-number">Phone-1 : 0911147023 <br><br>Phone-2 : 0922465420<br><br>Phone-3 : 0919433321<br><br>Email: nilesidecollege@gmail.com</p>
            <!-- <div class="social-icons">
                <a class="social-container">
                    <img src="pics/Platform=Facebook, Color=Negative.png" alt="Facebook" class="social_image blue">
                    <img src="pics/Platform=Facebook, Color=white.svg" alt="Facebook" class="social_image white">
                </a>
                <a class="social-container">
                    <img src="pics/Platform=Instagram, Color=Negative.png" alt="Instagram" class="social_image blue">
                    <img src="pics/Instagram white.png" alt="Instagram" class="social_image white">
                </a>
                <a class="social-container">
                    <img src="pics/Platform=LinkedIn, Color=Negative.png" alt="LinkedIn" class="social_image blue">
                    <img src="pics/Platform=LinkedIn, Color=white.png" alt="LinkedIn" class="social_image white">
                </a>

                <a class="threads social-container">
                    <img src="pics/Platform=Threads, Color=Negative.png" alt="Threads" class="social_image blue">
                    <img src="pics/Platform=Threads, Color=white.png" alt="Threads" class="social_image white">
                </a>
                <a class="social-container">
                    <img src="pics/Platform=Telegram, Color=Negative.png" alt="Telegram" class="social_image blue">
                    <img src="pics/Platform=Telegram, Color=white.png" alt="Telegram" class="social_image white">
                </a>
                <a class="social-container">
                    <img src="pics/Platform=TikTok, Color=Negative.png" alt="tiktok" class="social_image blue">
                    <img src="pics/Platform=TikTok, Color=white.png" alt="toktok" class="social_image white">
                </a>
            </div> -->
        </div>
        <div class="footer-right">
            <h3 class="quick-links-title">Quick Links</h3>
            <ul class="quick-links">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="service.html">Services</a></li>
                <li><a href="ContactPage.php">Contact</a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p class="copyright">&copy; 2023 NILE SIDE COLLEGE. All rights reserved.</p>
            <p class="company-name">NILE SIDE COLLEGE</p>
        </div>
    </footer>
</body>
<script>
    window.addEventListener('scroll', function () {
        var menu = document.getElementById('navbar');
        var scrollPosition = window.scrollY;

        if (scrollPosition > 450) { // Change the value to the desired scroll position
            menu.classList.add('scrolled');
        } else {
            menu.classList.remove('scrolled');
        }
    });


    window.addEventListener('load', function () {
        var loadingScreen = document.querySelector('.loading-screen');
        loadingScreen.classList.add('hidden');
        document.body.style.overflow = 'auto';
    });

    document.addEventListener("DOMContentLoaded", function () {
        const scrollToTopButton = document.getElementById("scrollToTopButton");

        // Show the button when user scrolls down 100px
        window.addEventListener("scroll", function () {
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                scrollToTopButton.style.display = "block";
            } else {
                scrollToTopButton.style.display = "none";
            }
        });

        // Scroll to the top when the button is clicked
        scrollToTopButton.addEventListener("click", function () {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
        });
    });


    const navbarToggle = document.getElementById('navbar-toggle');
    const navbarToggleLabel = document.querySelector('.navbar-toggle-label');

    navbarToggle.addEventListener('change', function () {
        if (this.checked) {
            navbarToggleLabel.classList.add('active');
        } else {
            navbarToggleLabel.classList.remove('active');
        }
    });
</script>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/SMTP.php';

    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Create a PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings for your email provider
        $mail->isSMTP();
        $mail->Host = 'mail.gurshadigitals.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'mail@gurshadigitals.com';
        $mail->Password = 'o=B?4CkI9*g7'; // Replace with your actual email account password
        $mail->SMTPSecure = 'ssl'; // Use SSL encryption
        $mail->Port = 465; // SMTP port for SSL

        // Set sender and recipient
        $mail->setFrom($email, $name);
        $mail->addAddress('leulzergaw6@gmail.com', 'gursha digitals');

        // Email content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message . '<br>Sent by: ' . $name . '<br>Email: ' . $email . '<br>Phone: ' . $phone;

        // Send the email
        $mail->send();
        echo 'Email has been sent!';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>


</html>