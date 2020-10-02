<?php
        session_start();
      var_export($_POST);
      if(isset($_POST['dologin'])){// isset => เช็คดูว่ามีตัวแปรนี้ไหม ['dologin']=>คือ key

        $name = $_POST['name'];//true เข้า if นี้
        $password = $_POST['password'];
        
        //echo $name." ".$password;
        if($username = "admin" && $password == "1234"){

            $_SESSION['login'] = true;
            header('Location: home.php');
            die();
        }
        else
        {
            header('Location: login.php?login=false');
            die();
        }

      }

?>
// --sessions--
//เมื่อเราล็อกอินไปแล้วเราจะไม่ต้องล็อกอินมันใหม่ พอเราเข้าแท็บอื่น
//ถ้าเราไม่มีsession มันก็ยังสามารถเข้าหน้าhomeเราได้ปกติดังนั้นเราควรมีsessionเอาไว้