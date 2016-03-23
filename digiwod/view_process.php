<?php
// view processor

// We need to get the name from the selecter, and the venue.

//So lets take $_POST[viewing]  and make it a hidden.
// the other variable is going to be a venue variable. I can pull that from another page.

// Load globals
	require_once('../lib-common.php');

// Check security levels

// Load wrapper
	print COM_siteHeader(); 

// Load character and check the venue
	$query = "SELECT * FROM characters WHERE charname='$_POST[viewing]'";
	$query2 = mysql_db_query("willowhaven", $query) or die ("I'm sorry.  No one by that name is currently in the database.");
	extract(mysql_fetch_array($query2));

// Set venue
	if ($venue == Mortal)
			{
			$venueSelect = "Mortal";
			$action = "view_mortal.php";
			}
	if ($venue == Vampire)
			{
			$venueSelect = "Vampire";
			$action = "view_vamp.php";
			}
	if ($venue == Changeling)
			{
			$venueSelect = "Changeling";
			$action = "view_changeling.php";
			}
	if ($venue == Mage)
			{
			$venueSelect = "Mage";
			$action = "view_mage.php";
			}
	if ($venue == Wraith)
			{
			$venueSelect = "Wraith";
			$action = "view_wraith.php";
			}
	if ($venue == Werewolf)
			{
			$venueSelect = "Werewolf";
			$action = "view_werewolf.php";
			}
	if ($venue == KOE)
			{
			$venueSelect = "KOE";
			$action = "view_koe.php";
			}
	if ($venue == Mummy)
			{
			$venueSelect = "Mummy";
			$action = "view_mummy.php";
			}
	if ($venue == Demon)
			{
			$venueSelect = "Demon";
			$action = "view_demon.php";
			}
	if ($venue == Hunter)
			{
			$venueSelect = "Hunter";
			$action = "view_hunter.php";
			}
?>
<form name="form1" method="post" action="<?php echo $action; ?>">
 <table width="100%" border="1">
  <tr> 
    <td colspan="2">Is this the character you want to view? </td>
    <td>Venue: <?php echo $venueSelect; ?>      </td>
  </tr>
  <tr> 
    <td width="27%">Character Name:</td>
    <td colspan="2"><?php echo "$_POST[viewing]"; ?>&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="2">
      <input name="viewing" type="hidden" id="viewing" value="<?php echo "$_POST[viewing]"; ?>">
      <input name="viewpass" type="hidden" id="viewpass" value="<?php echo "$_POST[viewpass]"; ?>"> 
      <input name="radioView" type="radio" value="radiobutton">  
View 
</td>
    <td width="23%"><div align="right">
      <input name="submit" type="submit" value="Show Sheet to View">
    </div></td>
  </tr>
</table>
</form>
<?php
// Print the wrapper footer
	print COM_siteFooter();
?>