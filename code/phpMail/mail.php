<?php



$to = "ahmedfarouk2008@live.com";
$from = $_POST['email'];

$headers = "From: " . $from . "\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$subject = " Contact Us Form";

$name = $_POST['name'];
$email = $_POST['email'];
$JobTitle = $_POST['JobTitle']; 
$location = $_POST['location']; 
$checkbox = $_POST['checkbox']; 


$body = "<b> Name: </b>". $name . "<br >" .  "<b>Email: </b>" . $email .  "<br >" . "<b>JobTitle: </b>" . $JobTitle . "<br >"  .  "<b>Location: </b>"  . $location . "<br >"  .  "<b>checkbox: </b>"  . $checkbox;






if($_SERVER['REQUEST_METHOD'] == 'POST')
{ 
    if (mail($to, $subject, $body, $headers, "-f " . $from))
    {
       echo "<h2 style='text-align:center; color:#0098c8'>Thank you! <br>   We will be sending you an email shortly!</h2> <img src='../images/logo-green.png' style='margin:0 auto; display:block'>";
        echo "<script>setTimeout(\"location.reload();location.href='../index.html';\",1500);</script>";
        exit;
    }
    else
    {
          echo 'Message could not be sent.';
    }
}
else
{
       echo 'Message could not be sent.';  
}

?>