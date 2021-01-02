<?php
include ('reviewserver.php');

?>
<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='https://raw.githubusercontent.com/kartik-v/bootstrap-star-rating/master/css/star-rating.min.css'>
</head>

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
<body>
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
                    <h4><?=$db_review['productname'];?><br /><?=$db_review['rating'];?> <i class="fa fa-star" data-rating="2" style="font-size:20px;color:green;"></i> by <span style="font-size:18px;"><?=$db_review['email'];?></span></h4>
                    <p style="font-size:18px;"><?=$db_review['remark'];?></p>
                    <hr>
                    <?php
                }

                ?>
            </div>
        </div>
        </div>
    </div><br>
            <!-- <form method="post" action="test.php">
                <div class="col-md-4 ">
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
                        <input type="email" class="form-control" name="email" placeholder="Enter email" >
                    </div><br />
                    <textarea class="form-control" name="remark" rows="5" placeholder="Write your review here..." required></textarea>
                    <br>
                    <button type="submit" class="btn" name="user_review" value="Review">Submit</button>
                </div>
            </form> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/index.js"></script>

</body>
</html>