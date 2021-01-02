<?php
include ('reviewserver.php');

    $sql = "SELECT productname, AVG(rating) as AVERAGE from rating_data group by productname order by AVERAGE desc limit 5";

    if(!($result = mysqli_query($conn, $sql))){
        print("Could not execute query! <br />");
    }
                for($counter = 0; $row = mysqli_fetch_row($result); $counter++) {
                    foreach ($row as $key => $value){
                        print ("$value");
                        print("\n");
                    }
            }
?>