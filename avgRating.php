<?php
    $servername="dylanzhang081454567.ipagemysql.com";
    $username="dylan0814";
    $password="Victoria4152187810";
    $dbname = "hbh";
    if (!($conn = mysqli_connect($servername,$username,$password,$dbname)))
        die("Cannot connect to database");

    //productName,AVGrating,ReviewNum
    $result = mysqli_query($conn,"SELECT productname, cast(AVG(rating) as decimal(2,1)) as avg, count(rating) as ReviewNum, email from rating_data group by productname order by avg desc limit 5");

    $products = [];
    $count = 0;
    while ($row = mysqli_fetch_row($result)) {
        array_push($row, "http://dzaivc.com/products/");
            $products[$count] =  $row;
            $count += 1;
    }
        echo json_encode($products);
?>