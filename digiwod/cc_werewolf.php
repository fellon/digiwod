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
You are creating a Werewolf. If this is not what you want to do please <a href="portal.php">click here</a>. For the name field please use only Alpha numeric ( A - Z : 0 - 1 ) characters along with the Underscore ( _ ) character.<br>
* denotes fields that are required. Attempting to save a character that is not complete will reload the creation page with all blank fields. You are warned.</em><br>
	<form method="post" action="do_addwerewolf.php">
        <table width="100%">
          <tr> 
            <td colspan="2">Character Name:</td>
            <td colspan="4">Apparent Character Age: </td>
          </tr>
          <tr> 
            <td colspan="2"> <input name="charname" type="text" id="charname" size="25"></td>
            <td colspan="4"> <input name="charage" type="text" id="charage" size="5"></td>
          </tr>
          <tr> 
            <td colspan="2">Character Gender:</td>
            <td colspan="4">Tribe:</td>
          </tr>
          <tr> 
            <td colspan="2"> <select name="charsex" id="select29">
                <option selected>--Select--</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select></td>
            <td colspan="4"> <select name="tribe" id="select30">
                <option selected>--Select--</option>
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
              </select>
            </td>
          </tr>
          <tr> 
            <td colspan="2">Breed Form: </td>
            <td colspan="4">Auspice: </td>
          </tr>
          <tr> 
            <td height="25" colspan="2"><select name="breed" id="breed">
                <option selected>--Select--</option>
                <option value="Homid">Homid</option>
                <option value="Metis">Metis</option>
                <option value="Lupus">Lupus</option>
              </select></td>
            <td colspan="4"><select name="auspice" id="auspice">
                <option selected>--Select--</option>
                <option value="Ahroun">Ahroun</option>
                <option value="Galliard">Galliard</option>
                <option value="Philodox">Philodox</option>
                <option value="Theurge">Theurge</option>
                <option value="Ragabash">Ragabash</option>
              </select></td>
          </tr>
          <tr> 
            <td colspan="2">Pack Name: </td>
            <td colspan="4">Pack Totem: </td>
          </tr>
          <tr> 
            <td colspan="2"><input name="packname" type="text" id="packname"></td>
            <td colspan="4"><input name="packtotem" type="text" id="packtotem"></td>
          </tr>
          <tr> 
            <td colspan="2">Nature: </td>
            <td colspan="4">Demeanor:</td>
          </tr>
          <tr> 
            <td colspan="2"><p> 
                <input name="nature" type="text" id="nature">
              </p></td>
            <td colspan="4"> <input name="demeanor" type="text" id="demeanor2"></td>
          </tr>
          <tr> 
            <td colspan="6">Description:</td>
          </tr>
          <tr> 
            <td colspan="6"><div align="left"> 
                <textarea name="description" cols="60" id="description">A breif description of your character</textarea>
</div></td>
          </tr>
          <tr> 
            <td colspan="6">Concept:</td>
          </tr>
          <tr> 
            <td colspan="6"> <input name="concept" type="text" value="Short, short, concept." size="40" maxlength="40"> 
              <div align="left"></div></td>
          </tr>
          <tr> 
            <td colspan="6">Exit Message:</td>
          </tr>
          <tr> 
            <td colspan="6"> <input name="exitmsg" type="text" id="exitmsg6" value="My exit message" size="60"> 
            </td>
          </tr>
          <tr> 
            <td colspan="2">Rank: </td>
            <td colspan="4">Allow people to view stats?
              <input name="statview" type="checkbox" id="statview" value="Y">
