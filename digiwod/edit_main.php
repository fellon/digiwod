<?php
// Edit Main ver 1.5
// This page will select the venue of the character that needs to be editied.

// Load globals
	require_once('../lib-common.php');

// Check security levels

// Load wrapper
	print COM_siteHeader(); 
	
?>


<form name="form1" method="post" action="edit_char.php">
  <table width="37%"  border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="2"><strong><em>Please choose a venue </em></strong></td>
    </tr>
    <tr>
      <td width="40%">Mortal</td>
      <td width="60%" rowspan="10"><input name="radioType" type="radio" value="mortal">        <br>        <input name="radioType" type="radio" value="vampire">
        <br>        <input name="radioType" type="radio" value="changeling">
        <br>        <input name="radioType" type="radio" value="mage">
        <br>        <input name="radioType" type="radio" value="wraith">
        <br>        <input name="radioType" type="radio" value="werewolf">
        <br>        <input name="radioType" type="radio" value="KOE">
        <br>        <input name="radioType" type="radio" value="mummy"> 
        <strong>Not supported<br> 
        </strong>        <input name="radioType" type="radio" value="demon"> 
        <strong>Not Supported </strong>        <br>        <input name="radioType" type="radio" value="hunter"> 
        <strong>Not Supported </strong></td>
    </tr>
    <tr>
      <td>Vampire</td>
    </tr>
    <tr>
      <td>Changeling</td>
    </tr>
    <tr>
      <td>Mage</td>
    </tr>
    <tr>
      <td>Wraith</td>
    </tr>
    <tr>
      <td>Werewolf</td>
    </tr>
    <tr>
      <td>KOE</td>
    </tr>
    <tr>
      <td>Mummy</td>
    </tr>
    <tr>
      <td>Demon</td>
    </tr>
    <tr>
      <td>Hunter</td>
    </tr>
    <tr>
      <td colspan="2">
        <div align="right">
          <input type="submit" name="Submit" value="Next -&gt;">
        </div></td>
    </tr>
  </table>
</form>
<?php
// Print the wrapper footer
	print COM_siteFooter();
?>
