
<!--Funktion som skickar Epost + meddelande beroende på om användaren har ett ok emailadress samt meddelande-->

<?php

//deklarerar Variabler.

$till = "benjawan.janngam@edu.alleskolan.eu"; //till arbetsgivarens epost

$from = $_POST['from']; // från kundernas input email adress

$subject = $_POST['subject']; // rubrik från kunder

$message = $_POST['message']; //message från kunder

$headers = 'From: '. $from ; //visa längst upp att brevet är skickad från kundens emailadress

//Om kappen klickas så Filtreras det användaren skrivit.

if($_POST["message"]) {

  //Email saniteras för att se om det är en äkta emailadress
  $from = filter_var($from, FILTER_SANITIZE_EMAIL);

  //Saniterar Rubriken för att undvika injektioner.
  $subject = filter_var($from, FILTER_SANITIZE_STRING);

  //Saniterar meddelandet för att undvika injektioner.
  $message = filter_var($message, FILTER_SANITIZE_STRING);

//Om Email är korrekt så skickas det och man får ett meddelande att det har skickats.
  if (!filter_var($from,FILTER_VALIDATE_EMAIL) === false) {
                echo '<script>alert("din fråga har skickat✔️")</script>';
                mail($till, $subject, $message, $headers);

                //eller...
              } else {

                //Skickas det inte och man får ett error meddelandet.
                echo '<script>alert("Ogiltig epostadress❌!")</script>';
              }
}
?>
