<?php
	require_once('../lib-common.php');
	// begin auth checks.
	if (empty ($_USER['uid']))
    	{   
		header("Location: http://www.willowhaven.org/willowchat/portal.php");
 		exit;
    	}
	print COM_siteHeader();
?>
<p>
You are creating a OOC Character. If this is not what you want to do please <a href="portal.php">click here</a>.<br>
      For fields please use only Alpha numeric ( A - Z : 0 - 1 ) characters along with the Underscore ( _ ) character.<br>
* denotes fields that are required. Attempting to save a character that is not complete will reload the creation page with all blank fields. You are warned.</em>
</p>    
	<form method="post" action="do_addOOC.php">
        <table width="50%" border="0" cellpadding="0" cellspacing="0">
          <tr> 
            <td colspan="2">Character Name: * </td>
            <td colspan="4">Apparent Character Age: </td>
          </tr>
          <tr> 
            <td colspan="2"> <input name="charname" type="text" id="charname" size="25"></td>
            <td colspan="4"> <input name="charage" type="text" id="charage" size="5"></td>
          </tr>
          <tr> 
            <td colspan="2">Character Gender: * </td>
            <td colspan="4"><select name="charsex" id="select60">
              <option selected>--Select--</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select></td>
          </tr>
          <tr> 
            <td colspan="6">Description: * Background story info will be in a seperate field. </td>
          </tr>
          <tr> 
            <td colspan="6"><div align="left">
                <textarea name="description" cols="60" id="description">A breif description of your character</textarea>
            </div></td>
          </tr>
          <tr> 
            <td colspan="6">Exit Message:</td>
          </tr>
          <tr> 
            <td colspan="6"> <input name="exitmsg" type="text" id="exitmsg6" value="My exit message" size="60"> 
            </td>
          </tr>
          <tr>
            <td colspan="6">&nbsp;</td>
          </tr>
          <tr> 
            <td colspan="6"><div align="center"><font size="3"><strong>Attributes</strong></font></div></td>
          </tr>
          <tr> 
            <td width="14%">Strength: </td>
            <td width="19%"><select name="str" id="select59">
                <option value="0">0</option>
                <option value="1" selected>1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select></td>
            <td width="14%">Charisma: </td>
            <td width="19%"><select name="cha" id="select62">
                <option value="0">0</option>
                <option value="1" selected>1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select></td>
            <td width="16%">: Appearance: </td>
            <td width="18%"><select name="app" id="select64">
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
            </select></td>
          </tr>
          <tr> 
            <td colspan="2">&nbsp;</td>
            <td colspan="2">&nbsp;</td>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr> 
            <td colspan="6">Equipment Requests:</td>
          </tr>
          <tr> 
            <td colspan="6"><input name="equipment" type="text" id="equipment" size="93"></td>
          </tr>
          <tr> 
            <td colspan="6"><div align="center"> 
                <br>
                <input type="submit" name="Submit" value="Submit A OOC Character">
              </div></td>
          </tr>
        </table>
      </form>
<?php
print COM_siteFooter();
?>