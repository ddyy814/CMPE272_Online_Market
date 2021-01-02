
<!doctype html>
<html lang="en">
  <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Top rated products</title>
</head>
<body>
      <div class="container">
    <h3>Top rated products in Yi's company</h3>
    <div>
        <?php
    $ch = curl_init('http://www.yi-playground.com/products/myTop5Rating.php');
    curl_setopt($ch, CURLOPT_URL);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $contents = curl_exec ($ch);
    curl_close ($ch);

    foreach(explode('\t', $contents) as $content){
        echo $content."<br/>";
    }
    ?>
    </div>

    <h3>Top rated products in Dylan's company</h3>
    <div>
        <?php
    $ch = curl_init('http://dzaivc.com/top5rating.php');
    curl_setopt($ch, CURLOPT_URL);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $contents = curl_exec ($ch);
    curl_close ($ch);

    foreach(explode('\t', $contents) as $content){
        echo $content."<br/>";
    }
    ?>
    </div>

    <h3>Top rated products in Akshya's company</h3>
    <div>
        <?php
    $ch = curl_init('http://www.akshyakrishnan.com/displayTopRated.php');
    curl_setopt($ch, CURLOPT_URL);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $contents = curl_exec ($ch);
    curl_close ($ch);

    echo $contents . "<br/>";
    ?>
    </div>

    <h3>Top rated products in Parul's company</h3>
    <div>
        <?php
    $ch = curl_init('http://www.singhparul.com/products/top5RatedProducts.php');
    curl_setopt($ch, CURLOPT_URL);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $contents = curl_exec ($ch);
    curl_close ($ch);

    echo $contents . "<br/>";
    ?>
    </div>
   <div style="height: 1rem"></div>
   <div class="container"><a class="btn btn-primary" href="https://dzaivc.com/mainhomepage.php">Return to home page</a></div>
</div>
</body>
</html>