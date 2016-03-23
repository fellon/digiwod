<?php
require_once('../lib-common.php');
print COM_siteHeader();
?>
<p>AutoUpdater</p>
<p>What's needed in this system?</p>
<p>A way to tell what venue the character is from.</p>
<p>A dropdown list of all things they can purchase. Based on Venue ST input.</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="">
  <table width="100%"  border="1">
    <tr>
      <td><table width="100%"  border="1">
        <tr>
          <td>Things to buy </td>
          <td><select name="select">
            <option selected>--Select--</option>
            <option>Ability</option>
            <option>Attribute</option>
            <option>Arconi</option>
            <option>Buy off Flaw</option>
          </select></td>
          <td>Experience Points </td>
          <td><input name="textfield2" type="text" value="AutoFill"></td>
          <td>Character Name: </td>
          <td><input name="textfield3" type="text" value="AutoFill"></td>
        </tr>
        <tr>
          <td>Venue</td>
          <td>VanueName</td>
          <td>Specific Request</td>
          <td colspan="3"><input name="textfield4" type="text" value="Write in here" size="45"></td>
          </tr>
        <tr>
          <td>Reason:</td>
          <td colspan="4"><input name="textfield" type="text" value="Write in here" size="45"></td>
          <td><input type="submit" name="Submit" value="Request Expenditure"></td>
        </tr>
      </table></td>
    </tr>
  </table>
</form>
<p>&nbsp; </p>
<?php
print COM_siteFooter();
?>
