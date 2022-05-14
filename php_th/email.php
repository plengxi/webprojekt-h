

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
                echo '<script>alert("din fråga har skickat✔️")</script>';
                mail($till, $subject,$message, $headers);
              } else {

                echo '<script>alert("Ogiltig epostadress❌!")</script>';
              }
}
?>
