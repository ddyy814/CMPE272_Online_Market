<?php
session_start();
$session = session_id();
header('location:http://www.yi-playground.com/?sessid='.$session);
?>