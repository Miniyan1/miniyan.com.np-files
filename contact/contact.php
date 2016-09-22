<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

// here we use the php mail function
// to send an email to:
// you@example.com
   $mail=  mail("parajuliminiyan@gmail.com", "Feedback Form Results", $comment, "From: $email");
if($mail){
    echo "Sent ";
}else{
    echo"Oops!! Something went wrong";

}
?>