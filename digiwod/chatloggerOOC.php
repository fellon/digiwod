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
            <PARAM NAME=Icon VALUE="1159">
            
            DigiChat requires a Java Compatible web browser to run. 
          </APPLET>
</p>
        <p><strong>Closing this page will exit you from the chat client. </strong></p>
 </div>
<?php
	print COM_endBlock();
	print COM_siteFooter();
?>
