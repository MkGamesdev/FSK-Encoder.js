<?php

Header('X-Powered-By:0xBADCAB1E');
session_save_path($_SERVER['DOCUMENT_ROOT'] . '/phpsessions/sessions');
ini_set('session.gc_probability', 1);
ini_set('session.cookie_domain','.waldherr.eu');
session_name('SessionId');
session_start();
if(isset($_SESSION['visits']))
  {
    ++$_SESSION['visits'];
  }
else
  {
    $_SESSION['visits'] = 1;
    $_SESSION['firstv'] = time();
  }

header("HTTP/1.1 301 Moved Permanently");
header("Location: http://simon.waldherr.eu/#projects");
exit();

?><!DOCTYPE html>
<html>
<head>
</head>
<body><?php
if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
            echo '<a href="./'.$file.'" >'.$file.'</a><br>'."\n";
        }
    }
    closedir($handle);
}
?>
</body></html>