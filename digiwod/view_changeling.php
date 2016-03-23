<?php
require_once('../lib-common.php');
print COM_siteHeader();
 ?>
This is the Character Sheet viewer. If you have arrived here in error, <a href="portal.php">Click here</a>.</em> <br><br>
<?php 
	if ($_POST[viewing] != "") {
	
// Get current character sheet and see if some fields can be plugged into.
// mysql_connect ("69.226.156.121", "willowchat", "willowchat") or die ("Unable to connect to MySQL server.");
$query = "SELECT * FROM characters WHERE charname='$_POST[viewing]'";
$query2 = mysql_db_query("willowhaven", $query) or die ("I'm sorry.  No one by that name is currently in the database.");
extract(mysql_fetch_array($query2));
?>


<table width="100%"  border="1">
  <tr>
    <td><em><strong>Character Name:</strong></em></td>
    <td><em><strong>Apparent Character Age: </strong></em></td>
  </tr>
  <tr>
    <td><?php echo $charname; ?></td>
    <td><?php echo $charage; ?></td>
  </tr>
  <tr>
    <td><em><strong>Description:</strong></em></td>
    <td><em><strong>Concept:</strong></em></td>
  </tr>
  <tr>
    <td><?php echo $description; ?></td>
    <td><?php echo $concept; ?></td>
  </tr>
</table>
<?php
// View only passwords stuff begins here. Add AST checks here
if ((($statview == "N") && ($_POST[viewpass] == $viewpass)) || $statview == "Y")
    {
	?>  
<table width="100%" border="1">
  <tr>
    <td colspan="2"><em><strong>Character Gender:</strong></em></td>
    <td colspan="4"><em><strong>Kith:</strong></em></td>
  </tr>
  <tr>
    <td colspan="2">
      <?php echo $charsex; ?></td>
    <td colspan="4">
      <?php echo $kith; ?></td>
  </tr>
  <tr>
    <td colspan="6"><strong><em>Exit Message:</em></strong></td>
  </tr>
  <tr>
    <td colspan="6">
      <?php echo $exitmsg; ?>
    </td>
  </tr>
  <tr>
    <td colspan="2"><strong><em>Court:</em></strong></td>
    <td colspan="4"><strong><em>House:</em></strong></td>
  </tr>
  <tr>
    <td colspan="2">
      <?php echo $court; ?></td>
    <td colspan="4">
      <?php echo $house; ?>
      </td>
  </tr>
  <tr>
    <td colspan="2"><strong><em>Seeming:</em></strong></td>
    <td colspan="4"><strong><em>Lagacies:</em></strong></td>
  </tr>
  <tr>
    <td colspan="2"><?php echo $seeming; ?></td>
    <td colspan="2"><?php echo $lags; ?></td>
    <td colspan="2">
      <?php echo $laguns; ?></td>
  </tr>
  <tr>
    <td colspan="6"><em><strong>Experience</strong></em>: <?php echo $experience; ?></td>
  </tr>
  <tr>
    <td colspan="6">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6"><div align="center"><font size="3"><strong>Attributes</strong></font></div></td>
  </tr>
  <tr>
    <td colspan="2">Physical: </td>
    <td colspan="2">Social: </td>
    <td colspan="2"><p>Mental: </p></td>
  </tr>
  <tr>
    <td>Strength: </td>
    <td><?php echo $str; ?></td>
    <td>Charisma: </td>
    <td><?php echo $cha; ?></td>
    <td>Perception: </td>
    <td><?php echo $per; ?></td>
  </tr>
  <tr>
    <td>Dexterity: </td>
    <td><?php echo $dex; ?></td>
    <td>Manipulation: </td>
    <td><?php echo $man; ?></td>
    <td>Intelligence: </td>
    <td><?php echo $intel; ?></td>
  </tr>
  <tr>
    <td>Stamina: </td>
    <td><?php echo $sta; ?></td>
    <td>Appearance: </td>
    <td><?php echo $app; ?></td>
    <td>Wits: </td>
    <td><?php echo $wit; ?></td>
  </tr>
  <tr>
    <td colspan="6"><div align="left"></div></td>
  </tr>
  <tr>
            <td colspan="6"><div align="center"><strong>Abilities</strong></div></td>
        </tr>
          <tr>
            <td colspan="2">Talents</td>
            <td colspan="2">Skills</td>
            <td colspan="2">Knowledge's</td>
          </tr>
          <tr>
            <td>Alertness: </td>
            <td>
              <div align="left">
                <?php echo $alertness; ?>
            </div></td>
            <td>Animal Ken: </td>
            <td><?php echo $animalk; ?></td>
            <td>Academics: </td>
            <td><?php echo $academics; ?></td>
          </tr>
          <tr>
            <td>Athletics: </td>
            <td>
              <div align="left">
                <?php echo $athletics; ?>
            </div></td>
            <td>Crafts: </td>
            <td><?php echo $crafts; ?></td>
            <td>Computer: </td>
            <td><?php echo $computer; ?></td>
          </tr>
          <tr>
            <td>Brawl: </td>
            <td><?php echo $brawl; ?></td>
            <td>Drive: </td>
            <td><?php echo $drive; ?></td>
            <td>Finance: </td>
            <td><?php echo $finance; ?></td>
          </tr>
          <tr>
            <td>Dodge: </td>
            <td><?php echo $dodge; ?></td>
            <td>Etiquette: </td>
            <td><?php echo $etiquette; ?></td>
            <td>Investigation: </td>
            <td><?php echo $investigation; ?></td>
          </tr>
          <tr>
            <td>Empathy: </td>
            <td><?php echo $empathy; ?></td>
            <td>Firearms: </td>
            <td><?php echo $firearms; ?></td>
            <td>Law: </td>
            <td><?php echo $law; ?></td>
          </tr>
          <tr>
            <td>Expression: </td>
            <td><?php echo $expression; ?></td>
            <td>Melee: </td>
            <td><?php echo $melee; ?></td>
            <td>Linguistics: </td>
            <td><?php echo $linguistics; ?></td>
          </tr>
          <tr>
            <td>Intimidation: </td>
            <td><?php echo $intimidation; ?></td>
            <td>Performance: </td>
            <td><?php echo $performance; ?></td>
            <td>Medicine: </td>
            <td><?php echo $medicine; ?></td>
          </tr>
          <tr>
            <td>Leadership: </td>
            <td><?php echo $leadership; ?></td>
            <td>Security: </td>
            <td><?php echo $security; ?></td>
            <td>Occult: </td>
            <td><?php echo $occult; ?></td>
          </tr>
          <tr>
            <td>Streetwise: </td>
            <td><?php echo $streetwise; ?></td>
            <td>Stealth: </td>
            <td><?php echo $stealth; ?></td>
            <td>Politics: </td>
            <td><?php echo $politics; ?></td>
          </tr>
          <tr>
            <td>Subterfuge: </td>
            <td><?php echo $subterfuge; ?></td>
            <td>Survival: </td>
            <td><?php echo $survival; ?></td>
            <td>Science: </td>
            <td><?php echo $science; ?></td>
          </tr>
          <tr>
            <td>Primal Urge:</td>
            <td><?php echo $primalurge; ?></td>
            <td>Meditation</td>
            <td><?php echo $meditation; ?></td>
            <td>Enigmas</td>
            <td><?php echo $enigmas; ?></td>
          </tr>
          <tr>
            <td>Awareness</td>
            <td><?php echo $awareness; ?></td>
            <td>Technology</td>
            <td><?php echo $technology; ?></td>
            <td>Rituals</td>
            <td><?php echo $ritualsab; ?></td>
          </tr>
          <tr>
            <td>Kenning</td>
            <td><?php echo $kenning; ?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>Cosmology</td>
            <td><?php echo $cosmology; ?></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>Gremayre</td>
            <td><?php echo $gremayre; ?></td>
          </tr>
          <tr>
            <td><?php
	if ($other1 != "") {
    echo "$other1 </td><td>$other1val</td>";
	} else {
	?>
&nbsp;</td>
            <td>&nbsp;</td>
            <?php } ?>
            <td><?php
	if ($other2 != "") {
    echo "$other2 </td><td>$other2val</td>";
	} else {
	?>
&nbsp;</td>
            <td>&nbsp;</td>
            <?php } ?>
            <td><?php
	if ($other3 != "") {
    echo "$other3 </td><td>$other3val</td>";
	} else {
	?>
&nbsp;</td>
            <td>&nbsp;</td>
            <?php } ?>
          </tr>
          <tr>
            <td><?php
	if ($other4 != "") {
    echo "$other4 </td><td>$other4val</td>";
	} else {
	?>
&nbsp;</td>
            <td>&nbsp;</td>
            <?php } ?>
            <td><?php
	if ($other5 != "") {
    echo "$other5 </td><td>$other5val</td>";
	} else {
	?>
&nbsp;</td>
            <td>&nbsp;</td>
            <?php } ?>
            <td><?php
	if ($other6 != "") {
    echo "$other6 </td><td>$other6val</td>";
	} else {
	?>
&nbsp;</td>
            <td>&nbsp;</td>
            <?php } ?>
          </tr>
          <tr>
            <td><?php
	if ($other7 != "") {
    echo "$other7 </td><td>$other7val</td>";
	} else {
	?>
&nbsp;</td>
            <td>&nbsp;</td>
            <?php } ?>
            <td><?php
	if ($other8 != "") {
    echo "$other8 </td><td>$other8val</td>";
	} else {
	?>
&nbsp;</td>
            <td>&nbsp;</td>
            <?php } ?>
            <td><?php
	if ($other9 != "") {
    echo "$other9 </td><td>$other9val</td>";
	} else {
	?>
&nbsp;</td>
            <td>&nbsp;</td>
            <?php } ?>
          </tr>
          <tr>
            <td><?php
	if ($other10 != "") {
    echo "$other10 </td><td>$other10val</td>";
	} else {
	?>
&nbsp;</td>
            <td>&nbsp;</td>
            <?php } ?>
            <td><?php
	if ($other11 != "") {
    echo "$other11 </td><td>$other11val</td>";
	} else {
	?>
&nbsp;</td>
            <td>&nbsp;</td>
            <?php } ?>
            <td><?php
	if ($other12 != "") {
    echo "$other12 </td><td>$other12val</td>";
	} else {
	?>
&nbsp;</td>
            <td>&nbsp;</td>
            <?php } ?>
          </tr>
          <tr>
            <td><?php
	if ($other13 != "") {
    echo "$other13 </td><td>$other13val</td>";
	} else {
	?>
&nbsp;</td>
            <td>&nbsp;</td>
            <?php } ?>
            <td>
              <?php
	if ($other14 != "") {
    echo "$other14 </td><td>$other14val</td>";
	} else {
	?>
&nbsp;</td>
            <td>&nbsp;</td>
            <?php } ?>
            <td><?php
	if ($other15 != "") {
    echo "$other15 </td><td>$other15val</td>";
	} else {
	?>
&nbsp;</td>
            <td>&nbsp;</td>
            <?php } ?>
          </tr>
  <tr>
    <td colspan="6">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6"><strong><em>Specialties: </em></strong></td>
  </tr>
  <tr>
    <td colspan="6"><?php echo $specialties; ?></td>
  </tr>
  <tr>
    <td colspan="6">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6"><div align="center"><strong>Advantages</strong></div></td>
  </tr>
  <tr>
    <td colspan="6"><strong>Backgrounds</strong></td>
  </tr>
  <tr>
    <td><?php
	if ($backgrounds1 != "") {
    echo "$backgrounds1 </td><td>$backgrounds1val</td>";
	} else {
	?>
&nbsp;</td>
    <td>&nbsp;</td>
    <?php } ?>
    <td><?php
	if ($backgrounds2 != "") {
    echo "$backgrounds2 </td><td>$backgrounds2val</td>";
	} else {
	?>
&nbsp;</td>
    <td>&nbsp;</td>
    <?php } ?>
    <td>
      <?php
	if ($backgrounds3 != "") {
    echo "$backgrounds3 </td><td>$backgrounds3val</td>";
	} else {
	?>
&nbsp;</td>
    <td>&nbsp;</td>
    <?php } ?>
  </tr>
  <tr>
    <td><?php
	if ($backgrounds4 != "") {
    echo "$backgrounds4 </td><td>$backgrounds4val</td>";
	} else {
	?>
&nbsp;</td>
    <td>&nbsp;</td>
    <?php } ?>
    <td><?php
	if ($backgrounds5 != "") {
    echo "$backgrounds5 </td><td>$backgrounds5val</td>";
	} else {
	?>
&nbsp;</td>
    <td>&nbsp;</td>
    <?php } ?>
    <td><?php
	if ($backgrounds6 != "") {
    echo "$backgrounds6 </td><td>$backgrounds6val</td>";
	} else {
	?>
&nbsp;</td>
    <td>&nbsp;</td>
    <?php } ?>
  </tr>
  <tr>
    <td><?php
	if ($backgrounds7 != "") {
    echo "$backgrounds7 </td><td>$backgrounds7val</td>";
	} else {
	?>
&nbsp;</td>
    <td>&nbsp;</td>
    <?php } ?>
    <td><?php
	if ($backgrounds8 != "") {
    echo "$backgrounds8 </td><td>$backgrounds8val</td>";
	} else {
	?>
&nbsp;</td>
    <td>&nbsp;</td>
    <?php } ?>
    <td><?php
	if ($backgrounds9 != "") {
    echo "$backgrounds9 </td><td>$backgrounds9val</td>";
	} else {
	?>
&nbsp;</td>
    <td>&nbsp;</td>
    <?php } ?>
  </tr>
  <tr>
    <td colspan="6">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6"><strong>Arts:</strong></td>
  </tr>
  <tr>
    <td><?php echo $supernat1; ?></td>
    <td><?php echo $supernat1val; ?></td>
    <td><?php echo $supernat2; ?></td>
    <td><?php echo $supernat2val; ?></td>
    <td><?php echo $supernat3; ?></td>
    <td><?php echo $supernat3val; ?></td>
  </tr>
  <tr>
    <td><?php echo $supernat4; ?></td>
    <td><?php echo $supernat4val; ?></td>
    <td><?php echo $supernat5; ?></td>
    <td><?php echo $supernat5val; ?></td>
    <td><?php echo $supernat6; ?></td>
    <td><?php echo $supernat6val; ?></td>
  </tr>
  <tr>
    <td> <?php echo $supernat7; ?></td>
    <td><?php echo $supernat7val; ?></td>
    <td><?php echo $supernat8; ?></td>
    <td><?php echo $supernat8val; ?></td>
    <td><?php echo $supernat9; ?></td>
    <td><?php echo $supernat9val; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6"><strong>Realms</strong></td>
  </tr>
  <tr>
    <td><strong><em>Actor</em></strong> </td>
    <td><?php echo $realmactor; ?></td>
    <td><strong><em>Fea</em></strong></td>
    <td><?php echo $realmfae; ?></td>
    <td><em><strong>Nature</strong></em></td>
    <td><?php echo $realmnature; ?></td>
  </tr>
  <tr>
    <td><strong><em>Prop</em></strong></td>
    <td><?php echo $realmprop; ?></td>
    <td><strong><em>Scene</em></strong></td>
    <td><?php echo $realmscene; ?></td>
    <td><em><strong>Time</strong></em></td>
    <td><?php echo $realmtime; ?></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><strong><em>Merits:</em></strong></td>
    <td colspan="2"><strong><em>Total:</em></strong></td>
    <td colspan="2"><?php echo $meritstotal; ?>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6"><?php echo $merits; ?></td>
  </tr>
  <tr>
    <td colspan="2"><strong><em>Flaws:</em></strong></td>
    <td colspan="2"><strong><em>Total:</em></strong></td>
    <td colspan="2"><?php echo $flawstotal; ?></td>
  </tr>
  <tr>
    <td colspan="6"> <?php echo $flaws; ?></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6"><div align="center"><strong>Other</strong></div></td>
  </tr>
  <tr>
    <td><strong><em>Banality Perm</em></strong></td>
    <td><?php echo $banalityperm; ?></td>
    <td><em><strong>Glamour Perm</strong></em></td>
    <td><?php echo $glamourperm; ?></td>
    <td><em><strong>Willpower perm</strong></em></td>
    <td><?php echo $willpowerperm; ?></td>
  </tr>
  <tr>
    <td><strong><em>Banality Temp</em></strong></td>
    <td><?php echo $banalitytemp; ?></td>
    <td><em><strong>Glamour temp</strong></em></td>
    <td><?php echo $glamourtemp; ?></td>
    <td><em><strong>Willpower temp</strong></em></td>
    <td><?php echo $willpowertemp; ?></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6"><strong><em>Equipment on Character:</em></strong></td>
  </tr>
  <tr>
    <td colspan="6"><?php echo $equipment; ?></td>
  </tr>
  <tr>
    <td colspan="6"><em><strong>Equipment off Character: </strong></em></td>
  </tr>
  <tr>
    <td colspan="6"><?php echo $equiphome; ?></td>
  </tr>
  <tr>
    <td colspan="6"><em><strong>Misc:</strong></em></td>
  </tr>
  <tr>
    <td colspan="6"><?php echo $misc; ?></td>
  </tr>
  <tr>
    <td colspan="6"><div align="center">  
    </div></td>
  </tr>
</table>

<?php
} else {
?>
<br>
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
print COM_siteFooter();
?>