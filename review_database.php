<!DOCTYPE html PBULIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns=http://www.w3.org/1999/xhtml>
<head>
    <title>Search Results</title>
</head>
<body style="font-family: Arial, sana-serif; background-color: #F0E68C">
    
<?php
extract($_POST);

$select = $_POST['select'];
// connect to the database
$conn = mysqli_connect("dylanzhang081454567.ipagemysql.com", "dylan0814", "Victoria4152187810",'hbh');


// build SELECT query
$sql = "SELECT " . $select . " FROM rating_data";


// query hbh database

$result = mysqli_query($conn, $sql)
   


$query = mysqli_query($conn,"SELECT AVG(rating) as AVERAGE from rating_data");
$row = mysqli_fetch_array($query);
$AVERAGE=$row['AVERAGE'];

//$average = mysqli_query($conn,"SELECT AVG(rating) as AVGRATE from rating_data where status=1");

$query = mysqli_query($conn,"SELECT count(rating) as Totalrating from rating_data");
$row = mysqli_fetch_array($query);
$Total_rating=$row['Totalrating'];

//$total = mysqli_query($conn,"SELECT count(rating) as Total from rating_data where status=1");


$query = mysqli_query($conn,"SELECT count(remark) as Totalreview from rating_data");
$row = mysqli_fetch_array($query);
$Total_review=$row['Totalreview'];


//$total_review = mysqli_query($conn,"SELECT count(remark) as Totalreview from rating_data where status=1");

$review = mysqli_query($conn,"SELECT email,rating,remark,productname from rating_data order by date_time desc limit 5");
$rating = mysqli_query($conn,"SELECT count(*) as Total,rating from rating_data group by rating order by rating desc");



?>
<h3 style="color: blue">Search ReviewResults</h3>


<table border="1" cellpadding="3" cellspacing="2" style="background-color: #ADD8E6">
<!--    --><?php
    //fetch each record in result set
    for($counter = 0; $row = mysqli_fetch_row($result); $counter++) {
        print ("<tr>");
        foreach ($row as $key => $value){
            print ("<td>$value</td>");
        }
        print ("</tr>");
    }
    ?>

</table>
<br />Your search yielded<strong>
    <?php
    print("$counter")?> results.<br /><br /></strong>
<h5>Please email comments to
    <a href="mailto:dylan.zhang@sjsu.edu">
        Detail and Associates, Inc. </a>
</h5>

</body>
</html>
