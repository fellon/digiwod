<?php

require_once('../lib-common.php');

echo COM_siteHeader ('none');
?>
<table width="100%"  border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="22%">
	<?php
//	echo COM_showBlock ('sidegames', '', '');
echo COM_startBlock ('Block title here');

// your stuff here
echo "This is a test";
echo COM_endBlock ();
?>
	</td>
    <td width="56%">This is the center block area.... Look at me and my testing self. </td>
    <td width="22%">This is the right block area </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<?php
echo COM_siteFooter ();

?>