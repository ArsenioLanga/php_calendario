
<?php 
$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];


    $myfile = fopen("txtfile.txt", "a");

        $myfile = fopen("txtfile.txt", "a") or die("Unable to open file!");
        $txt = $title."\n";
        fwrite($myfile, $txt);
        $txt = $start."\n";
        fwrite($myfile, $txt);
        $txt = $end."\n";
        fwrite($myfile, $txt);
        fclose($myfile);
  ?>


