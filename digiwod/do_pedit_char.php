<?php
	require_once('../lib-common.php');
  	include_once("striper.inc.php");
  // Load up character values so we can alter it.
 $query = "SELECT * FROM characters WHERE charname='$_POST[pedit_char]'";
 $query2 = mysql_db_query("willowhaven", $query) or die("I'm sorry.  No one by that name is currently in the database.");
 extract(mysql_fetch_array($query2));

// Check to verify that it is the players character. If not, create a error message and scold them.
 if ($_USER[username] != "$player")  
  {
  header( "Location: http://www.willowhaven.org/willowchat/portal.php");
  exit;
  } 
  
// Insert update to character file here.
  $query = "UPDATE characters SET 
  description = '$_POST[description]',
  viewpass = '$_POST[viewpass]',
  exitmsg = '$_POST[exitmsg]',
  charURL = '$_POST[charURL]'
  WHERE charname = '$_POST[pedit_char]'"; 
    $result = mysql_query($query) or die(mysql_error());
	
 header("Location: http://www.willowhaven.org/willowchat/portal.php");
 exit;
?>  
