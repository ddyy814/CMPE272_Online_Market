<?php
session_start();
$session = session_id();
header('location:http://www.singhparul.com/?sessid='.$session);
?>