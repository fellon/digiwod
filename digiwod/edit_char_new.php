<?php
// Adjust all of this data to go to the top of all the editor pages.
// Make this page into a selection system.  It will display a list of all of the
// characters in the database, then allow for a person to click the button and it will take them there.
// List will be displayed alphabeticly. Upon selection, user will be shunted to correct sheet.
// Use radio buttons on bottom to allow for certin selections.
// Change type, Edit, and view.  Edit is default.

// Load globals
	require_once('../lib-common.php');

// Check security levels

// Load wrapper
	print COM_siteHeader(); 

// Set venue
	if ($_POST[radioType] == mortal)
			{
			$venueSelect = "Mortal";
			$action = "edit_mortal.php";
			}
	if ($_POST[radioType] == vampire)
			{
			$venueSelect = "Vampire";
			$action = "edit_vampire.php";
			}
	if ($_POST[radioType] == changeling)
			{
			$venueSelect = "Changeling";
			$action = "edit_changeling.php";
			}
	if ($_POST[radioType] == mage)
			{
			$venueSelect = "Mage";
			$action = "edit_mage.php";
			}
	if ($_POST[radioType] == wraith)
			{
			$venueSelect = "Wraith";
			$action = "edit_wraith.php";
			}
	if ($_POST[radioType] == werewolf)
			{
			$venueSelect = "Werewolf";
			$action = "edit_werewolf.php";
			}
	if ($_POST[radioType] == KOE)
			{
			$venueSelect = "KOE";
			$action = "edit_koe.php";
			}
	if ($_POST[radioType] == mummy)
			{
			$venueSelect = "Mummy";
			$action = "edit_mummy.php";
			}
	if ($_POST[radioType] == demon)
			{
			$venueSelect = "Demon";
			$action = "edit_demon.php";
			}
	if ($_POST[radioType] == hunter)
			{
			$venueSelect = "Hunter";
			$action = "edit_hunter.php";
			}
?>
 <form name="form1" method="post" action="<?php echo $action; ?>">
 <table width="100%" border="1">
  <tr> 
    <td colspan="2">Please choose a character to work with :</td>
    <td>Venue: <?php echo $venueSelect; ?>
      <input name="venueSelect" type="hidden" id="venueSelect" value="<?php echo $venueSelect; ?>"></td>
  </tr>
  <tr> 
    <td width="27%">Character Name:</td>
    <td colspan="2"><select name="iamediting">
        <option selected>--Select Character--</option>
<?php
	// $query="SELECT * FROM characters WHERE playerid = '$_USER[uid]'";
	$query="SELECT * FROM characters WHERE venue = '$venueSelect'";
    $query2=mysql_query($query) or die("Could not find chars");
 	while ($row = mysql_fetch_array($query2)) 
		{
		$charname = $row['charname'];
		echo "<option value='$charname'>$charname</option>";
		}	
?>
      </select></td>
    </tr>
  <tr> 
    <td colspan="2"> <input type="hidden" name="RequiredFields" value="iamediting"> 
      <input name="radioEdit" type="radio" value="radiobutton" checked>
Edit 
<input name="radioView" type="radio" value="radiobutton">  
View 
<input name="radioChange" type="radio" value="radiobutton">
 Change Type  
    </td>
    <td width="23%"><div align="right">
      <input name="submit" type="submit" value="Show Sheet to Edit">
    </div></td>
  </tr>
</table>
</form>
<?php
// Print the wrapper footer
	print COM_siteFooter();
?>

