<?php
	require_once('../lib-common.php');
	// begin auth checks.
	if (empty ($_USER['uid']))
    	{   
		header("Location: http://www.willowhaven.org/willowchat/portal.php");
 		exit;
    	}
	print COM_siteHeader('none');
	print COM_startBlock("Storyteller Entrance Portal");
?>
    <p align="center"><a href="diceroller.php" target="_blank"><br>
  Load the Dice Roller</a><a href="show_char.php" target="_blank"><br>
  Load the Character Viewer</a><br>
<em>You are a storyteller. Remember to tell the story, not try to live the story. You are the master of the world that the listener thrives in. Breathe inspiration into the minds of those that hear your words. </em></p>
    <div align="center">
  <p>&nbsp;</p>
        <p>
          <!-- *** START APPLET CODE *** -->
		  <script language="Javascript" src="chatmaster.js"></script>
		  <!-- *** END APPLET CODE *** --></TD>
</p>
</div>
<?php
	print COM_endBlock();
	print COM_siteFooter();
?>