<?php
    session_start();

    if(isset($_POST['submit'])){

        $degree  =  $_REQUEST['options'];

        // Check if at least two checkboxes are selected
        if (!empty($_POST['options']) && count($_POST['options']) >= 2) {
            echo "You selected the degrees. ";
        }
        else {
            echo "Error: You must select at least two options.";
        }
        
    }

    else{
        //echo "Invalid request!";
        header('location: degree.html');
    }
?>