Yes! </td>
          </tr>
          <tr> 
            <td colspan="2"><input name="rank" type="text" id="rank" size="5"> 
            </td>
            <td colspan="4"> <div align="left">View-Only Pass:
                <input name="viewpass" type="text" id="viewpass" size="15">
            </div></td>
          </tr>
          <tr> 
            <td colspan="6">&nbsp;</td>
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
            <td width="10%"><select name="cha" id="select62">
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
            <td width="17%">Perception: </td>
            <td width="22%"><select name="per" id="select65">
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
          </tr>
          <tr> 
            <td>Dexterity: </td>
            <td><select name="dex" id="select60">
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
            <td>Manipulation: </td>
            <td><select name="man" id="select63">
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
            <td>Intelligence: </td>
            <td><select name="intel" id="intel">
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
          </tr>
          <tr> 
            <td>Stamina: </td>
            <td><select name="sta" id="select61">
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
            <td>Appearance: </td>
            <td><select name="app" id="select64">
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
            <td>Wits: </td>
            <td><select name="wit" id="select67">
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
            <td> <div align="left"> 
                <select name="alertness" id="select38">
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
                </select>
              </div></td>
            <td>Animal Ken: </td>
            <td><select name="animalk" id="select2">
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
            <td>Academics: </td>
            <td><select name="academics" id="select3">
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
            <td>Athletics: </td>
            <td> <div align="left"> 
                <select name="athletics" id="select4">
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
                </select>
              </div></td>
            <td>Crafts: </td>
            <td><select name="crafts" id="select21">
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
            <td>Computer: </td>
            <td><select name="computer" id="select22">
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
            <td>Brawl: </td>
            <td><select name="brawl" id="select5">
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
            <td>Drive: </td>
            <td><select name="drive" id="select20">
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
            <td>Finance: </td>
            <td><select name="finance" id="select23">
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
            <td>Dodge: </td>
            <td><select name="dodge" id="select6">
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
            <td>Etiquette: </td>
            <td><select name="etiquette" id="select19">
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
            <td>Investigation: </td>
            <td><select name="investigation" id="select24">
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
            <td>Empathy: </td>
            <td><select name="empathy" id="select7">
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
            <td>Firearms: </td>
            <td><select name="firearms" id="select18">
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
            <td>Law: </td>
            <td><select name="law" id="select25">
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
            <td>Expression: </td>
            <td><select name="expression" id="select8">
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
            <td>Melee: </td>
            <td><select name="melee" id="select17">
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
            <td>Linguistics: </td>
            <td><select name="linguistics" id="select26">
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
            <td>Intimidation: </td>
            <td><select name="intimidation" id="select9">
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
            <td>Performance: </td>
            <td><select name="performance" id="select16">
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
            <td>Medicine: </td>
            <td><select name="medicine" id="select27">
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
            <td>Leadership: </td>
            <td><select name="leadership" id="select10">
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
            <td>Security: </td>
            <td><select name="security" id="select15">
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
            <td>Occult: </td>
            <td><select name="occult" id="select56">
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
            <td>Streetwise: </td>
            <td><select name="streetwise" id="select11">
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
            <td>Stealth: </td>
            <td><select name="stealth" id="select14">
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
            <td>Politics: </td>
            <td><select name="politics" id="select57">
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
            <td>Subterfuge: </td>
            <td><select name="subterfuge" id="select35">
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
            <td>Survival: </td>
            <td><select name="survival" id="select32">
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
            <td>Science: </td>
            <td><select name="science" id="select31">
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
            <td>Primal Urge:</td>
            <td><select name="primalurge" id="select96">
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
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>Enigmas:</td>
            <td><strong> 
              <select name="enigmas" id="select97">
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
              <select name="ritualsab" id="select98">
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
              </select>
              </strong></td>
          </tr>
          <tr> 
            <td><input name="other1" type="text" id="other1" size="12"></td>
            <td><select name="other1val" id="select36">
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
            <td><input name="other2" type="text" id="other2" size="12"></td>
            <td><select name="other2val" id="select37">
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
            <td><input name="other3" type="text" id="other3" size="12"></td>
            <td><select name="other3val" id="select39">
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
            <td><input name="other4" type="text" id="other4" size="12"></td>
            <td><select name="other4val" id="select51">
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
            <td><input name="other5" type="text" id="other5" size="12"></td>
            <td><select name="other5val" id="select47">
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
            <td><input name="other6" type="text" id="other6" size="12"></td>
            <td><select name="other6val" id="select40">
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
            <td><input name="other7" type="text" id="other7" size="12"></td>
            <td><select name="other7val" id="select50">
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
            <td><input name="other8" type="text" id="other8" size="12"></td>
            <td><select name="other8val" id="select46">
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
            <td><input name="other9" type="text" id="other9" size="12"></td>
            <td><select name="other9val" id="select41">
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
            <td><input name="other10" type="text" id="other10" size="12"></td>
            <td><select name="other10val" id="select49">
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
            <td><input name="other11" type="text" id="other11" size="12"></td>
            <td><select name="other11val" id="select45">
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
            <td><input name="other12" type="text" id="other12" size="12"></td>
            <td><select name="other12val" id="select42">
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
            <td><input name="other13" type="text" id="other13" size="12"></td>
            <td><select name="other13val" id="select48">
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
            <td><p> 
                <input name="other14" type="text" id="other14" size="12">
              </p></td>
            <td><select name="other14val" id="select44">
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
            <td><input name="other15" type="text" id="other15" size="12"></td>
            <td><select name="other15val" id="select43">
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
            <td colspan="6">&nbsp;</td>
          </tr>
          <tr> 
            <td colspan="6">Specialties: </td>
          </tr>
          <tr> 
            <td colspan="6"><input name="specialties" type="text" id="specialties3" size="93"></td>
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
            <td><input name="backgrounds1" type="text" id="backgrounds3" size="15"></td>
            <td><select name="backgrounds1val" id="select52">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select></td>
            <td><input name="backgrounds2" type="text" id="backgrounds1" size="15"></td>
            <td><select name="backgrounds2val" id="select53">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select></td>
            <td><input name="backgrounds3" type="text" id="backgrounds12" size="15"></td>
            <td><select name="backgrounds3val" id="select54">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select></td>
          </tr>
          <tr> 
            <td><input name="backgrounds4" type="text" id="backgrounds17" size="15"></td>
            <td><select name="backgrounds4val" id="select55">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select></td>
            <td><input name="backgrounds5" type="text" id="backgrounds16" size="15"></td>
            <td><select name="backgrounds5val" id="select66">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select></td>
            <td><input name="backgrounds6" type="text" id="backgrounds13" size="15"></td>
            <td><select name="backgrounds6val" id="select68">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select></td>
          </tr>
          <tr> 
            <td><input name="backgrounds7" type="text" id="backgrounds18" size="15"></td>
            <td><select name="backgrounds7val" id="select71">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select></td>
            <td><input name="backgrounds8" type="text" id="backgrounds15" size="15"></td>
            <td><select name="backgrounds8val" id="select70">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select></td>
            <td><input name="backgrounds9" type="text" id="backgrounds14" size="15"></td>
            <td><select name="backgrounds9val" id="select69">
                <option value="0" selected>0</option>
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
            <td colspan="6"><input name="bgifts" type="text" id="bgifts" size="93"></td>
          </tr>
          <tr> 
            <td colspan="6">Auspice Gifts</td>
          </tr>
          <tr> 
            <td colspan="6"><input name="agifts" type="text" id="agifts" size="93"> </td>
          </tr>
          <tr>
            <td colspan="6">Tribe Gifts</td>
          </tr>
          <tr> 
            <td colspan="6"><input name="tgifts" type="text" id="tgifts" size="93"></td>
          </tr>
          <tr> 
            <td colspan="6">Misc. Gifts</td>
          </tr>
          <tr> 
            <td height="26" colspan="6"><input name="mgifts" type="text" id="mgifts" size="93"></td>
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
            <td colspan="2"><input name="meritstotal" type="text" id="meritstotal" size="5"></td>
          </tr>
          <tr> 
            <td colspan="6"><input name="merits" type="text" id="merits22" size="93"></td>
          </tr>
          <tr> 
            <td colspan="2">Flaws: </td>
            <td colspan="2">Total:</td>
            <td colspan="2"><input name="flawstotal" type="text" id="flawstotal" size="5"></td>
          </tr>
          <tr> 
            <td colspan="6"> <input name="flaws" type="text" id="flaws" size="93"></td>
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
            <td>Honor Prm</td>
            <td><select name="honorperm" id="select100">
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
            <td>Wisdom Prm</td>
            <td><select name="wisdomperm" id="select102">
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
            <td>Glory Temp</td>
            <td><select name="glorytemp" id="select104">
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
            <td>Honor Temp</td>
            <td><select name="honortemp" id="select106">
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
            <td>Wisdom Temp</td>
            <td><select name="wisdomtemp" id="select108">
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
            <td>Rage Prm</td>
            <td><select name="rageperm" id="select112">
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
            <td>Gnosis Prm</td>
            <td><select name="gnosisperm" id="select118">
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
            <td>Willpower Prm</td>
            <td> <select name="willpowerperm" id="select115">
                <option value="0" selected>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
              </select></td>
          </tr>
          <tr> 
            <td>Rage Temp</td>
            <td><select name="ragetemp" id="select114">
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
            <td>Gnosis Temp</td>
            <td><select name="gnosistemp" id="select120">
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
            <td>Willpower Temp</td>
            <td><select name="willpowertemp" id="select116">
                <option selected>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
              </select></td>
          </tr>
          <tr> 
            <td colspan="2">&nbsp;</td>
            <td colspan="4">&nbsp;</td>
          </tr>
          <tr> 
            <td colspan="6">Equipment Requests:</td>
          </tr>
          <tr> 
            <td colspan="6"><input name="equipment" type="text" id="equipment" size="93"></td>
          </tr>
          <tr> 
            <td colspan="6">Misc:</td>
          </tr>
          <tr> 
            <td colspan="6"> <input name="misc" type="text" id="misc2" size="93"></td>
          </tr>
          <tr> 
            <td colspan="6"><div align="center"> 
                <input type="submit" name="Submit" value="Submit">
              </div></td>
          </tr>
        </table>
      </form><?php
print COM_siteFooter();
?>
