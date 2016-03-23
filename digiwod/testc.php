<?php
require_once('../lib-common.php');
	if (empty ($_USER['uid']))
    {   
		header("Location: http://www.willowhaven.org/willowchat/index.php");
 		exit;
    }
	if ($_USER['uid'] != 5)
    {   
		header("Location: http://www.willowhaven.org/willowchat/index.php");
 		exit;
    }
	print COM_siteHeader();
?>
<APPLET NAME='DigiChat' CODEBASE='http://69.226.156.122/DigiChat/DigiClasses/' 
			CODE='com.diginet.digichat.client.DigiChatApplet' 
			HEIGHT=100 WIDTH=200 ALIGN='MIDDLE' 
			ARCHIVE=Client.jar MAYSCRIPT>
            <PARAM NAME=cabbase value=Client.cab>
            <PARAM NAME=MenuItem1 VALUE='Willowhaven.org'>
            <PARAM NAME=MenuLocation1 VALUE=http://www.willowhaven.org>
            <PARAM NAME=MenuItem2 VALUE='Willowchat Forums'>
            <PARAM NAME=MenuLocation2 VALUE=http://www.willowhaven.org>
            <PARAM NAME=siteID VALUE=1000>
            <PARAM NAME=background VALUE=FFFFFF>
            <PARAM NAME=textcolor VALUE=000000>
            <PARAM NAME=nickname VALUE="Guest">
			<PARAM NAME="password" VALUE="">
            <PARAM NAME=email VALUE="test@willowhaven.org">
            <PARAM NAME=Gender VALUE=Male>
            <PARAM NAME=Age VALUE=26>
            <PARAM NAME=Icon VALUE=0>
            <PARAM NAME="exitmessage" VALUE="This is a exit">
            <PARAM NAME=Comments VALUE="Description: I am me.">
            <PARAM NAME=url value="http://www.willowhaven.org">
            DigiChat requires a Java Compatible web browser to run. 
          </APPLET>
		  <?php
print COM_siteFooter();
?>
