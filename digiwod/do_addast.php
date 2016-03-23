<?php
 require_once('../lib-common.php');
 include_once("striper.inc.php");
 // Add in the security checks here.
	$query = mysql_query("SELECT * FROM characters WHERE charname='$_POST[charname]'");
	$num_rows = mysql_num_rows($query);
 	$uid = $_USER[uid];
 	$username = $_USER[username];
	$amiused = 'false';
	if ($num_rows >= 1)
	{
 	$amiused = 'true';
	}
 	if ($amiused == 'true') 
 		{
		header( "Location: http://www.willowhaven.org/willowchat/cc_ast.php");
		exit;
	 	}
  $query="INSERT INTO characters (charname, playerid, player, venue) VALUES ('$_POST[charname]','$uid','$username','OOC')";
  $query2=mysql_query($query) or die("Could not insert user");
 if ($_POST[statview] == "Y") {
  $viewstat = "Y";
  } else {
  $viewstat = "N";
  }
  
  $_POST[description] = addslashes($_POST[description]);
  $timenow = time();
  $query = "UPDATE characters SET 
  lastplayts = '$timenow',
  created = now(),
  str = '$_POST[str]',
  cha = '$_POST[cha]',
  app = '$_POST[app]',
  statview = 'N',
  sanct = 'YES',
  description = '$_POST[description]',
  charname = '$_POST[charname]',
  charage = '$_POST[charage]',
  charsex = '$_POST[charsex]',
  exitmsg = '$_POST[exitmsg]',
  icon = '1053',
  venue = 'AST',
  equipment = '$_POST[equipment]'
  WHERE charname = '$_POST[charname]'"; 
  $result = mysql_query($query) or die(mysql_error());

header("Location: http://www.willowhaven.org/willowchat/portal.php");
exit;
?>  
