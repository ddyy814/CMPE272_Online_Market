
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
</head>
<body>
    <h2>Tracking history from Yi's company</h2>
    <div>
<?php
    session_start();
    $session = session_id();
    $ch = curl_init('http://www.yi-playground.com/display.php/?sessid='.$session);
    curl_setopt($ch, CURLOPT_URL);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $contents = curl_exec ($ch);
    curl_close ($ch);
    foreach(explode('\t', $contents) as $content){
        echo $content."<br/>";
    }
    ?>
</div>
<h2>Tracking history from Dylan's company</h2>
<div>
<?php
// Include the history functionality
    include_once('history.php');

// Displaying the contents of history for checking
    $ct = 0;
    foreach($_SESSION['pageadd'] as $pageadd)
    {
        $ct = $ct+1;
        echo 'Page History Entry #'.$ct.' of '.
            count($_SESSION['pageadd']).' is '.$pageadd.'<br>';
    }
    echo '<br>';

    // Include a page to allow destroying the session
    // (for code check purpose)
    echo "<a href=logout.php>Destroy Session</a>";
    ?>
</div>
<h2>Tracking history from Akshya's company</h2>
    <div>
<?php
   session_start();
   $session = session_id();

    $ch = curl_init('http://www.akshyakrishnan.com/displayHistory.php/?sessid='.$session);
    curl_setopt($ch, CURLOPT_URL);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $contents = curl_exec ($ch);
    curl_close ($ch);

   
    foreach(explode('\t', $contents) as $content){
        echo $content."<br/>";
    }
    ?>
</div>
<h2>Tracking history from Parul's company</h2>
    <div>
<?php
    // echo "tracking";
    session_start();
    $session = session_id();
    $ch = curl_init('http://www.singhparul.com/displayHistory.php?sessid='.$session);
    curl_setopt($ch, CURLOPT_URL);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $contents = curl_exec ($ch);
    curl_close ($ch);
    foreach(explode('\t', $contents) as $content){
        echo $content."<br/>";
    }
    ?>
</div>
<div style="height: 1rem"></div>
   <div class="container"><a class="btn btn-primary" href="https://dzaivc.com/mainhomepage.php">Return to home page</a></div>
</body>
</html>