<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Messages</title>
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

        table {
            width: 100%;
            margin: 20px 0;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            overflow-wrap: break-word;
        }

        th {
            background-color: #f2f2f2;
            text-align: left;
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
            .footer-container {
                flex-direction: column;
                align-items: center;
            }
        }

        @media (max-width: 480px) {
            .social-icons {
                justify-content: center;
            }
        }

        .done-button {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            margin-left: 10px;
            border-radius: 3px;
        }

        .done-button:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>
    <header>
        <h1>
            <img src="download-logo-upn-veteran-yogyakarta-png-0.png" alt="Logo"> 
            University Field Booking
        </h1>
        <nav>
            <ul>
                <li><a href="../HOME_ADMIN/home_admin.php">Home</a></li>
                <li><a href="../FIELDS_ADMIN/fields_admin.php">Fields</a></li>
                <li><a href="../CONTACT/contact_dosen.php">Contact</a></li>
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
                <br><p>Admin</p><br>
            </div>
            <a href="../FIELDS_ADMIN/fields_admin.php">Booking Status</a>
            <a href="../LOGIN_ADMIN/logout.php">Logout</a>
        </div>
    </header>
    <section class="container">
        <br><br>
        <h1 style="text-align: center; color: #e74c3c;">Messages</h1>
        <table>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Date</th>
                <th>Status</th>
            </tr>
            <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_fieldbooking";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM tb_contact";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $i = 1;
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $i++ . "</td>
                <td>" . $row["Name"] . "</td>";
                if($row['Status'] == "Pending"){
                echo "<td><a onClick='updateStatus(" . $row['id'] .")' href='mailto:" . $row["Email"] . "'>" . $row["Email"] . "</a></td>";}
                else{
                echo "<td><a href='mailto:" . $row["Email"] . "'>" . $row["Email"] . "</a></td>";
                };
                echo "<td>" . $row["Subject"] . "</td>
                <td>" . $row["Message"] . "</td>
                <td>" . $row["Date"] . "</td>";
              if($row["Status"]=="In Progress"){
              echo "<td id='status-" . $row["id"] . "'>" . $row["Status"] . "<button class='done-button' onClick='updateDoneStatus(". $row['id'] .")'>Done</button></td>";
              } else {
                echo "<td id='status-" . $row["id"] . "'>" . $row["Status"] . "</td>";
              }
              echo "</tr>";
    }
} else {
    echo "<tr><td colspan='7'>No messages found</td></tr>";
}

$conn->close();
?>
        </table>
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
</body>
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

    function updateStatus(id) {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "update_status.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                document.getElementById('status-' + id).innerText = 'In Progress';
                document.getElementById('status-' + id).innerHTML += '<button class="done-button" onClick="updateDoneStatus(' + id + ')">Done</button>';
            }
        };
        xhr.send("id=" + id + "&status=In Progress");
    }

    function updateDoneStatus(id) {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "update_status.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                document.getElementById('status-' + id).innerText = 'Done';
            }
        };
        xhr.send("id=" + id + "&status=Done");
    }
</script>
</html>