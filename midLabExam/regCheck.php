<?php
    session_start();

    if(isset($_POST['submit'])){

        $username  =  trim($_REQUEST['username']);
        $password  =  trim($_REQUEST['password']);
        $email     =  trim($_REQUEST['email']);
        $date      =  trim($_REQUEST['date']);
        

        if($username == null || empty($password) || $email == null || $date == null){   
            echo "Null data found!";
            //header('location: reg.html');
        }
        else {
            $_SESSION['flag'] = true;
            header('location: loginCheck.php');
            header('location: login.html');   
        }
    }else{
        //echo "Invalid request!";
        header('location: reg.html');
    }

?>