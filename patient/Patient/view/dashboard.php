 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Features</title>
 </head>
 <body>
    <style>
body {
  font-family: Arial, sans-serif;
  background-color: #f0f0f0;
}

h1 {
  font-size: 36px;
  text-align: center;
  margin-top: 30px;
}

ul {
  list-style: none;
  padding: 0;
  margin: 0;
}
.navbar {
  background-color: #333;
  overflow: hidden;
}

.navbar a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #ddd;
  color: black;
}

.active {
  background-color: #4CAF50;
}

.problem-section {
  background-color: #fff;
  padding: 20px;
  margin-top: 30px;
}

.problem-section h3 {
  font-size: 24px;
  margin-bottom: 10px;
}

.problem-section h4 {
  font-size: 18px;
  margin-top: 5px;
  margin-bottom: 10px;
}

.reservation-section {
  background-color: #fff;
  padding: 20px;
  margin-top: 30px;
}

.reservation-section h3 {
  font-size: 24px;
  margin-bottom: 10px;
}

    </style>
 </body>
 </html>   
    
    <h1>Welcome </h1>

    <link rel="stylesheet" href="dashboard.css"/>
    <div class=navbar>
    <a href="./account">Profile</a>||
    <a href="./doctor">Doctors</a>||
    <a href="./reservation">Reservation</a>||
    <a href="./upload">Upload</a>||
    <a href="./infromation">News and Information</a>||
    <a href="telemedicine.php">Telemedicine</a>||
    <a href="payment.php">Online payment</a>||
    <a href="companies.php">Pharmacy</a>||
    <a href="blood.php">Blood Bank</a>||
    <a href="ward.php">Seat/ Ward Booking</a>||
    <a href="care.php">Nursing and Care</a>||    
    <a href="./account/logout.php">Logout</a>

</div>
<div>
    <ul>
        <?php
        if (isset($problem)) {
            echo "<h3>Your problems that you have submitted</h3>";
            echo "<h3>Your problem is: " . $problem . "</h3>";
            if ($problem == "Fever") {
                echo "<h4>Maybe, you have problems of Dangue/A viral infection or anything</h4>";
            } elseif ($problem == "Cough") {
                echo "<h4>Maybe, you have problems of Asthma or anything</h4>";
            } elseif ($problem == "Headache") {
                echo "<h4>Maybe, you have problems of Migraine or anything</h4>";
            } elseif ($problem == "Stomachache") {
                echo "<h4>Maybe, you have problems of Gastric or anything</h4>";
            } elseif ($problem == "Diarrhea") {
                echo "<h4>Maybe, you have problems of Food Poisoning or anything</h4>";
            } elseif ($problem == "Vomiting") {
                echo "<h4>Maybe, you have problems of Food Poisoning or anything</h4>";
            } elseif ($problem == "Pain") {
                echo "<h4>Maybe, you have problems of Arthritis or anything</h4>";
            } elseif ($problem == "Chest Pain") {
                echo "<h4>Maybe, you have problems of Heart Attack or anything</h4>";
            } elseif ($problem == "Breathing Problem") {
                echo "<h4>Maybe, you have problems of Asthma or anything</h4>";
            } else {
                echo "<h4>Maybe, you have problems of something else</h4>";
            }

            echo "It's recommended to take a reservation with a doctor. "
                // Reservation page link
                . "<a href='./reservation'>Reservation</a>";
        } else {
            echo "";
        }
        ?>
    </ul>
    <!-- Retirve date and time from cookie -->
    <?php
    if (isset($_COOKIE['date']) && isset($_COOKIE['time'])) {
        $date = $_COOKIE['date'];
        $time = $_COOKIE['time'];
        echo "<h3>Your reservation date is: " . $date . "</h3>";
        echo "<h3>Your reservation time is: " . $time . "</h3>";
    } else {
        echo "";
    }
    ?>
</div>

<!-- Footer -->