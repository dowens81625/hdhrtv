// Change your settings to those of your MythTV backend
<?php
$server = 'IP ADDRESS';
$mydb = 'mythconverg';
$myuser = 'user';
$mypass = 'password';


 // Connects to Our Database
mysql_connect($server, $myuser, $mypass) or die(mysql_error());
mysql_select_db($mydb) or die(mysql_error());
 ?>
