<?php
include ('reviewserver.php');
include_once('history.php');

$cookies_name = "ACV";
setcookie($cookies_name, time(), time() + 60 * 60 * 24 * 5);
$cookies_acv = "CountACV";
setcookie($cookies_acv, time(),time() + 60 * 60 * 24 * 5);
if(!isset($_COOKIE['CountACV'])){
    setcookie($cookies_acv, time(),time() + 60 * 60 * 24 * 5);
}else{
    setcookie($cookies_acv, $_COOKIE['CountACV'] + 1, time(), time() + 60 * 60 * 24 * 5);
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Starter Template · Bootstrap</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='https://raw.githubusercontent.com/kartik-v/bootstrap-star-rating/master/css/star-rating.min.css'>

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <style>
      .star-rating{
        font-size: 0;
    }
    .star-rating__wrap{
        display: inline-block;
        font-size: 2rem;
    }
    .star-rating__wrap:after{
        content: "";
        display: table;
        clear: both;
    }
    .star-rating__ico{
        float: right;
        padding-left: 2px;
        cursor: pointer;
        color: #FFB300;
    }
    .star-rating__ico:last-child{
        padding-left: 0;
    }
    .star-rating__input{
        display: none;
    }
    .star-rating__ico:hover:before,
    .star-rating__ico:hover ~ .star-rating__ico:before,
    .star-rating__input:checked ~ .star-rating__ico:before
    {
        content: "\f005";
    }

    </style>
    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="regist_form.php"></a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <button name="submit" class="btn btn-secondary my-2 my-sm-0" type="submit">Login</button>
    </form>
  </div>
</nav>
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="cart-block">
        <form action="cart/updat" method="post">
           <table cellpadding="6" cellspacing="1" style="width: 100%" border="0">
             <tr>
               <th style="font-size: 12pt;">QTY</th>
               <th style="font-size: 12pt;">Item Description</th>
               <th style="text-align: right; font-size: 12pt;">Item Price</th>
             </tr>
             <tr>
               <td></td>
               <td class="right"><strong style="font-size: 12pt;">Total</strong></td>
               <td class="right" style="text-align: right; font-size: 12pt;">$</td>
             </tr>
           </table>
           <br>
           <p><button class="btn btn-default" type="submit">Updata Cart</button>
            <a class="btn btn-default" href="cart">Go To Cart</a></p>
        </form>
      </div>

      <div class="panel panel-default panel-list">
        <div class="panel-heading panel-heading-dark">
          <h3 class="panel-title">Most Popular</h3>
      </div>
      <!-- List group -->
      <ul class="list-group">
        <li class="list-group-item" style="font-size: 18pt;"><a href="#">PlayStation 5</a></li>
        <li class="list-group-item" style="font-size: 18pt;"><a href="#">Xbox Series X</a></li>
        <li class="list-group-item" style="font-size: 18pt;"><a href="#">Nintendo Switch</a></li>
      </ul>
    </div>
    <br>
    <!-- <div class="panel panel-default panel-list">
        <div class="panel-heading">
        <h3 class="panel-title">Most Popular</h3>
      </div> -->
      <!-- List group -->
      <!-- <ul class="list-group">
        <li class="list-group-item"><a href="#">PlayStation 5</a></li>
        <li class="list-group-item"><a href="#">Xbox Series X</a></li>
        <li class="list-group-item"><a href="#">Nintendo Switch</a></li>
      </ul>
    </div>  -->


  </div>
  <!-- games list -->
    <div class="col-lg-8">
    <div class="panel panel-default">
      <div class="panel-heading panel-heading-green">
        <h3 class="panel-title" style="color: black">The GamingPlace</h3>
      </div>
      <div class="panel-body">
        <div class="row details">
          <div class="col-md-4">
            <img style="margin-left: 10pt; height: 190pt; width: 140pt;" src="http://dzaivc.com/Ass.jpg" alt="ACV"></div>
            <div class="col-md-8">
            <h3 style="font-size: 18pt">Assassin's Creed Valhalla</h3>
            <div class="details-price">
              $69.99
            </div>
             <div class="details-description" style="font-size: 13pt;"> 
               <p>The iconic Black Ops series is back with Call of Duty®: Black Ops Cold War - the direct sequel to the original and fan-favorite Call of Duty®: Black Ops. Black Ops Cold War will drop fans into the depths of the Cold War’s volatile geopolitical battle of the early 1980s.</p>
             </div>

            <div class="details-buy">
              <form>
                <button style="font-size: 12pt;" type="submit" name="buy_submit" class="btn btn-primary">Add To Cart</button>
              </form>
            </div>
          </div>
    </div>  
  </div>
</div>
</div>
<div class="row container">
    <div class="col-md-4 ">
        <h3><b style="font-size: 20pt;">Rating & Reviews</b></h3>
        <div class="row">
            <div class="col-md-6">
                <h3 align="center"><b style="font-size: 16pt;"><?= round($AVERAGE,1);?></b> <i class="fa fa-star" data-rating="2" style="font-size:20px;color:#ff9f00;"></i></h3>
                <p style="font-size: 10pt;"><?=$Total_review;?> Ratings and <?=$Total_review;?> Reviews</p>
            </div>
            <div class="col-md-6">
                <?php
                while($db_rating= mysqli_fetch_array($rating)){
                    ?>
                    <h4 align="center" style="font-size: 14pt;"><?=$db_rating['rating'];?> <i class="fa fa-star" data-rating="2" style="font-size:18px;color:green;"></i> Total <?=$db_rating['Total'];?></h4>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php
                while($db_review= mysqli_fetch_array($review)){
                    ?>
                    <h4><?=$db_review['productname'];?><br /><?=$db_review['rating'];?> <i class="fa fa-star" data-rating="2" style="font-size:15px;color:green;"></i> by <span style="font-size:13px;"><?=$db_review['email'];?></span></h4>
                    <p style="font-size:18px;"><?=$db_review['remark'];?></p>
                    <hr>
                    <?php
                }

                ?>
            </div>
        </div>
        </div>
    </div><br>
    <form style="width: 500px;" method="post" action="product_Ass.php">
                <div class="col-lg-12 ">
                    <div class="star-rating">
                        <div class="star-rating__wrap">
                            <input class="star-rating__input" id="star-rating-5" type="radio" name="rating" value="5">
                            <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-5" title="5 out of 5 stars"></label>
                            <input class="star-rating__input" id="star-rating-4" type="radio" name="rating" value="4">
                            <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-4" title="4 out of 5 stars"></label>
                            <input class="star-rating__input" id="star-rating-3" type="radio" name="rating" value="3">
                            <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-3" title="3 out of 5 stars"></label>
                            <input class="star-rating__input" id="star-rating-2" type="radio" name="rating" value="2">
                            <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-2" title="2 out of 5 stars"></label>
                            <input class="star-rating__input" id="star-rating-1" type="radio" name="rating" value="1">
                            <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-1" title="1 out of 5 stars"></label>
                        </div>
                    </div>
                    <div>
                      <input type="hidden" name="games" value="Assassin's Creed Valhalla">
                        <input type="email" class="form-control" name="email" placeholder="Enter email" style="font-size:18px;">
                    </div><br />
                    <textarea class="form-control" name="remark" rows="5" style="font-size:18px;" placeholder="Write your review here..." required></textarea>
                    <br>
                    <button style="font-size: 12pt;" type="submit" class="btn" name="user_review" value="Review">Submit</button>
                </div>
            </form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/index.js"></script>

</body>
</html>

