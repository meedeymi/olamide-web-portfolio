<?php
if(isset($_POST['btn btn2'])){
    $name=$_POST['user_name'];
    $email=$_POST['user_email'];
    $subject=$_POST['user_subject'];
    $msg=$_POST['user_msg'];
    $to="olamidemini@gmail.com";
    $header="from:@email";
    if(mail($to,$subject,$msg,$header)){
        $msg1="Message submitted successfully";

    }
    

}



?>