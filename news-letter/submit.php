<?php
$servername = "localhost";
$username = "campaigns";
$password = "Ce&S*17v!KaMf";
$dbname = "campaigns";
 
$conn = new mysqli($servername,
$username, $password, $dbname);
 
if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
}
   
$name     = $_POST['name']; // varchar
$email          = $_POST['email']; // varchar
$mobile        = $_POST['mobile'];
$city        = $_POST['city'];
$date = new DateTime(null, new DateTimeZone(date_default_timezone_get()));
$date->setTimeZone(new DateTimeZone('Asia/Kolkata'));
$date = $date->format('Y-m-d H:i:s');
$created_date = $date;
 $query = "INSERT INTO pt_users(name, email, mobile, city, campaign_name, created_date) VALUES('$name', '$email', '$mobile', '$city','healthzine_subscription','$created_date')";
 
if ($conn->query($query) === TRUE) {
    //$successMessage = "Record submitted successfully!";
    
    // Set session variable to hold the success message
   // session_start();
	//$_SESSION['successMessage'] = $successMessage;
    header("Location: http://localhost/news-letter/thank-you.html");
   // echo "record inserted successfully";
} 