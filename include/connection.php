<?php
    //$connection=mysqli_connect(dbserver,dbuser,dbpass,dbname);
    $connection = mysqli_connect('localhost:3360','test_user','a1b2c3d4','testdb');


    // checking the connection error
    if(mysqli_connect_errno()){
        die('Database connection failed'.mysqli_connect_error());
    }
    else{
        //echo "Connection successfull.";
    }

?>