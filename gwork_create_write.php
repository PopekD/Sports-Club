<?php
$myfile = fopen("uploads/gwork.txt", "a+") or die ("Unable to open the file");
$txt = "Dawid Popek, Group 11";
fwrite($myfile, $txt);
fclose($myfile);
echo "<a href=\"uploads/\">TXT Directory</a> "
?>