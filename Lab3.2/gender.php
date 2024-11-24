<?php
    session_start();

    if(isset($_POST['submit'])){

        $gender  =  $_REQUEST['gender'];
        
        
        // Check if the gender field is set
        if (!empty($_POST['gender'])) {
            echo "You selected the gender " . $gender ;
        } 

        //if no gender is selected
        else if (empty($_POST['gender'])) {
            echo "Error.Please select a gender." ;
        }
        
        else {
            echo "Error: Invalid user.";
        }
    }

    else{
        //echo "Invalid request!";
        header('location: gender.html');
    }
?>

