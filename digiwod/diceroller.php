<?php
	require_once('../lib-common.php');
	if (empty($_USER['uid']))
    	{   
		header("Location: http://www.willowhaven.org/users.php?mode=new");
 		exit;
    	}
	print COM_siteHeader('none');
	print COM_startBlock("Midnight Carnaval Dice Roller 1.1 (The It less then sucks version)");
	
	// Make sure they belong here.
	
	// declare variables
	$action = "$_POST[action]";
	$difficulty = "$_POST[difficulty]";
	$dicepool = "$_POST[dicepool]";
	
////////////////////////////
// New dice roller block. //
////////////////////////////
	function roll_die($dicepool, $difficulty, $action)
		{
		// Define variables
		$sux = 0;
		$botch = 0;
		$bonus = 0;
		$rolling = $dicepool;
		$dice_rolled = 0;
		// Start the dialoge to be returned.
	if ((empty($_POST[charname])) || ($_POST[charname] == "--Select Character--"))
		{
		echo "";
		}
		else
		{
		$info = "<li>$_POST[charname] rolls $dicepool dice to $action with a $difficulty difficulty:";
		// take the number of dice to be rolled and roll the first die
		for ($i=0; $i<$rolling;$i++)
			{
			$die_roll = rand(1,10);
			if ($die_roll == 10)
				{
				$bonus = $bonus + 1;
				}
			if ($die_roll >= $difficulty)
				{
				$sux++;
				}
			if ($die_roll == 1)
				{
				$botch++;
				}
			$info.=" $die_roll";
			$dice_rolled++;
			}
		if ($_POST[reroll10s] == "checked")
			{	
			echo "reroll 10s is checked";
			for ($i=0; $i<$bonus; $i++)
				{
					$bonus_roll = rand(1,10);
					if ($bonus_roll == 10)
						{
						$bonus = $bonus + 1;
						}
					if ($bonus_roll >= $difficulty)
						{
						$sux++;
						}
					if ($bonus_roll == 1)
						{
						$botch++;
						}
					$dice_rolled++;
					$info.=" $bonus_roll";
					$bonus = $bonus - 1;
				}
				$notes.= " Reroll 10s";
			}
			$sux = $sux - $botch;
			if ($_POST[spendWillpower] == "checked")
				{
				echo "spend willpower is checked";
				// Add checking code here. Make sure they have enough willpower to do this.
				$sux = $sux + 1;
				$notes.= "Willpower";
				}				
			if ($sux <= 0)
				{
				$sux = "Botched!";
				}
			$info.=" Total sux: $sux $notes";
			echo $info;
				$query = "SELECT * FROM diceroller WHERE diid='1'";
	$query2=mysql_db_query("willowhaven", $query) or die("Could not find Roll list");
	extract(mysql_fetch_array($query2));
	// incriment the dice roll number
	if ($rollcount == "25") 
		{
		$holder2 = $holder1;
		$holder1 = "";
		$rollcount = "0";
		}
	$rollcount++; // incriment the roll checker
	$rollTotal++;
 	$info.="$holder1";
	// Update the roll holder
	$query = "UPDATE diceroller SET 
  		holder1 = '$info',
		holder2 = '$holder2',
		rollcount = '$rollcount',
		rollTotal = '$rollTotal'
  		WHERE diid = '1'";
	$result = mysql_db_query("willowhaven", $query) or die(mysql_error());
		}
	}
?>
<style type="text/css">
<!--
.style1 {
	font-weight: bold;
	font-style: italic;
}
-->
</style>

  
<p>To roll dice: Enter your character name, dice pool, difficulty, and what your rolling, then hit the Roll Dice button. <br>
Notes: The dice roller is now back into development and will soon have better features added to it. The ability to re roll 10's and to account for willpower. </em></p>
<p>Version 1.5 dice roller: Still in the works. <br>
  AKA that means that this table here at the top is not the one you use to roll dice ... Yet. <br>
  I am also aware of the botch issue. I know that 1's no longer cancel 10's. Though I preffer that system, I will fix that when I am sober. </p>
