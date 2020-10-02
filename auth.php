<?php

    session_start();
    //ถ้าเกิดว่ามันไม่มีsession uernameจะทำการredirect ไปที่หน้า login

    if(!isset($_SESSION['username'])){
        header("Location: login.php");
        exit();
    }

?>