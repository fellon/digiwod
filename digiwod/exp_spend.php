
<?php
// Experience spending module

	require_once('../lib-common.php');
	if (empty($_USER['uid']))
    	{   
		header("Location: http://www.willowhaven.org/users.php?mode=new");
 		exit;
    	}
	print COM_siteHeader();
?>
This module is not in service yet. Please be patient.
<?php
	print COM_siteFooter();
?>