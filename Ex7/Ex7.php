<?php
$text = $_POST['text'];
$file = fopen("file.txt","at");
fwrite($file,"\n $text; \n");
fclose($file);
?>