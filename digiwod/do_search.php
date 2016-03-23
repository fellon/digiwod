<?php
// Search engine.  This file passes the variables to the editor.
session_start();
require_once('../lib-common.php');
print COM_siteHeader();
?>
<form name="form1" method="post" action="edit_char.php">
  <table width="100%"  border="1">
    <tr>
      <td><?php echo $_GET[do_edit]; ?></td>
      <td>Edit this character? 
      <input name="iamediting" type="hidden" id="iamediting" value="<?php echo $_GET[do_edit]; ?>"></td>
    </tr>
    <tr>
      <td><input type="submit" name="Submit" value="Yes, Edit"></td>
      <td><a href="search.php">Return to Search System </a></td>
    </tr>
  </table>
</form>
<?php
print COM_siteFooter();
?>