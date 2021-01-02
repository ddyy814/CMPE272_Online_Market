<?php
/**
 * Created by PhpStorm.
 * User: dz
 * Date: 2020-11-19
 * Time: 11:28
 */
session_start();


// initial variables
$username = "";
$email = "";
$address = "";
$homephone = "";
$cellphone = "";
$errors = array();


// connect to the database
$conn = mysqli_connect("dylanzhang081454567.ipagemysql.com", "dylan0814", "Victoria4152187810",'hbh');


// register user
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username   = mysqli_real_escape_string($conn, $_POST['username']);
    $email      = mysqli_real_escape_string($conn, $_POST['email']);
    $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
    $address    = mysqli_real_escape_string($conn, $_POST['address']);
    $homephone  = mysqli_real_escape_string($conn, $_POST['homephone']);
    $cellphone  = mysqli_real_escape_string($conn, $_POST['cellphone']);

    // form validation: ensure that the form is correctly filled
    // by adding (array_push() corresponding error unto $errors array
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password_1)) {
        array_push($errors, "Password is required");
    }
//    if(empty($address)) {array_push($errors, "Address is required");}
//    if(empty($homephone)) {array_push($errors, "Home phone is required");}
//    if(empty($cellphone)) {array_push($errors, "Cell phone is required");}
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }

    // first check the database to make sure
    // a user does not already exist with the same username and or email
    $user_check_query = "SELECT * FROM user_info WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user['username'] === $username) {
            array_push($errors, "Username already exists");
        }
        if ($user['email'] === $email) {
            array_push($errors, "Email already exists");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1);    // encrypt the password before saving in the database
        $query    = "INSERT INTO user_info (username, email, password, address, homephone, cellphone)
          VALUES('$username', '$email', '$password', '$address', '$homephone', '$cellphone')";

        mysqli_query($conn, $query);
        $_SESSION['username'] = $username;
        //   $_SESSION['success'] = 'You are now logged in.';
        header('location: registerhome.php');
    }


}

// login user

if (isset($_POST['login_user'])){
    $username = mysqli_escape_string($conn, $_POST['username']);
    $password = mysqli_escape_string($conn, $_POST['password']);

    if(empty($username)){
        array_push($errors, "Username is required");
    }
    if(empty($password)){
        array_push($errors, "Password is required");
    }

    if(count($errors) == 0){
        $password = md5($password);
        $query = "SELECT * FROM user_info WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) == 1){
            $_SESSION['username'] = $username;
            header('refresh:3; https://dzaivc.com/user');
        }else{
            array_push($errors, "Wrong username/password combination");
        }
    }
}

?>