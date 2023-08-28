<?php
    
    echo 'Processing..............';

    //Connect to data base
    $conn = mysqli_connect('localhost','root','','ajaxtest');  

    //check for Get Variable
    if(isset($_GET['name'])){
        
        echo"GET: Your name is ".$_GET['name'];
    }

    //check for POST Variable 
    if(isset($_POST['name'])){
        $name = mysqli_real_escape_string($conn, $_POST['name']);

        echo"POST: Your name is added".$_POST['name'];

        $query = "INSERT INTO users(name) VALUES('$name')";

        if (mysqli_query($conn,$query)) {
            echo 'User added';
        }
        else{
            echo 'ERROR: '.mysqli_error($conn);
        }
    }