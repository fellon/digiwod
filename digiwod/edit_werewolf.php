<?php
// Load globals
	require_once('../lib-common.php');

// Check security levels

// Load wrapper
	print COM_siteHeader(); 

// Get name of character and load it.
	if ($_POST[iamediting]) 
		{
		$query = "SELECT * FROM characters WHERE charname='$_POST[iamediting]'";
		$query2 = mysql_db_query("willowhaven", $query) or die ("I'm sorry.  No one by that name is currently in the database.");
		extract(mysql_fetch_array($query2));
		$iamediting = $charname;
		/*
		if (($sanct == "YES") && (SEC_inGroup ('Root'))) 
			{
			header("Location: http://www.willowhaven.org/willowchat/portal.php");
			exit;
 			}
			*/ 		
?>
<form method="post" action="do_editchar.php">
<input name="venue" type="hidden" value="Werewolf">
<input name="iamediting" type="hidden" id="iamediting" value="<?php echo $_POST[iamediting]; ?>">
<table width="100%">
  <tr>
            <td colspan="2">Player Name: <?php echo $player; ?></td>
            <td colspan="4">&nbsp;</td>
          </tr>
  <tr>
    <td colspan="2">Character Name:</td>
    <td colspan="4">Apparent Character Age: </td>
  </tr>
  <tr>
    <td colspan="2">
      <input name="charname" type="text" id="charname" value="<?php echo $charname; ?>" size="25"></td>
    <td colspan="4">
      <input name="charage" type="text" id="charage" value="<?php echo $charage; ?>" size="5"></td>
  </tr>
  <tr>
    <td colspan="2">Character Gender:</td>
    <td colspan="4">Tribe:
      <select name="tribe" id="select62">
        <option value="<?php echo $tribe; ?>"><?php echo $tribe; ?></option>
        <option value="Black Furies">Black Furies</option>
                <option value="Bone Gnawers">Bone Gnawers</option>
                <option value="Children of Gaia">Children of Gaia</option>
                <option value="Fianna">Fianna</option>
                <option value="Get of Fenris">Get of Fenris</option>
                <option value="Glass Walkers">Glass Walkers</option>
                <option value="Red Talons">Red Talons</option>
                <option value="Shadow Lords">Shadow Lords</option>
                <option value="Silent Striders">Silent Striders</option>
                <option value="Silver Fangs">Silver Fangs</option>
                <option value="Stargazers">Stargazers</option>
                <option value="Uktena">Uktena</option>
                <option value="Wendigo">Wendigo</option>
				<option value="Black Spiral Dancers">Black Spiral Dancers</option>
				<option value="Ananasi">Ananasi</option>
				<option value="Corax">Corax</option>
				<option value="Mokole">Mokole</option>
				<option value="Bastet">Bastet</option>
				<option value="Nuwisha">Nuwisha</option>
				<option value="Guhral">Guhral</option>
				<option value="Ratkin">Ratkin</option>
				<option value="Rokea">Rokea</option>
				<option value="Kami">Kami</option>
				<option value="Drone">Drone</option>
				<option value="Fomori">Fomori</option>
				<option value="Gorgon">Gorgon</option>
      </select></td>
  </tr>
  <tr>
    <td colspan="2">
      <select name="charsex" id="select247">
        <option value="<?php echo $charsex; ?>"><?php echo $charsex; ?></option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select></td>
    <td colspan="4">
<?php if (SEC_inGroup ('AST')) {
?>Icon: <?php echo $icon; ?>
<?php } if (SEC_inGroup ('WChatStaff')) { ?>Icon: 
      <select name="icon" id="select72">
        <option value="<?php echo $icon; ?>"><?php echo $icon; ?></option>
        <option value="1163">Black Furies</option>
        <option value="1164">Bone Gnawers</option>
        <option value="1165">Children of Gaia</option>
        <option value="1167">Fianna</option>
        <option value="1168">Get of Fenris</option>
        <option value="1169">Glass Walkers</option>
        <option value="1171">Red Talons</option>
        <option value="1172">Shadow Lords</option>
        <option value="1173">Silent Striders</option>
        <option value="1166">Silver Fangs</option>
        <option value="1123">Stargazers</option>
        <option value="1174">Uktena</option>
        <option value="1175">Wendigo</option>
		<option value="1176">Wyrm</option>
		<option value="1177">Bane</option>
		<option value="1178">Generic WtA</option>
		<option value="1179">Ananasi</option>
			<option value="1181">Corax</option>
			<option value="1182">Bastet</option>
			<option value="1183">Ratkin</option>
			<option value="1184">Rokea</option>
			<option value="1185">Mokole</option>
			<option value="1186">Guhral</option>
			<option value="1123">Unsanctioned</option>
                <option value="1124">Frozen</option>
                <option value="1000">OOC</option>
				<option value="1132">Mortal</option>
                <option value="1170">Kinfolk</option>
                <option value="1133">Ghoul</option>
				<option value="1090">Police</option>
				<option value="1134">Caitiff</option>
              	<option value="1137">Brujah</option>
              	<option value="1139">Gangrel</option>
              	<option value="1142">Malkavian</option>
              	<option value="1143">Nosferatu</option>
              	<option value="1145">Toreador</option>
              	<option value="1146">Tremere</option>
              <option value="1148">Ventrue</option>
              <option value="1141">Lasombra</option>
              <option value="1147">Tzimisce</option>
              <option value="1136">Assamite</option>
              <option value="1138">Followers of Set</option>
              <option value="1140">Giovanni</option>
              <option value="1144">Ravnos</option>
				<option value="1187">Changeling 1</option>
        <option value="1188">Changeling 2</option>
<option value="1149">Akashic Brotherhood</option>
        <option value="1150">Celestial Chorus</option>
        <option value="1151">Cult of Ecstasy</option>
        <option value="1152">Dreamspeakers</option>
        <option value="1153">Euthanatos</option>
        <option value="1155">Order of Hermes</option>
        <option value="1156">Sons of Ether</option>
        <option value="1158">Verbena</option>
        <option value="1157">Virtual Adepts</option>
        <option value="1154">Hollow Ones</option>
      </select>
<?php } ?>
    </td>
  </tr>
  <tr>
    <td colspan="2">Breed Form: </td>
    <td colspan="4">Auspice: </td>
  </tr>
  <tr>
    <td height="25" colspan="2"><select name="breed" id="breed">
        <option value="<?php echo $breed; ?>"><?php echo $breed; ?></option>
        <option value="Homid">Homid</option>
        <option value="Metis">Metis</option>
        <option value="Lupus">Lupis</option>
    </select></td>
    <td colspan="4"><select name="auspice" id="auspice">
        <option value="<?php echo $auspice; ?>"><?php echo $auspice; ?></option>
        <option value="Ahroun">Ahroun</option>
        <option value="Galliard">Galiard</option>
        <option value="Philodox">Philidox</option>
        <option value="Theurge">Thurge</option>
        <option value="Ragabash">Ragabash</option>
    </select></td>
  </tr>
  <tr>
    <td colspan="2">Pack Name: </td>
    <td colspan="4">Pack Totem: </td>
  </tr>
  <tr>
    <td colspan="2"><input name="packname" type="text" id="packname" value="<?php echo $packname; ?>"></td>
    <td colspan="4"><input name="packtotem" type="text" id="packtotem" value="<?php echo $packtotem; ?>"></td>
  </tr>
  <tr>
    <td colspan="2">Nature: </td>
    <td colspan="4">Demeanor:</td>
  </tr>
  <tr>
    <td colspan="2"><p>
        <input name="nature" type="text" id="nature" value="<?php echo $nature; ?>">
    </p></td>
    <td colspan="4">
      <input name="demeanor" type="text" id="demeanor" value="<?php echo $demeanor; ?>"></td>
  </tr>
  <tr>
    <td colspan="6">Description:</td>
  </tr>
  <tr>
    <td colspan="6"><div align="left">
        <textarea name="description" cols="60" id="textarea5"><?php echo $description; ?></textarea>
</div></td>
  </tr>
  <tr>
    <td colspan="6">Concept:</td>
  </tr>
  <tr>
    <td colspan="6">
      <input name="concept" type="text" id="concept" value="<?php echo $concept; ?>" size="40" maxlength="40">
      <div align="left"></div></td>
  </tr>
  <tr>
    <td colspan="6">Exit Message:</td>
  </tr>
  <tr>
    <td colspan="6">
      <input name="exitmsg" type="text" id="exitmsg3" value="<?php echo $exitmsg; ?>" size="60">
    </td>
  </tr>
  <tr>
    <td colspan="2">Rank: </td>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><input name="rank" type="text" id="rank" value="<?php echo $rank; ?>" size="5">
    </td>
    <td colspan="4">
      <div align="left"></div></td>
  </tr>
  <tr>
    <td colspan="4">Created on <?php echo $created; ?></td>
    <td>&nbsp;</td>
    <td><?php
		if ($sanct == "YES") {
    	?>
		Exp:
                <input name="experience" type="text" id="experience" value="<?php echo $experience; ?>" size="5">
		<?php
		} else {
		?>
		<input name="experience5" type="hidden" id="experience5" value="<?php echo $experience; ?>">
		Exp: <?php echo $experience; ?>
		<?php
		} 
		?></td>
  </tr>
  <tr>
    <td colspan="4">Last played on: <?php echo $lastplay; ?></td>
    <td>&nbsp;</td>
    <td>Last Exp Award: <?php echo $lastexp; ?></td>
  </tr>
  <tr>
    <td colspan="6"><div align="left"></div></td>
  </tr>
  <tr>
    <td colspan="6"><div align="center"><font size="3"><strong>Attributes</strong></font></div></td>
          </tr>
          <tr>
            <td colspan="2">Physical: </td>
            <td colspan="2">Social: </td>
            <td colspan="2"><p>Mental: </p></td>
          </tr>
          <tr>
            <td width="18%">Strength: </td>
            <td width="19%"><select name="str" id="select59">
                <option value="0">0</option>
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
                <option value="<?php echo $str; ?>" selected><?php echo $str; ?></option>
            </select></td>
            <td width="13%">Charisma: </td>
            <td width="11%"><select name="cha" id="select325">
              <option value="0">0</option>
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
              <option value="<?php echo $cha; ?>" selected><?php echo $cha; ?></option>
                                                </select></td>
            <td width="14%">Perception: </td>
            <td width="25%"><select name="per" id="select65">
			<option value="<?php echo $per; ?>"><?php echo $per; ?></option>
                <option value="0">0</option>
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
            <td>Dexterity: </td>
            <td><select name="dex" id="select60">
			<option value="<?php echo $dex; ?>" selected><?php echo $dex; ?></option>
                <option value="0">0</option>
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
            <td>Manipulation: </td>
            <td><select name="man" id="select63">
			<option value="<?php echo $man; ?>" selected><?php echo $man; ?></option>
                <option value="0">0</option>
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
            <td>Intelligence: </td>
            <td><select name="intel">
			<option value="<?php echo $intel; ?>" selected><?php echo $intel; ?></option>
                <option value="0">0</option>
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
            <td>Stamina: </td>
            <td><select name="sta" id="select61">
			<option value="<?php echo $sta; ?>" selected><?php echo $sta; ?></option>
                <option value="0">0</option>
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
            <td>Appearance: </td>
            <td><select name="app" id="select64">
			<option value="<?php echo $app; ?>" selected><?php echo $app; ?></option>
                <option value="0">0</option>
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
            <td>Wits: </td>
            <td><select name="wit" id="select67">
			<option value="<?php echo $wit; ?>" selected><?php echo $wit; ?></option>
                <option value="0">0</option>
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
            <td colspan="6"><div align="center"><strong>Abilities</strong></div></td>
          </tr>
          <tr>
            <td colspan="2">Talents</td>
            <td colspan="2">Skills</td>
            <td colspan="2">Knowledge's</td>
          </tr>
          <tr>
            <td>Alertness: </td>
            <td>
              <div align="left">
                <select name="alertness" id="select38">
				<option value="<?php echo $alertness; ?>" selected><?php echo $alertness; ?></option>
                  <option value="0">0</option>
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
                </select>
            </div></td>
            <td>Animal Ken: </td>
            <td><select name="animalk" id="select2">
			<option value="<?php echo $animalk; ?>" selected><?php echo $animalk; ?></option>
                <option value="0">0</option>
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
            <td>Academics: </td>
            <td><select name="academics" id="select3">
			<option value="<?php echo $academics; ?>" selected><?php echo $academics; ?></option>
                <option value="0">0</option>
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
            <td>Athletics: </td>
            <td>
              <div align="left">
                <select name="athletics" id="select4">
				<option value="<?php echo $athletics; ?>" selected><?php echo $athletics; ?></option>
                  <option value="0">0</option>
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
                </select>
            </div></td>
            <td>Crafts: </td>
            <td><select name="crafts" id="select21">
			<option value="<?php echo $crafts; ?>" selected><?php echo $crafts; ?></option>
                <option value="0">0</option>
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
            <td>Computer: </td>
            <td><select name="computer" id="select22">
			<option value="<?php echo $computer; ?>" selected><?php echo $computer; ?></option>
                <option value="0">0</option>
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
            <td>Brawl: </td>
            <td><select name="brawl" id="select5">
			<option value="<?php echo $brawl; ?>" selected><?php echo $brawl; ?></option>
                <option value="0">0</option>
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
            <td>Drive: </td>
            <td><select name="drive" id="select20">
			<option value="<?php echo $drive; ?>" selected><?php echo $drive; ?></option>
                <option value="0">0</option>
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
            <td>Finance: </td>
            <td><select name="finance" id="select23">
			<option value="<?php echo $finance; ?>" selected><?php echo $finance; ?></option>
                <option value="0">0</option>
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
            <td>Dodge: </td>
            <td><select name="dodge" id="select6">
			<option value="<?php echo $dodge; ?>" selected><?php echo $dodge; ?></option>
                <option value="0">0</option>
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
            <td>Etiquette: </td>
            <td><select name="etiquette" id="select19">
			<option value="<?php echo $etiquette; ?>" selected><?php echo $etiquette; ?></option>
                <option value="0">0</option>
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
            <td>Investigation: </td>
            <td><select name="investigation" id="select24">
			<option value="<?php echo $investigation; ?>" selected><?php echo $investigation; ?></option>
                <option value="0">0</option>
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
            <td>Empathy: </td>
            <td><select name="empathy" id="select7">
			<option value="<?php echo $empathy; ?>" selected><?php echo $empathy; ?></option>
                <option value="0">0</option>
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
            <td>Firearms: </td>
            <td><select name="firearms" id="select18">
			<option value="<?php echo $firearms; ?>" selected><?php echo $firearms; ?></option>
                <option value="0">0</option>
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
            <td>Law: </td>
            <td><select name="law" id="select25">
			<option value="<?php echo $law; ?>" selected><?php echo $law; ?></option>
                <option value="0">0</option>
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
            <td>Expression: </td>
            <td><select name="expression" id="select8">
			<option value="<?php echo $expression; ?>" selected><?php echo $expression; ?></option>
                <option value="0">0</option>
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
            <td>Melee: </td>
            <td><select name="melee" id="select17">
			<option value="<?php echo $melee; ?>" selected><?php echo $melee; ?></option>
                <option value="0">0</option>
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
            <td>Linguistics: </td>
            <td><select name="linguistics" id="select26">
			<option value="<?php echo $linguistics; ?>" selected><?php echo $linguistics; ?></option>
                <option value="0">0</option>
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
            <td>Intimidation: </td>
            <td><select name="intimidation" id="select9">
			<option value="<?php echo $intimidation; ?>" selected><?php echo $intimidation; ?></option>
                <option value="0">0</option>
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
            <td>Performance: </td>
            <td><select name="performance" id="select16">
			<option value="<?php echo $performance; ?>" selected><?php echo $performance; ?></option>
                <option value="0">0</option>
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
            <td>Medicine: </td>
            <td><select name="medicine" id="select27">
			<option value="<?php echo $medicine; ?>" selected><?php echo $medicine; ?></option>
                <option value="0">0</option>
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
            <td>Leadership: </td>
            <td><select name="leadership" id="select10">
			<option value="<?php echo $leadership; ?>" selected><?php echo $leadership; ?></option>
                <option value="0">0</option>
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
            <td>Security: </td>
            <td><select name="security" id="select15">
			<option value="<?php echo $security; ?>" selected><?php echo $security; ?></option>
                <option value="0">0</option>
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
            <td>Occult: </td>
            <td><select name="occult" id="select56">
			<option value="<?php echo $occult; ?>" selected><?php echo $occult; ?></option>
                <option value="0">0</option>
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
            <td>Streetwise: </td>
            <td><select name="streetwise" id="select11">
			<option value="<?php echo $streetwise; ?>" selected><?php echo $streetwise; ?></option>
                <option value="0">0</option>
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
            <td>Stealth: </td>
            <td><select name="stealth" id="select14">
			<option value="<?php echo $stealth; ?>" selected><?php echo $stealth; ?></option>
                <option value="0">0</option>
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
            <td>Politics: </td>
            <td><select name="politics" id="select57">
			<option value="<?php echo $politics; ?>" selected><?php echo $politics; ?></option>
                <option value="0">0</option>
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
            <td>Subterfuge: </td>
            <td><select name="subterfuge" id="select35">
			<option value="<?php echo $subterfuge; ?>" selected><?php echo $subterfuge; ?></option>
                <option value="0">0</option>
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
            <td>Survival: </td>
            <td><select name="survival" id="select32">
			<option value="<?php echo $survival; ?>" selected><?php echo $survival; ?></option>
                <option value="0">0</option>
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
            <td>Science: </td>
            <td><select name="science" id="select31">
			<option value="<?php echo $science; ?>" selected><?php echo $science; ?></option>
                <option value="0">0</option>
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
    <td>Primal Urge:</td>
    <td><select name="primalurge" id="select287">
	<option value="<?php echo $primalurge; ?>"><?php echo $primalurge; ?></option>
        <option value="0">0</option>
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
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Enigmas:</td>
    <td><strong>
      <select name="enigmas" id="select288">
	  <option value="<?php echo $enigmas; ?>"><?php echo $enigmas; ?></option>
        <option value="0">0</option>
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
      </select>
    </strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Rituals:</td>
    <td><strong>
      <select name="ritualsab" id="select289">
	  <option value="<?php echo $ritualsab; ?>"><?php echo $ritualsab; ?></option>
        <option value="0">0</option>
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
      </select>
    </strong></td>
  </tr>
  <tr>
    <td><input name="other1" type="text" id="other1" value="<?php echo $other1; ?>" size="12"></td>
            <td><select name="other1val" id="select36">
			<option value="<?php echo $other1val; ?>" selected><?php echo $other1val; ?></option>
                <option value="0">0</option>
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
            <td><input name="other2" type="text" id="other2" value="<?php echo $other2; ?>" size="12"></td>
            <td><select name="other2val" id="select37">
			<option value="<?php echo $other2val; ?>" selected><?php echo $other2val; ?></option>
                <option value="0">0</option>
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
            <td><input name="other3" type="text" id="other3" value="<?php echo $other3; ?>" size="12"></td>
            <td><select name="other3val" id="select39">
			<option value="<?php echo $other3val; ?>" selected><?php echo $other3val; ?></option>
                <option value="0">0</option>
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
            <td><input name="other4" type="text" id="other4" value="<?php echo $other4; ?>" size="12"></td>
            <td><select name="other4val" id="select51">
			<option value="<?php echo $other4val; ?>" selected><?php echo $other4val; ?></option>
                <option value="0">0</option>
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
            <td><input name="other5" type="text" id="other5" value="<?php echo $other5; ?>" size="12"></td>
            <td><select name="other5val" id="select47">
			<option value="<?php echo $other5val; ?>" selected><?php echo $other5val; ?></option>
                <option value="0">0</option>
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
            <td><input name="other6" type="text" id="other6" value="<?php echo $other6; ?>" size="12"></td>
            <td><select name="other6val" id="select40">
			<option value="<?php echo $other6val; ?>" selected><?php echo $other6val; ?></option>
                <option value="0">0</option>
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
            <td><input name="other7" type="text" id="other7" value="<?php echo $other7; ?>" size="12"></td>
            <td><select name="other7val" id="select50">
			<option value="<?php echo $other7val; ?>" selected><?php echo $other7val; ?></option>
                <option value="0">0</option>
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
            <td><input name="other8" type="text" id="other8" value="<?php echo $other8; ?>" size="12"></td>
            <td><select name="other8val" id="select46">
			<option value="<?php echo $other8val; ?>" selected><?php echo $other8val; ?></option>
                <option value="0">0</option>
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
            <td><input name="other9" type="text" id="other9" value="<?php echo $other9; ?>" size="12"></td>
            <td><select name="other9val" id="select41">
			<option value="<?php echo $other9val; ?>" selected><?php echo $other9val; ?></option>
                <option value="0">0</option>
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
            <td><input name="other10" type="text" id="other10" value="<?php echo $other10; ?>" size="12"></td>
            <td><select name="other10val" id="select49">
			<option value="<?php echo $other10val; ?>" selected><?php echo $other10val; ?></option>
                <option value="0">0</option>
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
            <td><input name="other11" type="text" id="other11" value="<?php echo $other11; ?>" size="12"></td>
            <td><select name="other11val" id="select45">
			<option value="<?php echo $other11val; ?>" selected><?php echo $other11val; ?></option>
                <option value="0">0</option>
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
            <td><input name="other12" type="text" id="other12" value="<?php echo $other12; ?>" size="12"></td>
            <td><select name="other12val" id="select42">
			<option value="<?php echo $other12val; ?>" selected><?php echo $other12val; ?></option>
                <option value="0">0</option>
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
            <td><input name="other13" type="text" id="other13" value="<?php echo $other13; ?>" size="12"></td>
            <td><select name="other13val" id="select48">
			<option value="<?php echo $other13val; ?>" selected><?php echo $other13val; ?></option>
                <option value="0">0</option>
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
            <td><p>
                <input name="other14" type="text" id="other14" value="<?php echo $other14; ?>" size="12">
            </p></td>
            <td><select name="other14val" id="select44">
			<option value="<?php echo $other14val; ?>" selected><?php echo $other14val; ?></option>
                <option value="0">0</option>
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
            <td><input name="other15" type="text" id="other15" value="<?php echo $other15; ?>" size="12"></td>
            <td><select name="other15val" id="select43">
			<option value="<?php echo $other15val; ?>" selected><?php echo $other15val; ?></option>
                <option value="0">0</option>
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
    <td colspan="6">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6">Specialties: </td>
  </tr>
  <tr>
    <td colspan="6"><input name="specialties" type="text" id="specialties" value="<?php echo $specialties; ?>" size="93"></td>
  </tr>
  <tr>
    <td colspan="6">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6"><div align="center"><strong>Advantages</strong></div></td>
  </tr>
  <tr>
    <td colspan="6"><strong>Backgrounds</strong></td>
          </tr>
          <tr>
            <td><input name="backgrounds1" type="text" id="backgrounds3" value="<?php echo $backgrounds1; ?>" size="15"></td>
            <td><select name="backgrounds1val" id="select52">
              <option value="<?php echo $backgrounds1val; ?>"><?php echo $backgrounds1val; ?></option>
              <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select></td>
            <td><strong>
              <input name="backgrounds2" type="text" id="backgrounds1" value="<?php echo $backgrounds2; ?>" size="15">
            </strong></td>
            <td><select name="backgrounds2val" id="select53">
			<option value="<?php echo $backgrounds2val; ?>"><?php echo $backgrounds2val; ?></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select></td>
            <td><input name="backgrounds3" type="text" id="backgrounds12" value="<?php echo $backgrounds3; ?>" size="15"></td>
            <td><select name="backgrounds3val" id="select54">
			<option value="<?php echo $backgrounds3val; ?>"><?php echo $backgrounds3val; ?></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select></td>
          </tr>
          <tr>
            <td><input name="backgrounds4" type="text" id="backgrounds17" value="<?php echo $backgrounds4; ?>" size="15"></td>
            <td><select name="backgrounds4val" id="select55">
			<option value="<?php echo $backgrounds4val; ?>"><?php echo $backgrounds4val; ?></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select></td>
            <td><input name="backgrounds5" type="text" id="backgrounds16" value="<?php echo $backgrounds5; ?>" size="15"></td>
            <td><select name="backgrounds5val" id="select66">
			<option value="<?php echo $backgrounds5val; ?>"><?php echo $backgrounds5val; ?></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select></td>
            <td><input name="backgrounds6" type="text" id="backgrounds13" value="<?php echo $backgrounds6; ?>" size="15"></td>
            <td><select name="backgrounds6val" id="select68">
			<option value="<?php echo $backgrounds6val; ?>"><?php echo $backgrounds6val; ?></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select></td>
          </tr>
          <tr>
            <td><input name="backgrounds7" type="text" id="backgrounds18" value="<?php echo $backgrounds7; ?>" size="15"></td>
            <td><select name="backgrounds7val" id="select71">
			<option value="<?php echo $backgrounds7val; ?>"><?php echo $backgrounds7val; ?></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select></td>
            <td><input name="backgrounds8" type="text" id="backgrounds15" value="<?php echo $backgrounds8; ?>" size="15"></td>
            <td><select name="backgrounds8val" id="select70">
			<option value="<?php echo $backgrounds8val; ?>"><?php echo $backgrounds8val; ?></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select></td>
            <td><input name="backgrounds9" type="text" id="backgrounds14" value="<?php echo $backgrounds9; ?>" size="15"></td>
            <td><select name="backgrounds9val" id="select69">
			<option value="<?php echo $backgrounds9val; ?>"><?php echo $backgrounds9val; ?></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select></td>
  </tr>
  <tr>
    <td colspan="6">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6"><strong>Gifts</strong></td>
  </tr>
  <tr>
    <td colspan="6">Breed Gifts</td>
  </tr>
  <tr>
    <td colspan="6"><input name="bgifts" type="text" id="bgifts" value="<?php echo $bgifts; ?>" size="93"></td>
  </tr>
  <tr>
    <td colspan="6">Auspice Gifts</td>
  </tr>
  <tr>
    <td colspan="6"><input name="agifts" type="text" id="agifts" value="<?php echo $agifts; ?>" size="93">
    </td>
  </tr>
  <tr>
    <td colspan="6">Tribe Gifts</td>
  </tr>
  <tr>
    <td colspan="6"><input name="tgifts" type="text" id="tgifts" value="<?php echo $tgifts; ?>" size="93"></td>
  </tr>
  <tr>
    <td colspan="6">Misc. Gifts</td>
  </tr>
  <tr>
    <td height="26" colspan="6"><input name="mgifts" type="text" id="mgifts" value="<?php echo $mgifts; ?>" size="93"></td>
  </tr>
  <tr>
    <td colspan="6">&nbsp; </td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">Merits:</td>
    <td colspan="2">Total:</td>
    <td colspan="2"><input name="meritstotal" type="text" id="meritstotal" value="<?php echo $meritstotal; ?>" size="5"></td>
  </tr>
  <tr>
    <td colspan="6"><input name="merits" type="text" id="merits" value="<?php echo $merits; ?>" size="93"></td>
  </tr>
  <tr>
    <td colspan="2">Flaws: </td>
    <td colspan="2">Total:</td>
    <td colspan="2"><input name="flawstotal" type="text" id="flawstotal" value="<?php echo $flawstotal; ?>" size="5"></td>
  </tr>
  <tr>
    <td colspan="6">
      <input name="flaws" type="text" id="flaws" value="<?php echo $flaws; ?>" size="93"></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6"><div align="center"><strong>Other</strong></div></td>
  </tr>
  <tr>
    <td colspan="6">Reknown</td>
  </tr>
  <tr>
    <td>Glory Prm</td>
    <td><select name="gloryperm" id="gloryperm">
	<option value="<?php echo $gloryperm; ?>"><?php echo $gloryperm; ?></option>
        <option value="0">0</option>
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
    <td>Honor Prm</td>
    <td><select name="honorperm" id="select314">
	<option value="<?php echo $honorperm; ?>"><?php echo $honorperm; ?></option>
        <option value="0">0</option>
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
    <td>Wisdom Prm</td>
    <td><select name="wisdomperm" id="select315">
	<option value="<?php echo $wisdomperm; ?>"><?php echo $wisdomperm; ?></option>
        <option value="0">0</option>
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
    <td>Glory Temp</td>
    <td><select name="glorytemp" id="select316">
	<option value="<?php echo $glorytemp; ?>"><?php echo $glorytemp; ?></option>
        <option value="0">0</option>
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
    <td>Honor Temp</td>
    <td><select name="honortemp" id="select317">
	<option value="<?php echo $honortemp; ?>"><?php echo $honortemp; ?></option>
        <option value="0">0</option>
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
    <td>Wisdom Temp</td>
    <td><select name="wisdomtemp" id="select318">
	<option value="<?php echo $wisdomtemp; ?>"><?php echo $wisdomtemp; ?></option>
        <option value="0">0</option>
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
    <td>Rage Prm</td>
    <td><select name="rageperm" id="select319">
	<option value="<?php echo $rageperm; ?>"><?php echo $rageperm; ?></option>
        <option value="0">0</option>
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
    <td>Gnosis Prm</td>
    <td><select name="gnosisperm" id="select320">
	<option value="<?php echo $gnosisperm; ?>"><?php echo $gnosisperm; ?></option>
        <option value="0">0</option>
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
    <td>Willpower Prm</td>
    <td>
      <select name="willpowerperm" id="select321">
	  <option value="<?php echo $willpowerperm; ?>"><?php echo $willpowerperm; ?></option>
        <option value="0">0</option>
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
    <td>Rage Temp</td>
    <td><select name="ragetemp" id="select322">
	<option value="<?php echo $ragetemp; ?>"><?php echo $ragetemp; ?></option>
        <option value="0">0</option>
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
    <td>Gnosis Temp</td>
    <td><select name="gnosistemp" id="select323">
	<option value="<?php echo $gnosistemp; ?>"><?php echo $gnosistemp; ?></option>
        <option value="0">0</option>
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
    <td>Willpower Temp</td>
    <td><select name="willpowertemp" id="select324">
	<option value="<?php echo $willpowertemp; ?>"><?php echo $willpowertemp; ?></option>
      <option value="0">0</option>
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
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6">Player Notes: </td>
  </tr>
  <tr>
    <td colspan="6"><textarea name="playernotes" cols="60" rows="4" wrap="VIRTUAL" id="playernotes"><?php echo $playernotes; ?></textarea></td>
  </tr>
  <tr>
    <td colspan="6">Storyteller Notes </td>
  </tr>
  <tr>
    <td colspan="6"><?php echo $stnotes; ?></td>
  </tr>
  <tr>
    <td colspan="6">Add a note: </td>
  </tr>
  <tr>
    <td colspan="6"><input name="stnotesadd" type="text" id="stnotesadd" size="93"></td>
  </tr>
  <tr>
    <td colspan="6">Equipment on Character:</td>
  </tr>
  <tr>
    <td colspan="6"><input name="equipment" type="text" id="equipment" value="<?php echo $equipment; ?>" size="93"></td>
  </tr>
  <tr>
    <td colspan="6">Equipment off Character: </td>
  </tr>
  <tr>
    <td colspan="6"><input name="equiphome" type="text" id="equiphome" value="<?php echo $equiphome; ?>" size="93"></td>
  </tr>
  <tr>
    <td colspan="6">Misc:</td>
  </tr>
  <tr>
    <td colspan="6">
      <input name="misc" type="text" id="misc" value="<?php echo $misc; ?>" size="93"></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
        <input type="submit" name="Submit4" value="Update Werewolf">
    </div></td>
    <td colspan="3">Sanctioned: <?php echo $sanct; ?>
<?php if (SEC_inGroup ('AST')) {
?>
		<select name="sanct" id="sanct">
		  <option value="<?php echo $sanct; ?>" selected>Current</option>
		  <option value="PRE">Pre-Sanction</option>
		  <option value="NO">Unsanction</option>
        </select>
<?php } if (SEC_inGroup ('WChatStaff')) { ?>
<select name="sanct" id="sanct">
		  <option value="<?php echo $sanct; ?>" selected>Current</option>
		  <option value="YES">Sanction</option>
		  <option value="NO">Unsanction</option>
        </select>
<?php } ?>
</td>
    </tr>
</table>
</form>
<?php
	}
	print COM_siteFooter();
?>