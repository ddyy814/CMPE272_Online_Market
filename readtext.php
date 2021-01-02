<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>readContact.php</title>
</head>
<body>
<h1>Contacts</h1>
<div>
    <?php
    //open up the contact file
    $fp = fopen("contacts.txt", "r") or die("error");
    //print a line at a time
    while (!feof($fp)){
        $line = fgets($fp);
        print "$line <br />";
    }
    //close the file
    fclose($fp);
    ?>
</div>
</body>
</html>