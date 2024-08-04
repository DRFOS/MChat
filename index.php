<button>
<?php 
file_get_contents("chat.txt");
?> 
</button>
<form action="obr.php" method="POST">
<input type="text" name="nick">
<textarea name="mess"></textarea>
<input type="submit" value="send">
</form>
