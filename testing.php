<?php
session_start();
               $session = session_id();
               echo $session;
               header('location:http://www.akshyakrishnan.com/?sessid='.$session);
?>