<?php

session_start();

if(isset($_SESSION['user_id'])){

    session_unset();
    session_destroy();

    header("location:../index.html");
}


?>