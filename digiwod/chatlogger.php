<?php
	require_once('../lib-common.php');
	// begin auth checks.
	if (empty ($_USER['uid']))
    	{   
		header("Location: http://www.willowhaven.org/willowchat/portal.php");
 		exit;
    	}
	print COM_siteHeader('none');

print COM_startBlock("Entering the Midnight Carnaval");
?>

<?php
 	$charname = $_POST[charname];
	
	$query="SELECT * FROM characters WHERE charname='$charname'";
    $query2=mysql_query($query) or die("Could not find chars");
	extract(mysql_fetch_array($query2));
	// check to see if character belongs to player
	if ($_USER[uid] != $playerid) 
		{
		header("Location: http://www.willowhaven.org/willowchat/portal.php");
 		exit;
 		}
    // Check for experiance points.
	// This will be changed to a cron job + played flag
	$timenow = time();
	$query = "UPDATE characters SET
	lastplay = now(),
	lastplayts = $timenow
	WHERE charname = '$charname'"; 
    $result1 = mysql_query($query) or die(mysql_error());
	// Start big if else statement for exp
	// Check for 24 hour exp period then add exp if nessecary.
	if ($sanct == "YES") 
		{
		$lastplaytsv = $lastplayts - 43200;
	
		if ($lastexpts >= $lastplaytsv) 
			{
			echo "You have $experience exp!<br>";
			} 
		else 
			{
			$expadd = $experience + .5;
			$query = "UPDATE characters SET
			lastexp = now(),
			lastexpts = $timenow,
			experience = $expadd
			WHERE charname = '$_POST[charname]'"; 
    		$result1 = mysql_query($query) or die(mysql_error());
			echo "You now have a total of $expadd experience!<br>";
			}
 		}
?>


 <p align="center"><strong><em>Please enjoy your stay with in Midnight 


 Carnaval

.</em></strong><br>
   <a href="diceroller.php" target="_blank">Open the Dice Roller<br>
   </a><a href="show_char.php" target="_blank">View a character </a><br>
   <em><br>
   You can access the dice roller from the above link, and the character sheet viewer as well.<br>
</em></p>
 <div align="center">
  <p>&nbsp;</p>
        <p> 
          <APPLET NAME='DigiChat' CODEBASE='http://71.36.45.27/DigiChat/DigiClasses/' 
			CODE='com.diginet.digichat.client.DigiChatApplet' 
			HEIGHT=100 WIDTH=200 ALIGN='MIDDLE' 
			ARCHIVE=Client.jar MAYSCRIPT>
            <PARAM NAME=cabbase value=Client.cab>
            <PARAM NAME=MenuItem1 VALUE='Willowhaven.org'>
            <PARAM NAME=MenuLocation1 VALUE=http://www.willowhaven.org>
            <PARAM NAME=MenuItem2 VALUE='Willowchat Forums'>
            <PARAM NAME=MenuLocation2 VALUE=http://www.willowhaven.org>
            <PARAM NAME=siteID VALUE=1002>
            <PARAM NAME=background VALUE=FFFFFF>
            <PARAM NAME=textcolor VALUE=000000>
            <PARAM NAME=nickname VALUE="<?php echo $charname; ?>">
			<PARAM NAME=nickname VALUE="<?php echo $charname; ?>">
            <PARAM NAME=email VALUE="<?php echo $email; ?>">
            <PARAM NAME=Gender VALUE=<?php echo $charsex; ?>>
            <PARAM NAME=Age VALUE=<?php echo $charage; ?>>
            <PARAM NAME=Icon VALUE=<?php echo $icon; ?>>
            <PARAM NAME="exitmessage" VALUE="<?php echo $exitmsg; ?>">
            <PARAM NAME=Comments VALUE="Description: <?php echo $description; ?> STRENGTH: <?php echo $str; ?> CHARISMA: <?php echo $cha; ?>  APPEARANCE: <?php echo $app; ?> EQUIPMENT: <?php echo $equipment; ?>">
            <PARAM NAME=url value="<?php echo $url; ?>">
            DigiChat requires a Java Compatible web browser to run. 
          </APPLET>
</p>
        <p><strong>Closing this page will exit you from the chat client. </strong></p>
 </div>
<?php
	print COM_endBlock();
	print COM_siteFooter();
?>
