<?php
require_once('../lib-common.php');
$pname = $_POST[pname];
print COM_siteHeader();
?>
You are editing <?php echo $_POST[pname]; ?>?<br>
      Just enter the updated info into the editor and then press submit.<br>
      If you have reached this page by error, <a href="portal.php">Click here</a>.
        <?php 
		// echo $pname;		
 $query = mysql_db_query("willowhaven", "SELECT * FROM characters WHERE charname='$pname'") or die("I'm sorry.  No one by that name is currently in the database.");
  extract(mysql_fetch_array($query));
 //$query="SELECT * FROM 'characters' WHERE charname='$pedit'";
 //$query2=mysql_db_query($query) or die("I'm sorry.  No one by that name is currently in the database.");
 // echo "Are we this far?";
 // extract(mysql_fetch_array($query2)); 
?>
      <FORM METHOD="POST" ACTION="do_pedit_char.php">
        <p align="left">&nbsp;</p>
	<input name="pedit_char" type="hidden" value="<?php echo $pname; ?>">
        <table width="100%"  border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="56%">Character Name: <?php echo $pname; ?></td>
            <td width="44%"><div align="center">
            </div></td>
          </tr>
          <tr>
            <td colspan="2">Description:</td>
          </tr>
          <tr>
            <td colspan="2"><textarea name="description" cols="60" id="description"><?php echo $description; ?></textarea></td>
          </tr>
          <tr>
            <td>Character URL:
              <input name="charURL" type="text" id="charURL" value="<?php echo $charURL; ?>" size="40">
Now Bigger! </td>
            <td>View Only Pass: 
            <input name="viewpass" type="text" id="viewpass"></td>
          </tr>
          <tr>
            <td>Exit Message: 
            <input name="exitmsg" type="text" id="exitmsg" value="<?php echo $exitmsg; ?>" size="40"></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input type="SUBMIT" name="submit" value="Submit"></td>
          </tr>
        </table>
      </form>
    <?php
print COM_siteFooter();
?>