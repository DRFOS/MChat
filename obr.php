<?php
$mess = "<" . $_POST['nick'] . ">" . $_POST['mess'] . "<br>";
file_put_contents('chat.txt', $mess, FILE_APPEND);
header('Location: index.php');
?>
