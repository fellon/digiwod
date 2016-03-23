<?php
 // check for correct $_CONF permission
 // geeklog is user logged in check?
 // first checks for empty user name.
 // then checks to see if the config file calls for user login.
 // Checks to see if they are
    if (empty ($_USER['username']) &&
        (($_CONF['loginrequired'] == 1) && ($uid != 2)) {
        return COM_refresh ($_CONF['site_url'] . '/index.php');
    }
	
	
	
	    // check for correct 'to' user preferences
    $result = DB_query ("SELECT emailfromadmin,emailfromuser FROM {$_TABLES['userprefs']} WHERE uid = '$uid'");
    $P = DB_fetchArray ($result);
    if (SEC_inGroup ('Root') || SEC_hasRights ('user.mail')) {
        $isAdmin = true;
    } else {
        $isAdmin = false;
    }
    if ((($P['emailfromadmin'] != 1) && $isAdmin) ||
        (($P['emailfromuser'] != 1) && !$isAdmin)) {
        return COM_refresh ($_CONF['site_url'] . '/index.php');
    }
?>
	
<?php	
	// A touch at error messages.
	COM_errorLog("",1);
	?>
	
	
	
	<?php
	//Working on DB connections
	
	$maxstories = 0;

if (isset ($_USER['uid']) && ($_USER['uid'] > 1)) {
    $result = DB_query("SELECT noboxes,maxstories,tids,aids FROM {$_TABLES['userindex']} WHERE uid = '{$_USER['uid']}'");
    $U = DB_fetchArray($result);
    if ($U['maxstories'] >= $_CONF['minnews']) {
        $maxstories = $U['maxstories'];
    }
    if ((!empty($topic)) && ($maxstories == 0)) {
        $tmp = DB_query("SELECT limitnews FROM {$_TABLES['topics']} WHERE tid = '{$topic}'");
        $T = DB_fetchArray($tmp);
        if ($T['limitnews'] >= $_CONF['minnews']) {
            $maxstories = $T['limitnews'];
}
    }
    if ($maxstories == 0) {
        $maxstories = $_CONF['limitnews'];
    }
    $U['maxstories'] = $maxstories;
} else {
    $U['maxstories'] = $_CONF['limitnews'];
}
?>