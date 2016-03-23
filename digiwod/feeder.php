<?php
require_once('../lib-common.php');
print COM_siteHeader();
?>
<form name="form1" method="post" action="">
  <table width="100%"  border="1">
    <tr>
      <td><select name="select">
        <option selected>--Select--</option>
      </select> 
      Character Name </td>
      <td><div align="right">
          <select name="select2">
            <option selected>--Select--</option>
                      </select> 
        Location </div></td>
    </tr>
    <tr>
      <td>Dominate 
      <input type="checkbox" name="checkbox" value="checkbox"> 
      Presence
      <input type="checkbox" name="checkbox2" value="checkbox">
      Obfuscate 
      <input type="checkbox" name="checkbox3" value="checkbox">
      Potence 
      <input type="checkbox" name="checkbox4" value="checkbox"></td>
      <td>Misc</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="right">
        <input type="submit" name="Submit" value="Feed">
      </div></td>
    </tr>
  </table>
  </form>

<p>This is just the framework. AKA a whats it look like type of thing. <br>
  Disciplines will only be a option if the character has the disciplines. </p>
<?php
print COM_siteFooter();
?>