<?php
	require_once('../lib-common.php');
	print COM_siteHeader();
$_POST[viewing] = "giotest";
	function getdots($dots)
	{
	// Use the number of dots given to use to make some custom html for dot displays.
	// IF structure should work fine. Simple if x then return this string. Build this after I get to that point.
	if ($dots == '0')
		{
		echo "<IMG SRC=\"grafix/blank.GIF\" WIDTH=\"10\" HEIGHT=\"10\" BORDER=\"0\" HSPACE=\"0\" VSPACE=\"0\"><IMG SRC=\"grafix/blank.GIF\" WIDTH=\"10\" HEIGHT=\"10\" BORDER=\"0\" HSPACE=\"0\" VSPACE=\"0\"><IMG SRC=\"grafix/blank.GIF\" WIDTH=\"10\" HEIGHT=\"10\" BORDER=\"0\" HSPACE=\"0\" VSPACE=\"0\"><IMG SRC=\"grafix/blank.GIF\" WIDTH=\"10\" HEIGHT=\"10\" BORDER=\"0\" HSPACE=\"0\" VSPACE=\"0\"><IMG SRC=\"grafix/blank.GIF\" WIDTH=\"10\" HEIGHT=\"10\" BORDER=\"0\" HSPACE=\"0\" VSPACE=\"0\">";
		}
	if ($dots == '1')
		{
		echo "<IMG SRC=\"grafix/dot.GIF\" WIDTH=\"10\" HEIGHT=\"10\" BORDER=\"0\" HSPACE=\"0\" VSPACE=\"0\"><IMG SRC=\"grafix/blank.GIF\" WIDTH=\"10\" HEIGHT=\"10\" BORDER=\"0\" HSPACE=\"0\" VSPACE=\"0\"><IMG SRC=\"grafix/blank.GIF\" WIDTH=\"10\" HEIGHT=\"10\" BORDER=\"0\" HSPACE=\"0\" VSPACE=\"0\"><IMG SRC=\"grafix/blank.GIF\" WIDTH=\"10\" HEIGHT=\"10\" BORDER=\"0\" HSPACE=\"0\" VSPACE=\"0\"><IMG SRC=\"grafix/blank.GIF\" WIDTH=\"10\" HEIGHT=\"10\" BORDER=\"0\" HSPACE=\"0\" VSPACE=\"0\">";
		}
	if ($dots == '2')
		{
		echo "<IMG SRC=\"grafix/dot.GIF\" WIDTH=\"10\" HEIGHT=\"10\" BORDER=\"0\" HSPACE=\"0\" VSPACE=\"0\"><IMG SRC=\"grafix/dot.GIF\" WIDTH=\"10\" HEIGHT=\"10\" BORDER=\"0\" HSPACE=\"0\" VSPACE=\"0\"><IMG SRC=\"grafix/blank.GIF\" WIDTH=\"10\" HEIGHT=\"10\" BORDER=\"0\" HSPACE=\"0\" VSPACE=\"0\"><IMG SRC=\"grafix/blank.GIF\" WIDTH=\"10\" HEIGHT=\"10\" BORDER=\"0\" HSPACE=\"0\" VSPACE=\"0\"><IMG SRC=\"grafix/blank.GIF\" WIDTH=\"10\" HEIGHT=\"10\" BORDER=\"0\" HSPACE=\"0\" VSPACE=\"0\">";
		}
	if ($dots == '3')
		{
		echo "<IMG SRC=\"grafix/dot.GIF\" WIDTH=\"10\" HEIGHT=\"10\" BORDER=\"0\" HSPACE=\"0\" VSPACE=\"0\"><IMG SRC=\"grafix/dot.GIF\" WIDTH=\"10\" HEIGHT=\"10\" BORDER=\"0\" HSPACE=\"0\" VSPACE=\"0\"><IMG SRC=\"grafix/dot.GIF\" WIDTH=\"10\" HEIGHT=\"10\" BORDER=\"0\" HSPACE=\"0\" VSPACE=\"0\"><IMG SRC=\"grafix/blank.GIF\" WIDTH=\"10\" HEIGHT=\"10\" BORDER=\"0\" HSPACE=\"0\" VSPACE=\"0\"><IMG SRC=\"grafix/blank.GIF\" WIDTH=\"10\" HEIGHT=\"10\" BORDER=\"0\" HSPACE=\"0\" VSPACE=\"0\">";
		}
	if ($dots == '4')
		{
		echo "<IMG SRC=\"grafix/dot.GIF\" WIDTH=\"10\" HEIGHT=\"10\" BORDER=\"0\" HSPACE=\"0\" VSPACE=\"0\"><IMG SRC=\"grafix/dot.GIF\" WIDTH=\"10\" HEIGHT=\"10\" BORDER=\"0\" HSPACE=\"0\" VSPACE=\"0\"><IMG SRC=\"grafix/dot.GIF\" WIDTH=\"10\" HEIGHT=\"10\" BORDER=\"0\" HSPACE=\"0\" VSPACE=\"0\"><IMG SRC=\"grafix/dot.GIF\" WIDTH=\"10\" HEIGHT=\"10\" BORDER=\"0\" HSPACE=\"0\" VSPACE=\"0\"><IMG SRC=\"grafix/blank.GIF\" WIDTH=\"10\" HEIGHT=\"10\" BORDER=\"0\" HSPACE=\"0\" VSPACE=\"0\">";
		}
	if ($dots == '5')
		{
		echo "<IMG SRC=\"grafix/dot.GIF\" WIDTH=\"10\" HEIGHT=\"10\" BORDER=\"0\" HSPACE=\"0\" VSPACE=\"0\"><IMG SRC=\"grafix/dot.GIF\" WIDTH=\"10\" HEIGHT=\"10\" BORDER=\"0\" HSPACE=\"0\" VSPACE=\"0\"><IMG SRC=\"grafix/dot.GIF\" WIDTH=\"10\" HEIGHT=\"10\" BORDER=\"0\" HSPACE=\"0\" VSPACE=\"0\"><IMG SRC=\"grafix/dot.GIF\" WIDTH=\"10\" HEIGHT=\"10\" BORDER=\"0\" HSPACE=\"0\" VSPACE=\"0\"><IMG SRC=\"grafix/dot.GIF\" WIDTH=\"10\" HEIGHT=\"10\" BORDER=\"0\" HSPACE=\"0\" VSPACE=\"0\">";
		}
	}
	 print COM_startBlock("Vampire Character Viewer");
 ?>
        <p>This is the Testing Character Sheet viewer. If you have arrived here in error, <a href="portal.php">Click here</a>.</em> <br>
          This is just a preview of a idea. Not sure if I really like it. <br>
          This is limited by the 5 dots. No more then 5 or it blows the lines of the tables.<br>
          There is also the problem that people like dots, and some don't
          <br>
          Where is Drew when you need a PR discision made? Sleeping like every other inteligent person on earth. <br>
          <?php 
	if ($_POST[viewing] != "") 
		{
	
// Get current character sheet and display it.
		$query = "SELECT * FROM characters WHERE charname='$_POST[viewing]'";
		$query2 = mysql_db_query("willowhaven", $query) or die ("I'm sorry.  No one by that name is currently in the database.");
		extract(mysql_fetch_array($query2));
?>
        </p>
        <TABLE WIDTH="572" BORDER="0" CELLPADDING="1" CELLSPACING="0">
          <TR>
            <TD><TABLE BORDER="0" CELLPADDING="2" CELLSPACING="1" WIDTH="570" BACKGROUND="nil.GIF">
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="CENTER" COLSPAN="6"><IMG SRC="grafix/nil.GIF" WIDTH="5" HEIGHT="5" BORDER="0"></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="2">Name</FONT></B></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" COLSPAN="2"><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">(<?php echo $charname; ?>)</FONT></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="2">Clan</FONT></B></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" COLSPAN="2"><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">(<?php echo $clan; ?>)</FONT></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="CENTER" COLSPAN="6"><IMG SRC="grafix/nil.GIF" WIDTH="5" HEIGHT="5" BORDER="0"></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="2">Sect</FONT></B></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" COLSPAN="2"><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">(<?php echo $sect; ?>)</FONT></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><strong><FONT FACE="Verdana, Arial, Helvetica, sans-serif" SIZE="2"> Nature</FONT></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" COLSPAN="2"><FONT FACE="Verdana, Arial, Helvetica, sans-serif" SIZE="1">(<?php echo $nature; ?>)</FONT></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="2">Generation</FONT></B></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" COLSPAN="2"><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">(<?php echo $generation; ?>) Gen.</FONT></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><strong><FONT FACE="Verdana, Arial, Helvetica, sans-serif" SIZE="2">Demeanor</FONT></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" COLSPAN="2"><FONT FACE="Verdana, Arial, Helvetica, sans-serif" SIZE="1">(<?php echo $demeanor; ?>)</FONT></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Sex</font></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" COLSPAN="2"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">(</font><font face="Verdana, Arial, Helvetica" size="1"><?php echo $charsex; ?></font><font size="1" face="Verdana, Arial, Helvetica, sans-serif">)</font></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Experiance</font></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" COLSPAN="2"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">(<?php echo $experience; ?>)</font></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="2">Age</FONT></B></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" COLSPAN="2"><FONT FACE="Verdana, Arial, Helvetica" SIZE="1"> Apparent: (<?php echo $charage; ?> ) True: (<?php echo $age; ?>)</FONT></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><strong><FONT FACE="Verdana, Arial, Helvetica, sans-serif" SIZE="2">Concept</FONT></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" COLSPAN="2"><FONT FACE="Verdana, Arial, Helvetica, sans-serif" SIZE="1">(<?php echo $concept; ?>)</FONT></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="CENTER" COLSPAN="6"><IMG SRC="grafix/nil.GIF" WIDTH="5" HEIGHT="5" BORDER="0"></TD>
                </TR>
                <TR>
                  <TD VALIGN="TOP" ALIGN="LEFT"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Exit Mesg </font></strong></TD>
                  <TD VALIGN="TOP" ALIGN="LEFT" COLSPAN="5"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">(<?php echo $exitmsg; ?>)</font> </TD>
                </TR>
                <TR>
                  <TD VALIGN="TOP" ALIGN="LEFT" WIDTH="90"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="2"> Description</FONT></B></TD>
                  <TD VALIGN="TOP" ALIGN="LEFT" COLSPAN="5"><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">(<?php echo $description; ?>)</FONT></TD>
                </TR>
                <TR>
                  <TD VALIGN="TOP" ALIGN="LEFT" WIDTH="90"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="2"> Appearance</FONT></B></TD>
                  <TD VALIGN="TOP" ALIGN="LEFT" COLSPAN="5"><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">(General Appearance, clothing style, etc.)</FONT></TD>
                </TR>
                <TR>
                  <TD VALIGN="TOP" ALIGN="LEFT" WIDTH="90"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="2">Background</FONT></B></TD>
                  <TD VALIGN="TOP" ALIGN="LEFT" COLSPAN="2"><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">(Family Status, Social Roots)</FONT></TD>
                  <TD VALIGN="TOP" ALIGN="LEFT" WIDTH="100"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="2">Birthplace</FONT></B></TD>
                  <TD VALIGN="TOP" ALIGN="LEFT" COLSPAN="2"><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">(Birthplace)</FONT></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="CENTER" COLSPAN="6"><?php
// View only passwords stuff begins here.
if ((($statview == "N") && ($_POST[viewpass] == $viewpass)) || $statview == "Y" || $_SESSION[groups] == "ast")
    {
	?>                    <IMG SRC="grafix/nil.GIF" WIDTH="5" HEIGHT="5" BORDER="0"></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="CENTER" COLSPAN="6"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="2">Attributes</FONT></B></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">Strength</FONT></B></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($str); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="80"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">Charisma</FONT></B></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($cha); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">Perception</FONT></B></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($per); ?></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">Dexterity</FONT></B></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($dex); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="80"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">Manipulation</FONT></B></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($man); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">Intelligence</FONT></B></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($intel); ?></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">Stamina</FONT></B></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($sta); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="80"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">Appearance</FONT></B></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($app); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">Wits</FONT></B></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($wit); ?></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="CENTER" COLSPAN="6"><IMG SRC="grafix/nil.GIF" WIDTH="5" HEIGHT="5" BORDER="0"></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="CENTER" COLSPAN="6"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="2">Abilities</FONT></B></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><strong><FONT FACE="Verdana, Arial, Helvetica, sans-serif" SIZE="1">Alertness</FONT></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($alertness); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="80"><strong><FONT FACE="Verdana, Arial, Helvetica, sans-serif" SIZE="1">Animal Ken</FONT></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($animalk); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><strong><FONT FACE="Verdana, Arial, Helvetica, sans-serif" SIZE="1">Academics</FONT></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($academics); ?></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><strong><FONT FACE="Verdana, Arial, Helvetica, sans-serif" SIZE="1">Athletics</FONT></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($athletics); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="80"><strong><FONT FACE="Verdana, Arial, Helvetica, sans-serif" SIZE="1">Crafts</FONT></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($crafts); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><strong><FONT FACE="Verdana, Arial, Helvetica, sans-serif" SIZE="1">Computer</FONT></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($computer); ?></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><strong><FONT FACE="Verdana, Arial, Helvetica, sans-serif" SIZE="1">Brawl</FONT></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($brawl); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="80"><strong><FONT FACE="Verdana, Arial, Helvetica, sans-serif" SIZE="1">Drive</FONT></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($drive); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><strong><FONT FACE="Verdana, Arial, Helvetica, sans-serif" SIZE="1">Finance</FONT></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($finance); ?></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><strong><FONT FACE="Verdana, Arial, Helvetica, sans-serif" SIZE="1">Dodge</FONT></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($dodge); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="80"><strong><FONT FACE="Verdana, Arial, Helvetica, sans-serif" SIZE="1">Etiquette</FONT></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($etiquette); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><strong><FONT FACE="Verdana, Arial, Helvetica, sans-serif" SIZE="1">Investigation</FONT></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($investigation); ?></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><strong><FONT FACE="Verdana, Arial, Helvetica, sans-serif" SIZE="1">Empathy</FONT></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($empathy); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="80"><strong><FONT FACE="Verdana, Arial, Helvetica, sans-serif" SIZE="1">Firearms</FONT></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($firearms); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><strong><FONT FACE="Verdana, Arial, Helvetica, sans-serif" SIZE="1">Law</FONT></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($law); ?></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><strong><FONT FACE="Verdana, Arial, Helvetica, sans-serif" SIZE="1">Expression</FONT></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($expression); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="80"><strong><FONT FACE="Verdana, Arial, Helvetica, sans-serif" SIZE="1">Melee</FONT></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($melee); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><strong><FONT FACE="Verdana, Arial, Helvetica, sans-serif" SIZE="1">Linguistics</FONT></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($linguistics); ?></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><strong><FONT FACE="Verdana, Arial, Helvetica, sans-serif" SIZE="1">Intimidation</FONT></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($intimidation); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="80"><strong><FONT FACE="Verdana, Arial, Helvetica, sans-serif" SIZE="1">Performance</FONT></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($performance); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><strong><FONT FACE="Verdana, Arial, Helvetica, sans-serif" SIZE="1">Medicine</FONT></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($medicine); ?></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><strong><FONT FACE="Verdana, Arial, Helvetica, sans-serif" SIZE="1">Leadership</FONT></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($leadership); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="80"><strong><FONT FACE="Verdana, Arial, Helvetica, sans-serif" SIZE="1">Security</FONT></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($security); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><strong><FONT FACE="Verdana, Arial, Helvetica, sans-serif" SIZE="1">Occult</FONT></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($occult); ?></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><strong><FONT FACE="Verdana, Arial, Helvetica, sans-serif" SIZE="1">Streetwise</FONT></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($streetwise); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="80"><strong><FONT FACE="Verdana, Arial, Helvetica, sans-serif" SIZE="1">Stealth</FONT></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($stealth); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><strong><FONT FACE="Verdana, Arial, Helvetica, sans-serif" SIZE="1">Politics</FONT></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($politics); ?></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="1">Subterfuge</font></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><?php getdots($subterfuge); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="1">Survival</font></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><?php getdots($survival); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><strong><font face="Verdana, Arial, Helvetica, sans-serif" size="1">Science</font></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><?php getdots($science); ?></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Primal Urge </font></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><?php getdots($primalurge); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Meditation</font></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><?php getdots($meditation); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Enigmas</font></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><?php getdots($enigmas); ?></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Awareness</font></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><?php getdots($awareness); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Technology</font></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><?php getdots($technology); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Rituals</font></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><?php getdots($rituals); ?></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Kenning</font></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><?php getdots($kenning); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT">&nbsp;</TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Cosmology</font></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><?php getdots($cosmology); ?></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT">&nbsp;</TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT">&nbsp;</TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT">&nbsp;</TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Gremayre</font></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><?php getdots($greymayrel); ?></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                  <?php
	if ($other1 != "") {
    echo "$other1";
	} else {
	echo "null";
	}
	?>
                  </font></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><?php getdots($other1val); ?> &nbsp;</TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                  <?php
	if ($other2 != "") {
    echo "$other2";
	} else {
	echo "null";
	}
	?>
                  </font></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><?php getdots($other2val); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                  <?php
	if ($other3 != "") {
    echo "$other3";
	} else {
	echo "null";
	}
	?>
                  </font></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><?php getdots($other3val); ?></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                  <?php
	if ($other4 != "") {
    echo "$other4";
	} else {
	echo "null";
	}
	?>
                  </font></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><?php getdots($other4val); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                  <?php
	if ($other5 != "") {
    echo "$other5";
	} else {
	echo "null";
	}
	?>
                  </font></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><?php getdots($other5val); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                  <?php
	if ($other6 != "") {
    echo "$other6";
	} else {
	echo "null";
	}
	?>
                  </font></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><?php getdots($other6val); ?></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                  <?php
	if ($other7 != "") {
    echo "$other7";
	} else {
	echo "null";
	}
	?>
                  </font></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><?php getdots($other7val); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                  <?php
	if ($other8 != "") {
    echo "$other8";
	} else {
	echo "null";
	}
	?>
                  </font></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><?php getdots($other8val); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                  <?php
	if ($other9 != "") {
    echo "$other9";
	} else {
	echo "null";
	}
	?>
                  </font></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><?php getdots($other9val); ?></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                  <?php
	if ($other10 != "") {
    echo "$other10";
	} else {
	echo "null";
	}
	?>
                  </font></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><?php getdots($other10val); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                  <?php
	if ($other11 != "") {
    echo "$other11";
	} else {
	echo "null";
	}
	?>
                  </font></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><?php getdots($other11val); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                  <?php
	if ($other12 != "") {
    echo "$other12";
	} else {
	echo "null";
	}
	?>
                  </font></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><?php getdots($other12val); ?></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                  <?php
	if ($other13 != "") {
    echo "$other13";
	} else {
	echo "null";
	}
	?>
                  </font></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($other13val); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="80"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                  <?php
	if ($other14 != "") {
    echo "$other14";
	} else {
	echo "null";
	}
	?>
                  </font></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($other14val); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                    <?php
	if ($other15 != "") {
    echo "$other15";
	} else {
	echo "null";
	}
	?>
                  </font></strong></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($other15val); ?></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="CENTER"><div align="left"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="2">Specialties</FONT></B></div></TD>
                  <TD COLSPAN="5" ALIGN="CENTER" VALIGN="MIDDLE"><div align="left"></div>                    
                    <div align="left"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">(<?php echo $specialties; ?>)</font></div></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="CENTER" COLSPAN="6"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="2"><IMG SRC="grafix/nil.GIF" WIDTH="5" HEIGHT="5" BORDER="0"></FONT></B></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">(Specialty)</FONT></B></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="80"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">(Specialty)</FONT></B></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">(Specialty)</FONT></B></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">(Specialty)</FONT></B></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="80"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">(Specialty)</FONT></B></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">(Specialty)</FONT></B></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">(Specialty)</FONT></B></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="80"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">(Specialty)</FONT></B></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">(Specialty)</FONT></B></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"><IMG SRC="grafix/blank.GIF" WIDTH="10" HEIGHT="10" BORDER="0" HSPACE="0" VSPACE="0"></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="CENTER" COLSPAN="6"><IMG SRC="grafix/nil.GIF" WIDTH="5" HEIGHT="5" BORDER="0"></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="CENTER" COLSPAN="6"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="2">Advantages</FONT></B></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="CENTER" COLSPAN="2"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="2">Disciplines</FONT></B></TD>
                  <TD VALIGN="MIDDLE" ALIGN="CENTER" COLSPAN="2"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="2">Backgrounds</FONT></B></TD>
                  <TD VALIGN="MIDDLE" ALIGN="CENTER" COLSPAN="2"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="2">Virtues</FONT></B></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">(Clan Disc.)</FONT></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($supernat1val); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="80"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">(
                  <?php	if ($backgrounds1 != "") {
    echo "$backgrounds1";
	} else {
	echo "null";
}?>
                  )</font></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($backgrounds1val); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">Conscience</FONT></B></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($virtcc); ?></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">(Clan Disc.)</FONT></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($supernat2val); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="80"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">(
                      <?php	if ($backgrounds2 != "") {
    echo "$backgrounds2";
	} else {
	echo "null";
}?>
)</font></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($backgrounds2val); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">Conviction</FONT></B></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">(Clan Disc.)</FONT></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($supernat3val); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="80"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">(
                      <?php	if ($backgrounds3 != "") {
    echo "$backgrounds3";
	} else {
	echo "null";
}?>
)</font></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($backgrounds3val); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">Self Control</FONT></B></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($virtsci); ?></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">(Other Disc.)</FONT></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($supernat4val); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="80"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">(
                      <?php	if ($backgrounds4 != "") {
    echo "$backgrounds4";
	} else {
	echo "null";
}?>
)</font></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($backgrounds4val); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">Instincts</FONT></B></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">(Other Disc.)</FONT></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($supernat5val); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="80"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">(
                      <?php	if ($backgrounds5 != "") {
    echo "$backgrounds5";
	} else {
	echo "null";
}?>
)</font></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($backgrounds5val); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="90"><B><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">Courage</FONT></B></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" WIDTH="100"><?php getdots($virtc); ?></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="CENTER"><div align="left"><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">(Other Disc.)</FONT></div></TD>
                  <TD VALIGN="MIDDLE" ALIGN="CENTER"><div align="left">
                    <?php getdots($supernat6val); ?>
                  </div></TD>
                  <TD VALIGN="MIDDLE" ALIGN="CENTER"><div align="left"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">(
                        <?php	if ($backgrounds6 != "") {
    echo "$backgrounds6";
	} else {
	echo "null";
}?>
)</font></div></TD>
                  <TD VALIGN="MIDDLE" ALIGN="CENTER"><div align="left">
                    <?php getdots($backgrounds6val); ?>
                  </div></TD>
                  <TD COLSPAN="2" ALIGN="CENTER" VALIGN="MIDDLE"><b><font face="Verdana, Arial, Helvetica" size="1"><?php echo $path; ?></font></b></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="CENTER"><div align="left"><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">(Other Disc.)</FONT></div></TD>
                  <TD VALIGN="MIDDLE" ALIGN="CENTER"><div align="left">
                    <?php getdots($supernat7val); ?>
                  </div></TD>
                  <TD VALIGN="MIDDLE" ALIGN="CENTER"><div align="left"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">(
                        <?php	if ($backgrounds7 != "") {
    echo "$backgrounds7";
	} else {
	echo "null";
}?>
)</font></div></TD>
                  <TD VALIGN="MIDDLE" ALIGN="CENTER"><div align="left">
                    <?php getdots($backgrounds7val); ?>
                  </div></TD>
                  <TD VALIGN="MIDDLE" ALIGN="CENTER" COLSPAN="2"><B><img src="grafix/dot.GIF" width="10" height="10" border="0" hspace="0" vspace="0"><img src="grafix/dot.GIF" width="10" height="10" border="0" hspace="0" vspace="0"><img src="grafix/blank.GIF" width="10" height="10" border="0" hspace="0" vspace="0"><img src="grafix/blank.GIF" width="10" height="10" border="0" hspace="0" vspace="0"><img src="grafix/blank.GIF" width="10" height="10" border="0" hspace="0" vspace="0"><img src="grafix/blank.GIF" width="10" height="10" border="0" hspace="0"
