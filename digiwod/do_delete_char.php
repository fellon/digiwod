<?php
	require_once('../lib-common.php');
  	print COM_siteHeader();
    $query="SELECT * FROM characters WHERE charname='$_POST[del_char]'";
    $query2=mysql_query($query) or die("Could not find character");
    extract(mysql_fetch_array($query2));
	// Check to verify that it is the players character. If not, create a error message and scold them.
 	if ($_USER[username] != "$player")  
		{
  		header( "Location: http://www.willowhaven.org/willowchat/portal.php");
  		exit;
  		} 
  
  	$query = "DELETE FROM characters WHERE charname = '$_POST[del_char]'";
  	$result = @mysql_query($query) or die(mysql_error());  
?>  
        Deleted <?php echo "$_POST[del_char]" ?> from <?php echo $_SESSION[nickname]; ?>'s account. </p>
        <p><?php echo "$_POST[del_char]" ?> screams gently fade away as thier soul is lowered slowly and painfully into the abyss that is oblivion.<br>
  Don't you just get a warm and fuzzy feeling? </p>
        <p>Go <a href="portal.php">back to the menu.</a></p></td>
<?php
	print COM_siteFooter();
?>