<?php
	require_once('../lib-common.php');
	if (empty($_USER['uid']))
    	{   
		header("Location: http://www.willowhaven.org/users.php?mode=new");
 		exit;
    	}
	
	if (SEC_inGroup ('WChatStaff'))
		{
		$test = "Admin";
		}
	 
	print COM_siteHeader();

	// create the user menues. Base on user access level
	$display_block = "
		<li>Your menu
		<li><a href=\"cc_main.php\">Create a Character</a>
		<li><a href=\"show_char.php\" target=\"_blank\">Show a Character</a>
		<li><a href=\"diceroller.php\" target=\"_blank\">Open Dice Roller</a>
		";
		
	$display_staff = "
		<li><a href=\"edit_main.php\">Edit a character</a><BR>
		<li><a href=\"search.php\">Search for Characters</a>
		<li><a href=\"chatloggerst.php\" target=\"_blank\">Chatmaster -- For ST and Admin only!</a>
		";
		
	$display_AST = "
		<li><a href=\"cc_ast.php\">Create a AST Character</a><BR>
		";
?>		
<p>WoDChat version 1.0a by Phil Brock (Fellon) <a href="http://www.willowhaven.org/willowchat/credit.php">Credits</a> <br>
  Please be so kind as to read all the notes before jumping around. Some of them contain instructions on use of the program.</p>
<p><em>You must make a character to be able to enter the chat. Making a user account does not automagicly let you enter the chat.</em></p>
<p><em>If you find a bug. <a href="http://www.willowhaven.org/mantis/main_page.php">Report it</a>. <a href="update.php"><br>
      Updates</a></em></p>
	  
      <p>Greetings <?php echo $_USER[username]; ?>!</p>

<?php 
	echo "$display_block"; 
	print "<br>";
	
	// If staff member show staff menu add-on
	if (SEC_inGroup ('WChatStaff'))
		{
		echo "$display_staff";
		}
	
	print "<br>"; 
	
	// If Assistant Storyteller show AST menu add-on
	if (SEC_inGroup ('AST'))
		{
		echo "$display_AST";
		}
?>
      <p>&nbsp;</p>
	  
      <table width="100%"  border="1">
        <tr>
          <td colspan="3"><div align="center">Character List</div></td>
        </tr>
        <tr>
          <td>Name</td>
          <td>Venue</td>
          <td>Experience</td>
        </tr>
<?php
	$query="SELECT * FROM characters WHERE playerid = '$_USER[uid]'";
    $query2=mysql_query($query) or die("Could not find chars");
	while ($row = mysql_fetch_array($query2)) 
		{
		$charname = $row['charname'];
		$venue = $row['venue'];
		$exp = $row['experience'];
		echo "<tr><td>$charname</td><td>$venue</td><td>$exp</td></tr>";
		}
	
?>
</table>
      <p>Options:</p>
      <form name="OOCloader" method="post" action="chatloggerOOC.php" target="_blank">
        Out of Character: 
          <input name="charname" type="hidden" value="<?php echo $_USER['username']; ?>_OOC">
        <input type="submit" name="Submit" value="Enter Chat OOC">
      </form>
      <p>&nbsp;</p>
      <form name="ICloader" method="post" action="chatlogger.php" target="_blank">
        <select name="charname">
        <option selected>--Select Character--</option>
<?php
	$query="SELECT * FROM characters WHERE playerid = '$_USER[uid]' ORDER BY `charname` ASC";
    $query2=mysql_query($query) or die("Could not find chars");
 	while ($row = mysql_fetch_array($query2)) 
		{
		$charname = $row['charname'];
		echo "<option value='$charname'>$charname</option>";
		}	
?>
      </select>
      <input type="submit" name="Submit2" value="Enter the Chat">
</form>
	
      <form name="Edit" method="post" action="pedit_char.php">
        <select name="pname">
        <option selected>--Select Character--</option>
<?php
	$query="SELECT * FROM characters WHERE playerid = '$_USER[uid]' ORDER BY `charname` ASC";
    $query2=mysql_query($query) or die("Could not find chars");
 	while ($row = mysql_fetch_array($query2)) 
		{
		$charname = $row['charname'];
		echo "<option value='$charname'>$charname</option>";
		}	
?>
      </select>
      <input type="submit" name="Submit2" value="Edit this Character">
      </form>
	  <form name="experience" method="post" action="exp_spend.php">
        <select name="charname">
        <option selected>--Select Character--</option>
<?php
	$query="SELECT * FROM characters WHERE playerid = '$_USER[uid]' ORDER BY `charname` ASC";
    $query2=mysql_query($query) or die("Could not find chars");
 	while ($row = mysql_fetch_array($query2)) 
		{
		$charname = $row['charname'];
		echo "<option value='$charname'>$charname</option>";
		}	
?>
      </select>
      <input type="submit" name="Submit2" value="Spend Experience">
</form>
	  <form name="Delete" method="post" action="delete_char.php">
        <select name="del_char">
        <option selected>--Select Character--</option>
<?php
	$query="SELECT * FROM characters WHERE playerid = '$_USER[uid]' ORDER BY `charname` ASC";
    $query2=mysql_query($query) or die("Could not find chars");
 	while ($row = mysql_fetch_array($query2)) 
		{
		$charname = $row['charname'];
		echo "<option value='$charname'>$charname</option>";
		}	
?>
      </select>
      <input type="submit" name="Submit2" value="Delete this Character">
      </form>
<?php
	print COM_siteFooter();
?>