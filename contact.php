<?php 

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    echo "The name entered is : " . $_POST['fname']. "</br>"; 
    echo "The Email entered is : " . $_POST['lname']. "</br>"; 
    echo "The message for Dhruval is : " . $_POST['subject']. "</br>";
    
    
    $to = $_POST['lname'];
    $subject = " Thank you for usinf the page!". $_POST['fname'];
    $txt = $_POST['subject'];
    $headers = "From: youremil@kean.edu";
    mail($to,$subject,$txt,$headers);

}

?>

