<?php
    session_start();

    if(isset($_POST['submit'])){

        $bloodGroup  =  $_REQUEST['options'];
        

        if (!empty($_POST['options'])) {
            echo "You selected the Blood Group. ";
        }
        else {
            echo "Error: No data found.";
        }
        
    }

    else{
        //echo "Invalid request!";
        header('location: bloodGroup.html');
    }
?>

