<?php

Header('X-Powered-By:0xBADCAB1E');

?><!DOCTYPE html>
<html>
<head>
</head>
<body><?php

if($handle = opendir('.'))
  {
    while (false !== ($file = readdir($handle)))
      {
        if ($file != "." && $file != ".." && $file != "index.php")
          {
            echo '<a href="./'.$file.'" >'.$file.'</a><br>'."\n";
          }
      }
    closedir($handle);
  }

?>
</body></html>