vspace="0"><img src="grafix/blank.GIF" width="10" height="10" border="0" hspace="0" vspace="0"><img src="grafix/blank.GIF" width="10" height="10" border="0" hspace="0" vspace="0"><img src="grafix/blank.GIF" width="10" height="10" border="0" hspace="0" vspace="0"><img src="grafix/blank.GIF" width="10" height="10" border="0" hspace="0" vspace="0"><?php echo $pathrate; ?></B></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">(Other Disc.)</FONT></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><?php getdots($supernat8val); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">(
                      <?php	if ($backgrounds8 != "") {
    echo "$backgrounds8";
	} else {
	echo "null";
}?>
)</font></TD>
                  <TD VALIGN="MIDDLE" ALIGN="CENTER"><div align="left">
                    <?php getdots($backgrounds8val); ?>
                  </div></TD>
                  <TD VALIGN="MIDDLE" ALIGN="CENTER" COLSPAN="2"><b><font face="Verdana, Arial, Helvetica" size="1">Willpower<?php echo $willpowerperm; ?></font></b></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><FONT FACE="Verdana, Arial, Helvetica" SIZE="1">(Other Disc.)</FONT></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><?php getdots($supernat9val); ?></TD>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">(
                      <?php	if ($backgrounds9 != "") {
    echo "$backgrounds9";
	} else {
	echo "null";
}?>
)</font></TD>
                  <TD VALIGN="TOP" ALIGN="CENTER"><div align="left">
                    <?php getdots($backgrounds9val); ?>
                  </div></TD>
                  <TD VALIGN="MIDDLE" ALIGN="CENTER" COLSPAN="2"><B><img src="grafix/dot.GIF" width="10" height="10" border="0" hspace="0" vspace="0"><img src="grafix/blank.GIF" width="10" height="10" border="0" hspace="0" vspace="0"><img src="grafix/blank.GIF" width="10" height="10" border="0" hspace="0" vspace="0"><img src="grafix/blank.GIF" width="10" height="10" border="0" hspace="0" vspace="0"><img src="grafix/blank.GIF" width="10" height="10" border="0" hspace="0" vspace="0"><img src="grafix/blank.GIF" width="10" height="10" border="0" hspace="0"
