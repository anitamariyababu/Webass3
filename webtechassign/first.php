<!DOCTYPE html>
<html>
<body>
  <?php
    $myfile=fopen("hello1.txt","r") or die("unable to open file!");
    echo
    fread($myfile,filesize("hello1.txt"));
    fclose($myfile);
  ?>

</body>
</html>