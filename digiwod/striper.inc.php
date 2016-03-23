<?php
/*
This is the character strip file for DigiWOD ver 1.0
Written and copyright Phil Brock
This file holds the fields data that needs characters stripped.
Please be careful as the variables here are effective through out
the scripts.

Wrong info here can be very bad.
*/
  $_POST[equipment] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[equipment]));
  $_POST[concept] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[concept]));
  $_POST[exitmsg] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[exitmsg]));
  $_POST[charname] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[charname])); // edited
  $_POST[description] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[description]));
  $_POST[nature] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[nature]));
  $_POST[demeanor] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[demeanor]));
  $_POST[specialties] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[specialties]));
  $_POST[other1] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[other1]));
  $_POST[other2] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[other2]));
  $_POST[other3] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[other3]));
  $_POST[other4] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[other4]));
  $_POST[other5] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[other5]));
  $_POST[other6] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[other6]));
  $_POST[other7] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[other7]));
  $_POST[other8] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[other8]));
  $_POST[other9] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[other9]));
  $_POST[other10] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[other10]));
  $_POST[other11] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[other11]));
  $_POST[other12] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[other12]));
  $_POST[other13] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[other13]));
  $_POST[other14] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[other14]));
  $_POST[other15] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[other15]));
  $_POST[backgrounds1] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[backgrounds1]));
  $_POST[backgrounds2] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[backgrounds2]));
  $_POST[backgrounds3] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[backgrounds3]));
  $_POST[backgrounds4] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[backgrounds4]));
  $_POST[backgrounds5] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[backgrounds5]));
  $_POST[backgrounds6] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[backgrounds6]));
  $_POST[backgrounds7] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[backgrounds7]));
  $_POST[backgrounds8] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[backgrounds8]));
  $_POST[backgrounds9] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[backgrounds9]));
  $_POST[supernat1] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[supernat1]));
  $_POST[supernat2] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[supernat2]));
  $_POST[supernat3] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[supernat3]));
  $_POST[supernat4] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[supernat4]));
  $_POST[supernat5] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[supernat5]));
  $_POST[supernat6] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[supernat6]));
  $_POST[supernat7] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[supernat7]));
  $_POST[supernat8] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[supernat8]));
  $_POST[supernat9] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[supernat9]));
  $_POST[generation] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[generation]));
  $_POST[meritstotal] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[meritstotal]));
  $_POST[merits] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[merits]));
  $_POST[flawstotal] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[flawstotal]));
  $_POST[flaws] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[flaws]));
  $_POST[path] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[path]));
  $_POST[misc] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[misc]));
  $_POST[concept] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[concept]));
  $_POST[charage] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[charage]));
  $_POST[playernotes] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[playernotes]));
  $_POST[equiphome] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[equiphome]));
  $_POST[agifts] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[agifts]));
  $_POST[bgifts] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[bgifts]));
  $_POST[tgifts] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[tgifts]));
  $_POST[mgifts] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[mgifts]));
  $_POST[bgstory] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[bgstory]));
  $_POST[packtotem] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[packtotem]));
  $_POST[packname] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[packname]));
  $_POST[rank] = ereg_replace("[-\'\"\r\n\t]", "", trim($_POST[rank]));
?>