<form name="form1" method="post" action="diceroller.php">
<table width="100%"  border="1">
  <tr align="left" valign="top">
    <td width="20%"><span class="style1">Name</span>: 
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
     </td>
    <td width="39%"><strong><em>Dice pool</em></strong>:<br>      
      <select name="dicepool" id="dicepool">
        <option value="0" selected>0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
      </select></td>
    <td width="41%"><em><strong>Auto Action</strong></em>: Not Installed <br>      
      <select name="autoAction" id="autoAction">
      <option selected>--Select--</option>
      <option value="brawl">Brawl</option>
      <option value="melee">Melee Attack</option>
      <option value="range">Range Attack</option>
      <option value="crafts">Crafts</option>
      <option value="lying">Lying</option>
      <option value="music">Music</option>
      <option value="feed">Vampire: Feed</option>
      <option value="pathos">Wraith: Gain Pathos</option>
      <option value="shifting">Werewolf: Shifting</option>
      </select></td>
  </tr>
  <tr align="left" valign="top">
    <td><em><strong>Spend Willpower</strong></em>: Not Installed <br>
      <input name="spendWillpower" type="checkbox" id="spendWillpower" value="checked"></td>
    <td><em><strong>Spend</strong></em>: Not Installed <br>      
      <select name="spend" id="spend">
        <option selected>--Select--</option>
        <option value="bloodpoint1">1 Bloodpoint</option>
        <option value="glamour1">1 Glamour</option>
        <option value="pathos1">1 Pathos</option>
        <option value="rage1">1 Rage</option>
      </select></td>
    <td><em><strong>Action</strong></em>:<br>      
      <input name="action" type="text" id="action"></td>
  </tr>
  <tr align="left" valign="top">
    <td><em><strong>Re-Roll 10's</strong></em>:      Not Installed <br>
      <input name="reroll10s" type="checkbox" id="reroll10s" value="checked"></td>
    <td><em><strong>Difficulty</strong></em>:<br>      
      <select name="difficulty" id="difficulty">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6" selected>6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select></td>
    <td><strong><em>Who is the target</em></strong>: Not installed <br> 
      <select name="target" id="target">
        <option value="na" selected>N/A</option>
      </select></td>
  </tr>
  <tr>
    <td><input type="submit" name="Submit2" value="Roll Dice/Refresh"> </td>
    <td align="left" valign="top"><em><strong>Current Roll count</strong></em>:  <?php 
			$query = "SELECT * FROM diceroller WHERE diid='1'";
			$query2=mysql_db_query("willowhaven", $query) or die("Could not find Roll list");
			extract(mysql_fetch_array($query2));
			echo $rollTotal; ?></td>
    <td align="left" valign="top">Dice Rolled: <?php echo $dice_rolled; ?></td>
  </tr>
  <tr>
    <td align="left" valign="top"><em><strong>Current roll</strong></em>:</td>
    <td colspan="2">&nbsp; </td>
    </tr>
  <tr>
    <td colspan="3" align="left" valign="top"><?php 
			$rollResult = roll_die($dicepool,$difficulty,$action);
		echo $roll_result;
?></td>
    </tr>
  <tr>
    <td align="left" valign="top"><em><strong>Previous rolls</strong></em>:</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr align="left" valign="top">
    <td colspan="3"><?php
	$query = "SELECT * FROM diceroller WHERE diid='1'";
	$query2=mysql_db_query("willowhaven", $query) or die("Could not find Roll list");
	extract(mysql_fetch_array($query2));
	echo $holder1; 
	echo $holder2;
	?></td>
    </tr>
</table>
</form>
<p>Quick FAQ:<br>
Q: Was this dice roller made by a person who had to much Jagermister to drink?<br>
A: Yes!</p>
<p>Q: Was the person who wrote this drunk when they put together the FAQ?<br>
  A: Yes!</p>
<p>Q: Did you notice the duality of the last two questions?<br>
  A: &lt;Your answer here&gt;</p>
<p>Q: Will there be more options with this dice roller available in the future?<br>
  A: Yes!</p>
<p>
  <?php
	print COM_endBlock();
	print COM_siteFooter();
?>
</p>