vspace="0"><img src="grafix/blank.GIF" width="10" height="10" border="0" hspace="0" vspace="0"><img src="grafix/blank.GIF" width="10" height="10" border="0" hspace="0" vspace="0"><img src="grafix/blank.GIF" width="10" height="10" border="0" hspace="0" vspace="0"><img src="grafix/blank.GIF" width="10" height="10" border="0" hspace="0" vspace="0"></B></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" COLSPAN="3">&nbsp;</TD>
                  <TD VALIGN="MIDDLE" ALIGN="CENTER">&nbsp;</TD>
                  <TD VALIGN="MIDDLE" ALIGN="CENTER" COLSPAN="2"><b><font face="Verdana, Arial, Helvetica" size="1">Willpower Temp <?php echo $willpowertemp; ?></font></b></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" COLSPAN="3">&nbsp;</TD>
                  <TD VALIGN="MIDDLE" ALIGN="CENTER">&nbsp;</TD>
                  <TD VALIGN="MIDDLE" ALIGN="CENTER" COLSPAN="2"><b><img src="grafix/dot.GIF" width="10" height="10" border="0" hspace="0" vspace="0"><img src="grafix/blank.GIF" width="10" height="10" border="0" hspace="0" vspace="0"><img src="grafix/blank.GIF" width="10" height="10" border="0" hspace="0" vspace="0"><img src="grafix/blank.GIF" width="10" height="10" border="0" hspace="0" vspace="0"><img src="grafix/blank.GIF" width="10" height="10" border="0" hspace="0" vspace="0"><img src="grafix/blank.GIF" width="10" height="10" border="0" hspace="0"
