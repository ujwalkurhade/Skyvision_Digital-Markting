<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */


$name =$_REQUEST['name'];
$name =$_REQUEST['email'];
$name =$_REQUEST['subject'];
$name =$_REQUEST['message'];

if(empty($name) || empty($email) || empty($message))
{
  echo "Please fill all the fields";
}
else
{
  mail("ujwalkurhade05@gmail.com", "Skyvision Digital",$subject,$message,"From:$name<$email>");
  echo"<script type='text/javascript'>alter('Your message Sent Successfully!');
  windo.history.log(-1);
  </script>";
}

?>
