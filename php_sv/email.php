
<?php

if(isset($_POST['submit'])){


  $to = "benjawan.janngam@edu.alleskolan.eu";
  $from = $_POST['mail']; //sender email adresstext
  $subject =$_POST['subject'];
  $message = $_POST['message'];
  $headers = "From: " . $from; //Client entered email adresstext


$from = filter_var($from, FILTER_SANITIZE_EMAIL);
$subject = filter_var($from, FILTER_SANITIZE_STRING);
$message = filter_var($message, FILTER_SANITIZE_STRING);

if (!filter_var($email,FILTER_VALIDATE_EMAIL) === false) {
              echo ("Valid email address!");
            } else {
              echo("Unvalid email address!");
            }


  $result = mail($to, $subject, $message, $headers); // send email to arbetsgivare


}
 ?>





<?php
$till = "benjawan.janngam@edu.alleskolan.eu"; //till arbetsgivarens epost
$from = $_POST['from']; // från kundernas input email adress
$subject = $_POST['subject']; // rubrik från kunder
$message = $_POST['message']; //message från kunder
$headers = 'From: '. $from ; //visa längst upp att brevet är skickad från kundens emailadress

if($_POST["message"]) {
  $from = filter_var($from, FILTER_SANITIZE_EMAIL);
  $subject = filter_var($from, FILTER_SANITIZE_STRING);
  $message = filter_var($message, FILTER_SANITIZE_STRING);

  if (!filter_var($from,FILTER_VALIDATE_EMAIL) === false) {
                echo ("Valid email address!");
              } else {
                echo("Invalid email address!");
              }


mail($till, $subject,$message, $headers);
}
?>
