<?php

#TASK 1

$filename = 'testfile.txt';
$newfile = fopen($filename,'r+'); // created the new file with the read and write permissions

if (file_exists($filename)) {
    echo "The file $filename exists";
} else {
    echo "The file $filename does not exist";
}

fopen("testfile.txt", "r+"); // opened the file in the read and write mode
fwrite($newfile, "Team 11, Denis Fedulov"); // wrote to the file team name and team members names
fread($newfile, filesize($filename)); // read the file
fclose($newfile); // closed the file

?>