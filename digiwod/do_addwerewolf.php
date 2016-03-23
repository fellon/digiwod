<?php
// Load up session
require_once('../lib-common.php');
 include_once("striper.inc.php");
	$query = mysql_query("SELECT * FROM characters WHERE charname='$_POST[charname]'");
	$num_rows = mysql_num_rows($query);
 	$uid = $_USER[uid];
 	$username = $_USER[username];
	$amiused = 'false';
	if ($num_rows >= 1)
	{
 	$amiused = 'true';
	}
 	if ($amiused == 'true') 
 		{
		header( "Location: http://www.willowhaven.org/willowchat/cc_changeling.php");
		exit;
	 	}
  $query="INSERT INTO characters (charname, playerid, player, venue) VALUES ('$_POST[charname]','$uid','$username','Werewolf')";
  $query2=mysql_query($query) or die("Could not insert user");

  if ($_POST[statview] == "Y") {
  $viewstat = "Y";
  } else {
  $viewstat = "N";
  }
  $timenow = time();
  // playerid = '$_USER[uid]',
	// player = '$_USER[username]',
  $query = "UPDATE characters SET
  lastplayts = '$timenow',
  created = now(),
  nature = '$_POST[nature]',
  demeanor = '$_POST[demeanor]',
  tribe = '$_POST[tribe]',
  academics = '$_POST[academics]',
  str = '$_POST[str]',
  dex = '$_POST[dex]',
  sta = '$_POST[sta]',
  cha = '$_POST[cha]',
  man = '$_POST[man]',
  app = '$_POST[app]',
  per = '$_POST[per]',
  wit = '$_POST[wit]',
  viewpass = '$_POST[viewpass]',
  statview = '$viewstat',
  sanct = 'NO',
  alertness = '$_POST[alertness]', 
  athletics = '$_POST[athletics]', 
  brawl = '$_POST[brawl]',
  finance = '$_POST[finance]',
  leadership = '$_POST[leadership]',
  dodge = '$_POST[dodge]',
  empathy = '$_POST[empathy]',
  expression = '$_POST[expression]',
  intimidation = '$_POST[intimidation]', 
  primalurge = '$_POST[primalurge]',
  streetwise = '$_POST[streetwise]', 
  subterfuge = '$_POST[subterfuge]', 
  animalk = '$_POST[animalk]', 
  crafts = '$_POST[crafts]', 
  drive = '$_POST[drive]', 
  etiquette = '$_POST[etiquette]', 
  firearms = '$_POST[firearms]', 
  melee = '$_POST[melee]', 
  performance = '$_POST[performance]', 
  security = '$_POST[security]',
  stealth = '$_POST[stealth]', 
  survival = '$_POST[survival]', 
  enigmas = '$_POST[enigmas]', 
  computer = '$_POST[computer]', 
  ritualsab = '$_POST[ritualsab]', 
  investigation = '$_POST[investigation]', 
  law = '$_POST[law]', 
  linguistics = '$_POST[linguistics]', 
  medicine = '$_POST[medicine]', 
  occult = '$_POST[occult]',
  politics = '$_POST[politics]', 
  science = '$_POST[science]', 
  other1 = '$_POST[other1]',
  other1val = '$_POST[other1val]',
  other2 = '$_POST[other2]',
  other2val = '$_POST[other2val]',
  other3 = '$_POST[other3]',
  other3val = '$_POST[other3val]',
  other4 = '$_POST[other4]',
  other4val = '$_POST[other4val]',
  other5 = '$_POST[other5]',
  other5val = '$_POST[other5val]',
  other6 = '$_POST[other6]',
  other6val = '$_POST[other6val]',
  other7 = '$_POST[other7]',
  other7val = '$_POST[other7val]',
  other8 = '$_POST[other8]',
  other8val = '$_POST[other8val]',
  other9 = '$_POST[other9]',
  other9val = '$_POST[other9val]',
  other10 = '$_POST[other10]',
  other10val = '$_POST[other10val]',
  other11 = '$_POST[other11]',
  other11val = '$_POST[other11val]',
  other12 = '$_POST[other12]',
  other12val = '$_POST[other12val]',
  other13 = '$_POST[other13]',
  other13val = '$_POST[other13val]',
  other14 = '$_POST[other14]',
  other14val = '$_POST[other14val]',
  other15 = '$_POST[other15]',
  other15val = '$_POST[other15val]',
  specialties = '$_POST[specialties]', 
  mgifts = '$_POST[mgifts]', 
  tgifts = '$_POST[tgifts]',
  bgifts = '$_POST[bgifts]',
  agifts = '$_POST[agifts]',
  ragetemp = '$_POST[ragetemp]', 
  rageperm = '$_POST[rageperm]', 
  gnosistemp = '$_POST[gnosistemp]', 
  meritstotal = '$_POST[meritstotal]',
  merits = '$_POST[merits]', 
  flawstotal = '$_POST[flawstotal]',
  flaws = '$_POST[flaws]', 
  gnosisperm = '$_POST[gnosisperm]',
  honortemp = '$_POST[honortemp]', 
  willpowerperm = '$_POST[willpowerperm]', 
  willpowertemp = '$_POST[willpowertemp]', 
  honorperm = '$_POST[honorperm]', 
  misc = '$_POST[misc]',
  description = '$_POST[description]',
  concept = '$_POST[concept]',
  intel = '$_POST[intel]',
  glorytemp = '$_POST[glorytemp]',
  gloryperm = '$_POST[gloryperm]',
  wisdomtemp = '$_POST[wisdomtemp]',
  wisdomperm = '$_POST[wisdomperm]',
  breed = '$_POST[breed]',
  packtotem = '$_POST[packtotem]',
  packname = '$_POST[packname]',
  auspice = '$_POST[auspice]',
  rank = '$_POST[rank]',
  rites = '$_POST[rites]',
  exitmsg = '$_POST[exitmsg]',
  icon = '1000',
  experience = '0',
  backgrounds1 = '$_POST[backgrounds1]',
  backgrounds1val = '$_POST[backgrounds1val]',
  backgrounds2 = '$_POST[backgrounds2]',
  backgrounds2val = '$_POST[backgrounds2val]',
  backgrounds3 = '$_POST[backgrounds3]',
  backgrounds3val = '$_POST[backgrounds3val]',
  backgrounds4 = '$_POST[backgrounds4]',
  backgrounds4val = '$_POST[backgrounds4val]',
  backgrounds5 = '$_POST[backgrounds5]',
  backgrounds5val = '$_POST[backgrounds5val]',
  backgrounds6 = '$_POST[backgrounds6]',
  backgrounds6val = '$_POST[backgrounds6val]',
  backgrounds7 = '$_POST[backgrounds7]',
  backgrounds7val = '$_POST[backgrounds7val]',
  backgrounds8 = '$_POST[backgrounds8]',
  backgrounds8val = '$_POST[backgrounds8val]',
  backgrounds9 = '$_POST[backgrounds9]',
  backgrounds9val = '$_POST[backgrounds9val]', 
  charname = '$_POST[charname]',
  charage = '$_POST[charage]',
  charsex = '$_POST[charsex]',
  playernotes = '$_POST[playernotes]',
  lastexp = '$_POST[lastexp]',
  stnotes = '$_POST[stnotes]',
  equipment = '$_POST[equipment]',
  venue = 'Werewolf'
  WHERE charname = '$_POST[charname]'"; 
    $result = mysql_query($query) or die(mysql_error());

header("Location: http://www.willowhaven.org/willowchat/portal.php");
exit;
?>  
