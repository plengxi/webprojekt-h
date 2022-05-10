

<?php

$subject = "frågor angående tjänsten.";

if($_POST["message"]) {
mail("benjawan.janngam@edu.alleskolan.eu", $subject,
$_POST["message"]);
}
?>


<?php
//$to = "benjawan.janngam@edu.alleskolan.eu";
//$subject =$_POST['header'];
//$header = "from: ".$_POST['name']."Email : ".$_POST['mail']";
//$messages .= $_POST['text']. "<br>";
//$messages .= "From" .$_POST['sender']. "<br>";

//$send_mail = mail($to, $subject, $messages, $header);<br>
 ?>
