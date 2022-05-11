

<?php

$subject = "frågor angående tjänsten.";

if($_POST["message"]) {
mail("benjawan.janngam@edu.alleskolan.eu", $subject,
$_POST["message"]);
}
?>


<?php

if(isset($_POST['submit']))
 ?>
