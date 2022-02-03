<?php

include "conn.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$msg = $_POST['msg'];

if(!$conn)
{
    ?><script> alert( "data base not connected !"); </script> <?php
}
else
{
    if(!empty($fname) && !empty($lname) && !empty($phone) && !empty($email))
    {
        $sql = mysqli_query($conn, " INSERT INTO `project`( `fname`, `lname`, `phone`, `email`, `msg` ) VALUES ( '$fname' , '$lname' , '$phone' , '$email' , '$msg' ) ");

        if($sql)
        {
            ?><script> alert( " Your request had been added . ") ;  location.href = "index.html"; </script> <?php
        }
        else
        {
            ?><script> alert( "update to databse is not done.");
             location.href = "index.html";
            
             </script> <?php
        }


        
    }
    else
    {
        
        ?><script> alert( "all fields are required"); </script> <?php
        
    }
}



?>