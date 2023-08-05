<!doctype html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="format-detection" content="telephone=no">
  <!-- <meta name="theme-color" content="#33a16e" /> -->
  <title>CONTACT</title>
  <meta name="author" content="ho">
  <meta name="description" content="">
  <meta name="keywords" content="">


  <!-- FAVICON FILES -->
  <link href="images1/favicon/fav.png" rel="apple-touch-icon" sizes="144x144">
  <link href="images1/favicon/fav.png" rel="apple-touch-icon" sizes="114x114">
  <link href="images1/favicon/fav.png" rel="apple-touch-icon" sizes="72x72">
  <link href="images1/favicon/fav.png" rel="apple-touch-icon">
  <link href="images1/favicon/fav.png" rel="shortcut icon">


  <!-- CSS FILES -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/swiper.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <nav id="nav">
    <div class="navigation-wrap start-header start-style">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="navbar navbar-expand-md navbar-light">

              <a class="navbar-brand" href="/" target="_blank"><img src="images/ESORDIOLOGOblack.png" alt="LOGO"></a>

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto py-4 py-md-0">

                  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                    <a class="nav-link" href="/">Home</a>
                  </li>
                  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="nav-link" href="#about">About</a>
                  </li>

                  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="nav-link" href="projects">Projects</a>
                  </li>
                  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                    <a class="nav-link" href="contact">Contact</a>
                  </li>
                </ul>
              </div>

            </nav>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- php mail start-->
  <?php
// Check if the form is submitted
if (isset($_POST['send'])) {
    // Get form data
    $name = $_POST["userName"];
    $phone = $_POST["userPhone"];
    $email = $_POST["userEmail"];
    $message = $_POST["userMessage"];

    // Validate form data (you can add your own validation logic here)

    // Set up the recipient email address
    $recipient = "ajmalnk10091@gmail.com";

    // Set up the email headers
    $headers = "From: zainbuilders.co <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Compose the email body
    $body = "
        <html>
        <head>
        <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        </style>
        </head>
        <body>
        <h2>Contact Form</h2>
        <table>
            <tr>
                <th>Name</th>
                <td>$name</td>
            </tr>

            <tr>
                <th>Contact Number</th>
                <td>$phone</td>
            </tr>
            <tr>
                <th>Contact Number</th>
                <td>$email</td>
            </tr>
            <tr>
                <th>Message</th>
                <td>$message</td>
            </tr>
        </table>
        </body>
      </html>
    ";

    // Attempt to send the email
    if (mail($recipient, "New Contact Form Submission", $body, $headers)) {
        echo '<script>alert("Thanks for your inquiry. We will contact you shortly.");</script>';
    } else {
        echo '<script>alert("Email sending failed, Try again");</script>';
    }
}
?>
  <!-- php mail end-->

  <div class="pad-div"></div>
  <section>
    <div class="container contact-sections">
      <div class="row">
        <div class="col-md-6 part-1">
          <div class="head">
            <h2>GET IN TOUCH</h2>
          </div>
          <div class="appointments">
            <div class="location-a">
              <span><img src="images/icons/location.svg" alt="Image" class="icon-li"></span>
              <p>Fortune towers,24/2435/c, <br>
                Thondayad, Chevarambalam PO. <br>
                Kozhikode - 673017
                <br>
              </p>
            </div>
            <div class="mail">
              <img src="images/icons/mail.svg" alt="Image" class="icon-li">
              <a href="mailto:info@esordio.in">info@esordio.in</a>
            </div>
            <div>
              <img src="images/icons/telephone.svg" alt="Image" class="icon-li">
              <span><a href="tel:+91 8157 995 577">+91 8157 995 577</a></span>
            </div>
          </div>



        </div>
        <div class="col-md-6 part-2">
          <div class="head-h3">
            <form action="">
              <input type="text" name="userName" placeholder="Name" required>
              <br>
              <input type="number" name="userPhone" placeholder="Number" required>
              <br>
              <input type="email" name="userEmail" placeholder="Email">
              <br>
              <textarea name="userMessage" id="" cols="" rows="5" placeholder="Message"></textarea>
              <br>
              <input type="submit" value="Submit" class="submit">

            </form>
          </div>

        </div>
      </div>
    </div>
  </section>





  <section style="display: none;">
    <div class="agileits-w3layouts-map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15652.015831719982!2d75.7837097!3d11.2611186!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba65956c931d0fd%3A0xa7f288fe7b09c99a!2sS%20G%20Arcade!5e0!3m2!1sen!2sin!4v1680512658109!5m2!1sen!2sin"
        allowfullscreen></iframe>
    </div>
  </section>

  <footer class="footer-a">
    <div class="container">
      <div class="row">
        <div class="col-md-5 footer-logo">
          <img src="images/logo-white.png" alt="Logo" class="img-fluid">
          <div class="icons">
            <span><a href="https://instagram.com/esordio_design_and_developers?igshid=MzNlNGNkZWQ4Mg=="  target="_blank"><img src="images/icons/instagram.svg" alt=""></a></span>
            <span><a href="https://www.threads.net/@esordio_design_and_developers"  target="_blank"><img src="images/icons/threads.png" alt=""></a></span>
            <span><a href=""><img src="images/icons/twitter.svg"   alt=""></a></span>
            <span><a href="https://api.whatsapp.com/send?phone=918157995577"  target="_blank"><img src="images/icons/whatsapp.svg" alt=""></a></span>
          </div>
        </div>
        <div class="col-md-2 footer-div footer-div-li">
          <!-- <ul class="list-unstyled">
            <h5>Quick links</h5>
            <li><a href="/">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="contact">Contact</a></li>
          </ul> -->
        </div>
        <div class="col-md-2 footer-div footer-div-li">
          <!-- <ul class="list-unstyled">
            <h5>Social Media</h5>
            <li><a href="https://www.instagram.com">Instagram</a></li>
            <li><a href="https://www.facebook.com">Facebook</a></li>
            <li><a href="https://www.facebook.com">Whatsapp</a></li>
            <li><a href="https://www.facebook.com">Twitter</a></li>
          </ul> -->
        </div>
        <div class="col-md-3 footer-div">
          <ul class="list-unstyled">
            <h5>Address</h5>
            <div class="footer-address">
              <span>
                <img src="images/icons/location.svg" alt="Image" class="icon-li">
              </span>
              <p class="address-a">
                Fortune towers,24/2435/c, <br>
                Thondayad, Chevarambalam PO. <br>
                Kozhikode - 673017
              </p>
            </div>
            <li class="phone-a">
              <img src="images/icons/telephone.svg" alt="Image" class="icon-li">
              <a href="tel:+918157995577">+91 8157 995 577</a>
            </li>
            <li class="email-a">
              <img src="images/icons/mail.svg" alt="Image" class="icon-li">
              <a href="mailto:info@esordio.in">info@esordio.in</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>








  <!-- JS FILES -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/swiper.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/isotope.min.js"></script>
  <script src="js/tilt.jquery.js"></script>
  <script src="js/jquery.typewriter.js"></script>
  <script src='js/TweenMax.min.js'></script>
  <script src='js/imagesloaded.pkgd.min.js'></script>
  <script src='js/particles.min.js'></script>
  <script src='js/jquery.parallax.min.js'></script>
  <script src='js/motion.blur.js'></script>
  <script src="js/anime.min.js"></script>

  <script src="js/scripts.js"></script>

</body>

</html>