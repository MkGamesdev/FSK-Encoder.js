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

//$data = str_replace(' ', '+', $_POST['data']);
//$data = base64_decode($data);

//header("Content-Type: audio/x-wav");
//header("Content-Disposition: attachment; filename=".$dateiname);

$filename = './files/'.hash("SHA256", $data).'.fsk.wav';

if(!$handle = fopen($filename, "w"))
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
