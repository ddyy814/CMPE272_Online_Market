<?php include ('serverformainpage.php')
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Online Market Registration Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style>
	body {
		color: #fff;
		background: #eaf6ff;
		font-family: 'Roboto', sans-serif;
	}
    .form-control{
		height: 40px;
		box-shadow: none;
		color: #969fa4;
	}
	.form-control:focus{
		border-color: #5cb85c;
	}
    .form-control, .btn{        
        border-radius: 3px;
    }
	.signup-form{
		width: 400px;
		margin: 0 auto;
		padding: 30px 0;
	}
	.signup-form h2{
		color: #636363;
        margin: 0 0 15px;
		position: relative;
		text-align: center;
    }
	.signup-form h2:before, .signup-form h2:after{
		content: "";
		height: 2px;
		width: 30%;
		background: #d4d4d4;
		position: absolute;
		top: 50%;
		z-index: 2;
	}	
	.signup-form h2:before{
		left: 0;
	}
	.signup-form h2:after{
		right: 0;
	}
    .signup-form .hint-text{
		color: #999;
		margin-bottom: 30px;
		text-align: center;
	}
    .signup-form form{
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form .form-group{
		margin-bottom: 20px;
	}
	.signup-form input[type="checkbox"]{
		margin-top: 3px;
	}
	.signup-form .btn{        
        font-size: 16px;
        font-weight: bold;		
		min-width: 140px;
        outline: none !important;
    }
	.signup-form .row div:first-child{
		padding-right: 10px;
	}
	.signup-form .row div:last-child{
		padding-left: 10px;
	}    	
    .signup-form a{
		color: #fff;
		text-decoration: underline;
	}
    .signup-form a:hover{
		text-decoration: none;
	}
	.signup-form form a{
		color: #5cb85c;
		text-decoration: none;
	}	
	.signup-form form a:hover{
		text-decoration: underline;
	}  
</style>
</head>
<body>
<div class="signup-form">
		<h2>Register</h2>
		<p class="hint-text">Create your account. It's free and only takes a minute.</p>
		<form method="post" action="signinformainpage.php">
        <div class="form-group">
			<div class="row">
				<div class="col-xs-6">
				<input type="text" class="form-control" name="firstname" placeholder="First Name" required="required">
				</div>
				<div class="col-xs-6">
				<input type="text" class="form-control" name="lastname" placeholder="Last Name" required="required">
				</div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="text" class="form-control" name="username" placeholder="Username" required="required">
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
               <?php include ('errors.php'); ?>
		<div class="form-group">
            <input type="password" class="form-control" name="password_1" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password_2" placeholder="Confirm Password" required="required">
        </div>        
        <div class="form-group">
        	<input type="text" class="form-control" name="address" placeholder="Address">
        </div>
        <div class="form-group">
        	<input type="text" class="form-control" name="homephone" placeholder="Home Phone">
        </div>
        <span style="font-size: 10pt">
                    <h6 style="color: #ff4511;">*Must be in the form 555-555-5555</h6>
        </span>
        <div class="form-group">
        	<input type="text" class="form-control" name="cellphone" placeholder="Cell Phone">
        </div>
        <span style="font-size: 10pt">
                    <h6 style="color: #ff4511;">*Must be in the form 555-555-5555</h6>
        </span>
		<div class="form-group">
            <button type="submit" name="reg_user" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
    </form>
</div>
</body>
</html>