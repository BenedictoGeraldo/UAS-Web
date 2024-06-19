<?php
 session_start(); 
 if (!isset($_SESSION['username'])) {
     header("Location: ../LOGIN/index.php"); 
     exit();
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Field Booking</title>
    <style>
       
       * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: 'Open Sans', sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        body {
            display: flex;
            flex-direction: column;
            font-family: 'Open Sans', sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background: #333;
            color: #e74c3c;
            padding: 10px 0;
            position: relative;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 30px;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            transform: translateX(-27px);
        }

        header h1 img {
            margin-right: 15px;
            width: 50px;
            height: auto;
        }

        header nav ul {
            list-style: none;
            padding: 0;
            margin: 10px 0 0;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        header nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
            transition: background 0.3s, color 0.3s;
        }

        header nav ul li a:hover {
            background: #34495e;
            border-radius: 5px;
            color: #fff;
        }

        .profile-icon-wrapper {
            position: absolute;
            margin-right: 40px;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            width: 43px;
            height: 43px;
            cursor: pointer;
            border-radius: 50%;
            overflow: hidden;
            background-color: #fff;
            border: 2px solid #333;
        }

        .profile-icon-wrapper svg {
            width: 100%;
            height: 100%;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            top: 80px; 
            right: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            overflow: hidden;
            z-index: 1000;
            width: 200px; 
        }

        .dropdown-menu .user-info {
            padding: 10px 20px;
            text-align: left; 
        }


        .dropdown-menu.show {
            display: inline-block;
        }

        .dropdown-menu a {
            display: block;
            padding: 15px 20px;
            color: #333;
            text-decoration: none;
            font-size: 16px;
        }

        .dropdown-menu a:hover {
            background-color: #f4f4f4;
        }

        .container {
            width: 80%;
            margin: auto;
            flex: 1;
        }

        main {
            padding: 0;
            flex: 1;
        }
        .container h1 {
            font-size: 24px;
            color: #e74c3c; 
            text-align: center;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .contact-info {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 20px;
            margin-bottom: 20px;
        }

        .contact-info div {
            background-color: #fff;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .contact-info h2 {
            margin-bottom: 5px;
            color: #e74c3c; 
            font-size: 16px;
        }

        .contact-info p {
            margin: 0;
            font-size: 12px;
        }

        .contact-form {
            display: flex;
            justify-content: center;
        }

        .contact-form form {
            width: 100%;
        }

        .contact-form .form-group {
            display: flex;
            gap: 10px;
            width: 100%;
        }

        .contact-form input, .contact-form textarea, .contact-form button {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }

        .contact-form input.half-width {
            width: calc(50% - 5px);
        }

        .contact-form textarea {
            height: 150px; 
        }

        .contact-form button {
            background-color: #e74c3c; 
            color: #fff;
            border: none;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #e74c3c;
            color: white;
        }
       
        footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            font-size: 12px;
        }

        .footer-container {
            display: flex;
            justify-content: space-around;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .footer-info {
            flex: 1;
            max-width: 300px;
            text-align: left;
            padding: 10px;
        }

        .footer-info h3, .social h3 {
            margin-bottom: 5px;
            color: #e74c3c;
            font-size: 14px;
        }

        .footer-info p {
            margin: 0;
            font-size: 12px;
        }

        .social {
            flex: 1;
            max-width: 300px;
            text-align: left;
            padding: 10px;
        }

        .social h3 {
            margin-bottom: 5px;
            color: #e74c3c;
            font-size: 14px;
        }

        .social-icons {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .social-icons a {
            display: block;
        }

        .social-icons img {
            width: 20px;
            height: 20px;
            margin-top: 2px;
        }

        @media (max-width: 768px) {
            .contact-info {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .social-icons {
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <?php
    if (isset($_SESSION['message_sent'])) {
        if ($_SESSION['message_sent'] === true) {
            echo '<script>alert("Message sent successfully!");</script>';
        } else {
            echo '<script>alert("There was an error sending your message. Please try again.");</script>';
        }
        unset($_SESSION['message_sent']); // Hapus status setelah digunakan
    }
    ?>
    <header>
        <h1>
            <img src="download-logo-upn-veteran-yogyakarta-png-0.png" alt="Logo"> 
            University Field Booking
        </h1>
        <nav>
            <ul>
                <li><a href="../HOME/home.php">Home</a></li>
                <li><a href="../FIELDS/fields.php">Fields</a></li>
                <li><a href="../STATUS/status.php">Status</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <div class="profile-icon-wrapper" onclick="toggleDropdown()">
            <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                <circle cx="32" cy="20" r="12" fill="#333" /> 
                <path d="M32 36c-10 0-20 6-20 16h40c0-10-10-16-20-16z" fill="#333" /> 
            </svg>
        </div>
        <div class="dropdown-menu">
            <div class="user-info">
                <br><p><strong><?php echo $_SESSION['fullname']; ?></strong></p><br>
            </div>
            <a href="../STATUS/status.php">Booking Status</a>
            <a href="../LOGIN/logout.php">Logout</a>
        </div>
    </header>
    <section class="contact">
        <div class="container">
            <div class="title">
                <h1>Need Help? Contact Us</h1>
            </div>
            <div class="contact-info">
                <div class="address">
                    <h2>Our Address</h2>
                    <p>Depok, Indonesia</p>
                </div>
                <div class="email">
                    <h2>Email Us</h2>
                    <p>lapanganupnvj@gmail.com</p>
                </div>
                <div class="phone">
                    <h2>Call Us</h2>
                    <p>+62 21 5555 6666</p>
                </div>
                <div class="hours">
                    <h2>Working Hours</h2>
                    <p>Mon - Fri: 9AM - 5PM</p>
                </div>
            </div>
            <div class="contact-form">
                <form action="add_contact.php" method="post">
                    <div class="form-group">
                        <input type="text" class="half-width" name="name" placeholder="Your Name" required>
                        <input type="email" class="half-width" name="email" placeholder="Your Email" required>
                    </div>
                    <input type="text" name="subject" placeholder="Subject" required>
                    <textarea name="message" placeholder="Message" required></textarea>
                    <button type="submit">Send Message</button>
                </form>
            </div>
        </div>
    </section>
    
    <footer>
        <div class="footer-container">
            <div class="footer-info">
                <h3>Address</h3>
                <p>Depok, Indonesia</p>
            </div>
            <div class="footer-info">
                <h3>Reservations</h3>
                <p>lapanganupnvj.com</p>
            </div>
            <div class="footer-info">
                <h3>Opening Hours</h3>
                <p>Monday - Saturday: 11AM - 23PM<br>Sunday: Closed</p>
           

            </div>
            <div class="social">
                <h3>Follow Us</h3>
                <div class="social-icons">
                    <a href="https://www.facebook.com/share/sSobmHyUH2frYSCi/?mibextid=qi2Omga"><img src="facebook-icon.png" alt="Facebook"></a>
                    <a href="https://x.com/UPNVJakarta?s=09"><img src="twitter-icon.png" alt="Twitter"></a>
                    <a href="https://www.instagram.com/upnveteranjakarta?igsh=MTk1anRxanMyODZqdw=="><img src="instagram-icon.png" alt="Instagram"></a>
                </div>
            </div>
        </div>
    </footer>
    
    <script>
    function toggleDropdown() {
        const dropdownMenu = document.querySelector('.dropdown-menu');
        dropdownMenu.classList.toggle('show');
    }

    document.addEventListener('click', function(event) {
        const profileIconWrapper = document.querySelector('.profile-icon-wrapper');
        const dropdownMenu = document.querySelector('.dropdown-menu');

        if (!profileIconWrapper.contains(event.target)) {
            dropdownMenu.classList.remove('show');
        }
    });
</script>
</body>
</html>