<?php

session_start();

// initial variables
$email = "";
$rating = "";
$remark = "";
$games = "";

// connect to the database
$conn = mysqli_connect("dylanzhang081454567.ipagemysql.com", "dylan0814", "Victoria4152187810",'hbh');


// register user
if (isset($_POST['user_review'])) {
    // receive all input values from the form
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $rating = mysqli_real_escape_string($conn, $_POST['rating']);
    $remark = mysqli_real_escape_string($conn, $_POST['remark']);
    $games = mysqli_real_escape_string($conn, $_POST['games']);

    // Finally, register user if there are no errors in the form
    // encrypt the password before saving in the database
    $query = "INSERT INTO rating_data (email, rating, remark, productname)
          VALUES('$email', '$rating', '$remark', '$games')";
    mysqli_query($conn, $query);

}

$query = mysqli_query($conn,"SELECT AVG(rating) as AVERAGE from rating_data where productname ='$games'");
$row = mysqli_fetch_array($query);
$AVERAGE=$row['AVERAGE'];


$query = mysqli_query($conn,"SELECT count(rating) as Totalrating from rating_data where productname ='$games'");
$row = mysqli_fetch_array($query);
$Total_rating=$row['Totalrating'];



$query = mysqli_query($conn,"SELECT count(remark) as Totalreview from rating_data where productname ='$games'");
$row = mysqli_fetch_array($query);
$Total_review=$row['Totalreview'];

$review = mysqli_query($conn,"SELECT email,rating,remark,productname from rating_data where productname ='$games' order by date_time desc limit 5");
$rating = mysqli_query($conn,"SELECT count(*) as Total,rating from rating_data where productname ='$games' group by rating order by rating desc");
?>