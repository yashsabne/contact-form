
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$to = "yashsabne39@gmail.com";



$txt = "YOu have received mail from " .$name 
."\r\n Email: " .$email ."\r\n
MEssage: ".$message;

if ($email != null) {
    mail($to,$subject,$txt);

}
header('Location:thank.html');

?>