vspace="0"><img src="grafix/blank.GIF" width="10" height="10" border="0" hspace="0" vspace="0"><img src="grafix/blank.GIF" width="10" height="10" border="0" hspace="0" vspace="0"><img src="grafix/blank.GIF" width="10" height="10" border="0" hspace="0" vspace="0"><img src="grafix/blank.GIF" width="10" height="10" border="0" hspace="0" vspace="0"></b></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" COLSPAN="3">&nbsp;</TD>
                  <TD VALIGN="MIDDLE" ALIGN="CENTER">&nbsp;</TD>
                  <TD VALIGN="MIDDLE" ALIGN="CENTER" COLSPAN="2"><b><font face="Verdana, Arial, Helvetica" size="1">Blood Pool</font></b></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" COLSPAN="3">&nbsp;</TD>
                  <TD VALIGN="MIDDLE" ALIGN="CENTER">&nbsp;</TD>
                  <TD VALIGN="MIDDLE" ALIGN="CENTER" COLSPAN="2"><b><img src="grafix/dot.GIF" width="10" height="10" border="0" hspace="0" vspace="0"><img src="grafix/dot.GIF" width="10" height="10" border="0" hspace="0" vspace="0"><img src="grafix/dot.GIF" width="10" height="10" border="0" hspace="0" vspace="0"><img src="grafix/dot.GIF" width="10" height="10" border="0" hspace="0" vspace="0"><img src="grafix/dot.GIF" width="10" height="10" border="0" hspace="0" vspace="0"><img src="grafix/dot.GIF" width="10" height="10" border="0" hspace="0"
