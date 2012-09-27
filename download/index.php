<?php
$data = $_POST['data'];
$clienttime = $_POST['time'];

if(($data == '')||($clienttime == ''))
  {
    print "Error 1";
    exit;
  }

if(!$data = file_get_contents($data))
  {
    print "Error 2";
    exit;
  }

$filename = './files/'.hash("SHA256", $data).'.fsk.wav';

if(!$handle = fopen('./../'.$filename, "w"))
  {
    print "Error 3";
    exit;
  }
else
  {
    if(!fwrite($handle, $data))
      {
        print "Error 4";
        exit;
      }
    
    fclose($handle);
    echo $filename;
  }

?>
