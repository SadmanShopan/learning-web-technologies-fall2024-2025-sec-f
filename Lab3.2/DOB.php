<?php
    session_start();

    if(isset($_POST['submit'])){

        $date  =  $_REQUEST['date'];
        

        //A. Cannot be empty
        if($date == null){
            echo "Null data found!";
        }
        
        else if($date != null){
            echo "Data Submitted succesfully!";   
        }
        
        else{
            echo "Invalid user";
        }
    }

    else{
        //echo "Invalid request!";
        header('location: DOB.html');
    }
?>