vspace="0"><img src="grafix/dot.GIF" width="10" height="10" border="0" hspace="0" vspace="0"><img src="grafix/dot.GIF" width="10" height="10" border="0" hspace="0" vspace="0"><img src="grafix/dot.GIF" width="10" height="10" border="0" hspace="0" vspace="0"><img src="grafix/dot.GIF" width="10" height="10" border="0" hspace="0" vspace="0"><img src="grafix/blank.GIF" width="10" height="10" border="0" hspace="0" vspace="0"><img src="grafix/blank.GIF" width="10" height="10" border="0" hspace="0" vspace="0"><img src="grafix/blank.GIF" width="10"
height="10" border="0" hspace="0" vspace="0"><img src="grafix/blank.GIF" width="10" height="10" border="0" hspace="0" vspace="0"><img src="grafix/blank.GIF" width="10" height="10" border="0" hspace="0" vspace="0"></b></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="LEFT" COLSPAN="3">&nbsp;</TD>
                  <TD VALIGN="MIDDLE" ALIGN="CENTER">&nbsp;</TD>
                  <TD VALIGN="MIDDLE" ALIGN="CENTER" COLSPAN="2">&nbsp;</TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="CENTER" COLSPAN="6"><IMG SRC="grafix/nil.GIF" WIDTH="5" HEIGHT="5" BORDER="0"></TD>
                </TR>
                <TR>
                  <TD ALIGN="RIGHT" VALIGN="MIDDLE"><div align="left"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Merits</font></strong> (0) <?php echo $meritstotal; ?></div></TD>
                  <TD COLSPAN="5" ALIGN="RIGHT" VALIGN="MIDDLE"><div align="left"><?php echo $merits; ?></div></TD>
                </TR>
                <TR>
                  <TD ALIGN="RIGHT" VALIGN="MIDDLE"><div align="left"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Flaws</font></strong> (0) <?php echo $flawstotal; ?></div></TD>
                  <TD COLSPAN="5" ALIGN="RIGHT" VALIGN="MIDDLE"><div align="left"><?php echo $flaws; ?></div></TD>
                </TR>
                <TR>
                  <TD COLSPAN="6" ALIGN="RIGHT" VALIGN="MIDDLE"><div align="left"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Equipment on Character</font></strong> (0) <?php echo $equipment; ?></div></TD>
                </TR>
                <TR>
                  <TD VALIGN="MIDDLE" ALIGN="CENTER" COLSPAN="6"><div align="left"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Equipment off Character</font></strong> (0) <?php echo $equiphome; ?></div></TD>
                </TR>
                <TR>
                  <TD COLSPAN="6" ALIGN="RIGHT" VALIGN="MIDDLE"><div align="left"><FONT FACE="Verdana, Arial, Helvetica, sans-serif" SIZE="2"><strong>Misc</strong></FONT><FONT FACE="Verdana, Arial, Helvetica" SIZE="1"> ( <?php echo $misc; ?> ) </FONT></div></TD>
                </TR>
            </TABLE></TD>
          </TR>
        </TABLE>
        <p>
          <?php
	} else {
	?>
		  <br>
</p>
<center>
This player has chosen not to show their stats.  In order to see their stats, please try again with the correct view-only password.
</center>
<br>
<br>
<?php
}
}
else
{
print "No character selected";
}
print COM_endBlock();
print COM_siteFooter();
?>