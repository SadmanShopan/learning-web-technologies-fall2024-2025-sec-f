<?php
    session_start();

    if(isset($_POST['submit'])){

        $email  =  $_REQUEST['email'];
        

        //A. Cannot be empty
        if($email == null){
            echo "Null data found!";
            
            
        }

        // B. Must be a valid email address
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Input must be a valid email address.";
        }
        
        
        else if($email != null){
            echo "Data Submitted succesfully!";
           
        }
        
        else{
            echo "Invalid user";
        }
    }

    else{
        //echo "Invalid request!";
        header('location: email.html');
    }
?>
