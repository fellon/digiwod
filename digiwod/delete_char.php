<?php
	require_once('../lib-common.php');
	print COM_siteHeader();
?> 
    </p>
      <p><em>Are you sure you want to delete <?php echo $_POST[del_char]; ?>?<br>
        This is irreversible. Once you push the confirm button your character is dropped into the maw of Oblivion itself. There is no return.
      </em></p>
      <FORM METHOD="POST" ACTION="do_delete_char.php">
        <p align="left">&nbsp;</p>
		<input name="del_char" type="hidden" value="<?php echo $_POST[del_char]; ?>">
        <table width="100%"  border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="50%">Character Name: <?php echo $_POST[del_char]; ?></td>
            <td width="50%"><div align="center">
              <input type="SUBMIT" name="submit" value="Delete">
            </div></td>
          </tr>
        </table>
      </form>
<?php
	print COM_siteFooter();
?>