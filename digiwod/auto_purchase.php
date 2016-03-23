<?php
require_once('../lib-common.php');
print COM_siteHeader();
?>
<form name="form1" method="post" action="">
  <table width="100%"  border="1">
    <tr>
      <td>Character name </td>
      <td><input type="text" name="textfield3"></td>
      <td>Budget</td>
      <td><input type="text" name="textfield"></td>
      <td>Exchange rate </td>
      <td><input type="text" name="textfield2"></td>
    </tr>
    <tr>
      <td>Items:</td>
      <td><select name="select2">
      </select></td>
      <td>Property</td>
      <td><select name="select5">
      </select></td>
      <td>Vehicles</td>
      <td><select name="select">
      </select></td>
    </tr>
    <tr>
      <td>Armaments</td>
      <td><select name="select3">
      </select></td>
      <td>Electronics</td>
      <td><select name="select4">
      </select></td>
      <td>Misc</td>
      <td><select name="select6">
      </select></td>
    </tr>
    <tr>
      <td>Total</td>
      <td><input type="text" name="textfield4"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Make Purchase"></td>
    </tr>
  </table>
  </form>
<?php
print COM_siteFooter();
?>