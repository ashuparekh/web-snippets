<?php
 if ($handle = opendir('.')) {
   while (false !== ($file = readdir($handle))) {
          if ($file != "." && $file != "..") {
            $thelist .= '<li><a href="'.$file.'">'.$file.'</a></li>';
          }
       }
  closedir($handle);
  }
?>
<html>
<body bgcolor="green" size="70"> 
<h1>List of files:</h1>

<ul><h1><?php echo $thelist; ?></h1></ul>
</body>
</html>