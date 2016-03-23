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
<br>
<table width="100%"  border="1">
  <tr>
    <td><strong><em>Character Name:</em></strong></td>
    <td><em><strong>Apparent Character Age: </strong></em></td>
  </tr>
  <tr>
    <td><?php echo $charname; ?></td>
    <td><?php echo $charage; ?></td>
  </tr>
  <tr>
    <td><strong><em>Description:</em></strong></td>
    <td><strong><em>Concept:</em></strong></td>
  </tr>
  <tr>
    <td><?php echo $description; ?></td>
    <td><?php echo $concept; ?></td>
  </tr>
</table>
<?php
// View only passwords stuff begins here.
if ((($statview == "N") && ($_POST[viewpass] == $viewpass)) || $statview == "Y" || $_SESSION[groups] == "ast")
    {
	?> 
<table width="100%" border="1">
  <tr>
    <td colspan="2"><em><strong>Character Gender:</strong></em></td>
    <td colspan="4"><em><strong>Tribe:</strong></em></td>
  </tr>
  <tr>
    <td colspan="2">
      <?php echo $charsex; ?>&nbsp;</td>
    <td colspan="4">
      <?php echo $tribe; ?>&nbsp;
    </td>
  </tr>
  <tr>
    <td colspan="2"><em><strong>Breed Form: </strong></em></td>
    <td colspan="4"><em><strong>Auspice: </strong></em></td>
  </tr>
  <tr>
    <td height="25" colspan="2"><?php echo $breed; ?>&nbsp;</td>
    <td colspan="4"><?php echo $auspice; ?>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><em><strong>Pack Name: </strong></em></td>
    <td colspan="4"><em><strong>Pack Totem: </strong></em></td>
  </tr>
  <tr>
    <td colspan="2"><?php echo $packname; ?>&nbsp;</td>
    <td colspan="4"><?php echo $packtotem; ?>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><em><strong>Nature: </strong></em></td>
    <td colspan="4"><em><strong>Demeanor:</strong></em></td>
  </tr>
  <tr>
    <td colspan="2">
        <?php echo $nature; ?>&nbsp;
    </td>
    <td colspan="4">
      <?php echo $demeanor; ?>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6"><em><strong>Exit Message:</strong></em></td>
  </tr>
  <tr>
    <td colspan="6">
      <?php echo $exitmsg; ?>&nbsp;
    </td>
  </tr>
  <tr>
    <td colspan="2"><em><strong>Rank: </strong></em></td>
    <td colspan="4"><em><strong>Experience</strong></em>: <?php echo $experience; ?></td>
  </tr>
  <tr>
    <td colspan="2"><?php echo $rank; ?>&nbsp;
    </td>
    <td colspan="4">
      <div align="left"></div></td>
  </tr>
  <tr>
    <td colspan="6"><em><strong>Created on</strong></em> <?php echo $created; ?>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6"><em><strong>Last played on:</strong></em> <?php echo $lastplay; ?>&nbsp;</td>
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
    <td width="18%">Strength: </td>
    <td width="19%"><?php echo $str; ?>&nbsp;</td>
    <td width="13%">Charisma: </td>
    <td width="11%"><?php echo $cha; ?>&nbsp;</td>
    <td width="16%">Perception: </td>
    <td width="23%"><?php echo $per; ?>&nbsp;</td>
  </tr>
  <tr>
    <td>Dexterity: </td>
    <td><?php echo $dex; ?>&nbsp;</td>
    <td>Manipulation: </td>
    <td><?php echo $man; ?>&nbsp;</td>
    <td>Intelligence: </td>
    <td><?php echo $intel; ?>&nbsp;</td>
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
    <td>&nbsp;</td><?php } ?>
            <td><?php
	if ($other2 != "") {
    echo "$other2 </td><td>$other2val</td>";
	} else {
	?>
	&nbsp;</td>
    <td>&nbsp;</td><?php } ?>
            <td><?php
	if ($other3 != "") {
    echo "$other3 </td><td>$other3val</td>";
	} else {
	?>
	&nbsp;</td>
    <td>&nbsp;</td><?php } ?>
          </tr>
          <tr>
            <td><?php
	if ($other4 != "") {
    echo "$other4 </td><td>$other4val</td>";
	} else {
	?>
	&nbsp;</td>
    <td>&nbsp;</td><?php } ?>
            <td><?php
	if ($other5 != "") {
    echo "$other5 </td><td>$other5val</td>";
	} else {
	?>
	&nbsp;</td>
    <td>&nbsp;</td><?php } ?>
            <td><?php
	if ($other6 != "") {
    echo "$other6 </td><td>$other6val</td>";
	} else {
	?>
	&nbsp;</td>
    <td>&nbsp;</td><?php } ?>
          </tr>
          <tr>
            <td><?php
	if ($other7 != "") {
    echo "$other7 </td><td>$other7val</td>";
	} else {
	?>
	&nbsp;</td>
    <td>&nbsp;</td><?php } ?>
            <td><?php
	if ($other8 != "") {
    echo "$other8 </td><td>$other8val</td>";
	} else {
	?>
	&nbsp;</td>
    <td>&nbsp;</td><?php } ?>
            <td><?php
	if ($other9 != "") {
    echo "$other9 </td><td>$other9val</td>";
	} else {
	?>
	&nbsp;</td>
    <td>&nbsp;</td><?php } ?>
          </tr>
          <tr>
            <td><?php
	if ($other10 != "") {
    echo "$other10 </td><td>$other10val</td>";
	} else {
	?>
	&nbsp;</td>
    <td>&nbsp;</td><?php } ?>
            <td><?php
	if ($other11 != "") {
    echo "$other11 </td><td>$other11val</td>";
	} else {
	?>
	&nbsp;</td>
    <td>&nbsp;</td><?php } ?>
            <td><?php
	if ($other12 != "") {
    echo "$other12 </td><td>$other12val</td>";
	} else {
	?>
	&nbsp;</td>
    <td>&nbsp;</td><?php } ?>
          </tr>
          <tr>
            <td><?php
	if ($other13 != "") {
    echo "$other13 </td><td>$other13val</td>";
	} else {
	?>
	&nbsp;</td>
    <td>&nbsp;</td><?php } ?>
            <td>
                <?php
	if ($other14 != "") {
    echo "$other14 </td><td>$other14val</td>";
	} else {
	?>
	&nbsp;</td>
    <td>&nbsp;</td><?php } ?>
            <td><?php
	if ($other15 != "") {
    echo "$other15 </td><td>$other15val</td>";
	} else {
	?>
	&nbsp;</td>
    <td>&nbsp;</td><?php } ?>
          </tr>
  <tr>
    <td colspan="6">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6"><em><strong>Specialties: </strong></em></td>
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
    <td>&nbsp;</td><?php } ?>
    <td><?php
	if ($backgrounds2 != "") {
    echo "$backgrounds2 </td><td>$backgrounds2val</td>";
	} else {
	?>
	&nbsp;</td>
    <td>&nbsp;</td><?php } ?>
    <td>
	<?php
	if ($backgrounds3 != "") {
    echo "$backgrounds3 </td><td>$backgrounds3val</td>";
	} else {
	?>
	&nbsp;</td>
    <td>&nbsp;</td><?php } ?>
  </tr>
  <tr>
    <td><?php
	if ($backgrounds4 != "") {
    echo "$backgrounds4 </td><td>$backgrounds4val</td>";
	} else {
	?>
	&nbsp;</td>
    <td>&nbsp;</td><?php } ?>
    <td><?php
	if ($backgrounds5 != "") {
    echo "$backgrounds5 </td><td>$backgrounds5val</td>";
	} else {
	?>
	&nbsp;</td>
    <td>&nbsp;</td><?php } ?>
    <td><?php
	if ($backgrounds6 != "") {
    echo "$backgrounds6 </td><td>$backgrounds6val</td>";
	} else {
	?>
	&nbsp;</td>
    <td>&nbsp;</td><?php } ?>
  </tr>
  <tr>
    <td><?php
	if ($backgrounds7 != "") {
    echo "$backgrounds7 </td><td>$backgrounds7val</td>";
	} else {
	?>
	&nbsp;</td>
    <td>&nbsp;</td><?php } ?>
    <td><?php
	if ($backgrounds8 != "") {
    echo "$backgrounds8 </td><td>$backgrounds8val</td>";
	} else {
	?>
	&nbsp;</td>
    <td>&nbsp;</td><?php } ?>
    <td><?php
	if ($backgrounds9 != "") {
    echo "$backgrounds9 </td><td>$backgrounds9val</td>";
	} else {
	?>
	&nbsp;</td>
    <td>&nbsp;</td><?php } ?>
  </tr>
  <tr>
    <td colspan="6">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6"><strong>Gifts</strong></td>
  </tr>
  <tr>
    <td colspan="6"><em><strong>Breed Gifts</strong></em></td>
  </tr>
  <tr>
    <td colspan="6"><?php echo $bgifts; ?></td>
  </tr>
  <tr>
    <td colspan="6"><em><strong>Auspice Gifts</strong></em></td>
  </tr>
  <tr>
    <td colspan="6"><?php echo $agifts; ?>
    </td>
  </tr>
  <tr>
    <td colspan="6"><em><strong>Tribe Gifts</strong></em></td>
  </tr>
  <tr>
    <td colspan="6"><?php echo $tgifts; ?></td>
  </tr>
  <tr>
    <td colspan="6"><em><strong>Misc. Gifts</strong></em></td>
  </tr>
  <tr>
    <td height="26" colspan="6"><?php echo $mgifts; ?></td>
  </tr>
  <tr>
    <td colspan="6">&nbsp; </td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><em><strong>Merits:</strong></em></td>
    <td colspan="2"><em><strong>Total:</strong></em></td>
    <td colspan="2"><?php echo $meritstotal; ?></td>
  </tr>
  <tr>
    <td colspan="6"><?php echo $merits; ?></td>
  </tr>
  <tr>
    <td colspan="2"><em><strong>Flaws: </strong></em></td>
    <td colspan="2"><em><strong>Total:</strong></em></td>
    <td colspan="2"><?php echo $flawstotal; ?></td>
  </tr>
  <tr>
    <td colspan="6">
      <?php echo $flaws; ?></td>
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
    <td colspan="6"><strong>Reknown</strong></td>
  </tr>
  <tr>
    <td><em><strong>Glory Prm</strong></em></td>
    <td><?php echo $gloryperm; ?></td>
    <td><em><strong>Honor Prm</strong></em></td>
    <td><?php echo $honorperm; ?></td>
    <td><em><strong>Wisdom Prm</strong></em></td>
    <td><?php echo $wisdomperm; ?></td>
  </tr>
  <tr>
    <td><em><strong>Glory Tmp</strong></em></td>
    <td><?php echo $glorytemp; ?></td>
    <td><em><strong>Honor Tmp</strong></em></td>
    <td><?php echo $honortemp; ?></td>
    <td><em><strong>Wisdom Tmp</strong></em></td>
    <td><?php echo $wisdomtemp; ?></td>
  </tr>
  <tr>
    <td><em><strong>Rage Prm</strong></em></td>
    <td><?php echo $rageperm; ?></td>
    <td><em><strong>Gnosis Prm</strong></em></td>
    <td><?php echo $gnosisperm; ?></td>
    <td><em><strong>Willpower Prm</strong></em></td>
    <td>
      <?php echo $willpowerperm; ?></td>
  </tr>
  <tr>
    <td><em><strong>Rage Temp</strong></em></td>
    <td><?php echo $ragetemp; ?></td>
    <td><em><strong>Gnosis Tmp</strong></em></td>
    <td><?php echo $gnosistemp; ?></td>
    <td><em><strong>Willpower Tmp</strong></em></td>
    <td><?php echo $willpowertemp; ?></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6"><em><strong>Equipment on Character:</strong></em></td>
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
    <td colspan="6">
      <?php echo $misc; ?></td>
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
<?php
}
} 
else
{
print "No character selected";
}
print COM_siteFooter();
?>