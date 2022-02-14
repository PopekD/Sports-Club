
<?php

$myfile = fopen("gwork.txt", "a+") or die ("Unable to open the file");
$txt = "Dawid Popek, Group 11";
fwrite($myfile, $txt);
fread ($myfile, filesize("gwork.txt"));

fclose($myfile);

?>
