<?php
require_once('../lib-common.php');
print COM_siteHeader();
 ?>
<form name="viewer" method="post" action="view_process.php">
 <table width="75%" border="1" align="center">
  <tr> 
    <td>Character Name:</td>
    <td><select name="viewing">
        <option selected>--Select Character--</option>
<?php
	// $query="SELECT * FROM characters WHERE playerid = '$_USER[uid]'";
	$query="SELECT * FROM characters ORDER BY `charname` ASC";
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
    <td>View Only Password::</td>
    <td><input name="viewpass" type="text" id="viewpass" size="15"></td>
  </tr>
  <tr> 
    <td colspan="2"><input name="submit" type="submit" value="Show Sheet"></td>
  </tr>
</table>
</form>
<?php
print COM_siteFooter();
?>
