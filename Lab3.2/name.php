<?php
    session_start();

    if(isset($_POST['submit'])){

        $name  =  $_REQUEST['name'];
        

        //A. Cannot be empty

        if($name == null){
            echo "Null data found!";
            //header('location: name.html');
            
        }

        //B. Contains at least two words

        else if(str_word_count($name)<2){
            echo "Invelid condition.Less than 2  words.";
            //header('location: name.html');
        }

        //C. Must start with a letter

        else if (!preg_match('/^[a-zA-Z]/', $name)) {
            echo "Input must start with a letter.";
        }

        //D. Can contain a-z, A-Z, period, dash only
        else if (!preg_match('/^[a-zA-Z.\-\s]+$/', $name)) {
            echo "Input can only contain letters, periods, dashes, and spaces.";
        }
        
        else if($name != null){
            echo "Data Submitted succesfully!";
            //header('location: name.html');
        }
        
        else{
            echo "Invalid user";
        }
    }
    
    else{
        //echo "Invalid request!";
        header('location: name.html');
    }


   
?>
