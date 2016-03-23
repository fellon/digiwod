<?php
session_start();
 
 if ((!$_POST[nickname]) || (!$_POST[password])) {
  header("Location: http://www.willowhaven.org/willowchat/login.php");
  exit;
  }
  require_once('../lib-common.php');
$text = $_POST[nickname];
$_POST[nickname] = ereg_replace("[\r\n\t\  ]", "", trim($text));
// my new auth checker type of thing to keep multi instances of the same name.
  $db_name = "willowchat";
  $table_name = "profile";
  
  $connection = @mysql_connect("69.226.156.121", "willowchat", "willowchat")
  or die(mysql_error());
  
$sheetresult = mysql_db_query("willowchat","SELECT * FROM profile WHERE nickname='$_POST[nickname]'") or die ("I'm sorry.  No one by that name is currently in the database.");
extract(mysql_fetch_array($sheetresult));

 $amiused = eregi_replace($_POST[nickname], "true", $nickname);
 if ($amiused == 'true') {
 $_SESSION[error] = "This name has allready been selected, please choose a new login name.";
 header("Location: http://www.willowhaven.org/willowchat/login.php");
 exit;
 } 

$db = mysql_select_db($db_name, $connection) or
  die(mysql_error());
  
  $sql = "INSERT INTO $table_name (nickname, password, sex, email, age, url, realname, pudwack) VALUES ('$_POST[nickname]','$_POST[password]','$_POST[sex]','$_POST[email]','$_POST[age]','$_POST[url]','$_POST[realname]','player')";
  $result = @mysql_query($sql,$connection) or die(mysql_error());

$_SESSION[error] = "You have created a a new account. Please login to the system.";
header("Location: http://www.willowhaven.org/willowchat/login.php");
exit;

?>  