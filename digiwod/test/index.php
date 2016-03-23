<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>CoS Logs</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
That was one.
<?php
         function direcho($path) {
                 if ($dir = opendir($path)) {
                     while (false !== ($file = readdir($dir))){
                         if (is_dir($path.$file)) {                    // if it's a dir, check it's contents too
                             if ($file != '.' && $file != '..') {      // ...but dont go recursive on '.' and '..'
                                 echo '<li><b><a href=\'' . $file . '\'>$file</a></b></li><ul>';
                                 direcho($path.$file); // This is a feature that surprised me, it IS possible to call
                                                       // the function itself from inside that function.
                                 echo '</ul>';
                             }
                             else {  //if it IS '.' or '..' , just output.
                                 echo '<li><b>' . $file . '</b></li>';
                             }
                         }
                         else {  //if it's not a dir, just output.
                             echo '<li><a href=\' '. $file .' \'>'. $file .'</a></li>';
                         }
                     }
                     closedir($dir);
                 }
         }
direcho('/www/webroot/DigiChat/DigiClasses/Resources/Default/Logs/'); // somehow only the absolute path ('/home/yourhomedir/public_html/testdir/') worked for me...

?>
</body>
</html>
