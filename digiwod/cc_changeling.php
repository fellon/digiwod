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
You are creating a Changeling Character. If this is not what you want to do please <a href="portal.php">click here</a>.<br>
      For the name field please use only Alpha numeric ( A - Z : 0 - 1 ) characters along with the Underscore ( _ ) character.<br>
* denotes fields that are required. Attempting to save a character that is not complete will reload the creation page with all blank fields. You are warned.</em>
	
	<form method="post" action="do_addchangeling.php">
        <table width="100%" height="100%" border="1" align="center">
          <tr> 
            <td colspan="2">Character Name: * </td>
            <td colspan="4" valign="top">Apparent Character Age: </td>
          </tr>
          <tr> 
            <td colspan="2"> <input name="charname" type="text" id="charname" size="25"></td>
            <td colspan="4"> <input name="charage" type="text" id="charage" size="5"></td>
          </tr>
          <tr> 
            <td colspan="2">Character Gender: * </td>
            <td colspan="4">Kith: * </td>
          </tr>
          <tr> 
            <td colspan="2"> <select name="charsex" id="select29">
                <option selected>--Select--</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select></td>
            <td colspan="4"> <select name="kith" id="select30">
                <option selected>--Select--</option>
                <option value="Boggans">Boggan</option>
                <option value="Eshu">Eshu</option>
                <option value="Nockers">Nocker</option>
                <option value="Pooka">Pooka</option>
                <option value="Redcaps">Redcap</option>
                <option value="Satyrs">Satyr</option>
                <option value="Sidhe">Sidhe</option>
                <option value="Sluagh">Sluagh</option>
                <option value="Troll">Troll</option>
              </select></td>
          </tr>
          <tr> 
            <td colspan="6">Description: * Background story info will be in a seperate field. </td>
          </tr>
          <tr> 
            <td colspan="6">
                <textarea name="description" cols="60" id="description">A breif description of your character</textarea>
            </td>
          </tr>
          <tr> 
            <td colspan="6">Concept: * </td>
          </tr>
          <tr> 
            <td colspan="6"> <input name="concept" type="text" value="Short, short, concept." size="40" maxlength="40">
            </td>
          </tr>
          <tr> 
            <td colspan="6">Exit Message:</td>
          </tr>
          <tr> 
            <td colspan="6"> <input name="exitmsg" type="text" id="exitmsg6" value="My exit message" size="60"> 
            </td>
          </tr>
          <tr> 
            <td colspan="2">Court: * </td>
            <td colspan="4">House: * </td>
          </tr>
          <tr> 
            <td colspan="2"> <select name="court" id="court">
                <option selected>--Select--</option>
                <option value="Seelie">Seelie</option>
                <option value="Unseelie">Unseelie</option>
              </select></td>
            <td colspan="4"> <select name="house" id="house">
                <option selected>--Select--</option>
                <option value="Commoner">Commoner</option>
                <option value="Dougal">Dougal</option>
                <option value="Eiluned">Eiluned</option>
                <option value="Fiona">Fiona</option>
                <option value="Gwydion">Gwydion</option>
                <option value="Liam">Liam</option>
                <option value="Ailil">Ailil</option>
                <option value="Balor">Balor</option>
                <option value="Leanhaun">Leanhaun</option>
                <option value="Scathach">Scathach</option>
              </select>
            </td>
          </tr>
          <tr> 
            <td colspan="2">Seeming: * </td>
            <td colspan="4">Lagacies: * </td>
          </tr>
          <tr> 
            <td colspan="2"><select name="seeming" id="seeming">
                <option selected>--Select--</option>
                <option value="Childling">Childling</option>
                <option value="Wilder">Wilder</option>
                <option value="Grump">Grump</option>
              </select></td>
            <td colspan="2"><input name="lags" type="text" id="lags" value="Seelie"></td>
            <td colspan="2"> <input name="laguns" type="text" id="laguns" value="Unseelie"></td>
          </tr>
          <tr>
            <td colspan="6">Birthright/Frailities:</td>
          </tr>
          <tr>
            <td colspan="6"><input name="birthright" type="text" id="birthright" size="60"></td>
          </tr>
          <tr>
            <td colspan="3">Allow people to view stats?
              <input name="statview" type="checkbox" id="statview" value="Y">
Yes! </td>
            <td colspan="3">View-Only Pass:
            <input name="viewpass" type="text" id="viewpass" size="15"></td>
          </tr>
          <tr>
            <td colspan="6">&nbsp;</td>
          </tr>
          <tr> 
            <td colspan="6">&nbsp;</td>
          </tr>
          <tr> 
            <td colspan="6"><font size="3"><strong>Attributes</strong></font></td>
          </tr>
          <tr> 
            <td colspan="2">Physical: </td>
            <td colspan="2">Social: </td>
            <td colspan="2"><p>Mental: </p></td>
          </tr>
          <tr> 
            <td>Strength: </td>
            <td><select name="str" id="select59">
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
            <td>Charisma: </td>
            <td><select name="cha" id="select62">
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
            <td>Perception: </td>
            <td><select name="per" id="select65">
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
            <td>Kenning:</td>
            <td><select name="kenning" id="select28">
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
            <td>Gremayre:</td>
            <td><select name="gremayre" id="select33">
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
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>Enigmas:</td>
            <td><select name="enigmas" id="select34">
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
            <td colspan="6"><strong>Arts:</strong></td>
          </tr>
          <tr> 
            <td><input name="supernat1" type="text" id="supernat1" size="15"></td>
            <td><select name="supernat1val" id="select76">
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
            <td><input name="supernat2" type="text" id="supernat2" size="15"></td>
            <td><select name="supernat2val" id="select92">
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
            <td><input name="supernat3" type="text" id="supernat3" size="15"></td>
            <td><select name="supernat3val" id="select93">
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
            <td><input name="supernat4" type="text" id="supernat4" size="15"></td>
            <td><select name="supernat4val" id="select88">
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
            <td><input name="supernat5" type="text" id="supernat5" size="15"></td>
            <td><select name="supernat5val" id="select91">
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
            <td><input name="supernat6" type="text" id="supernat6" size="15"></td>
            <td><select name="supernat6val" id="select94">
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
            <td><input name="supernat7" type="text" id="supernat72" size="15"></td>
            <td><select name="supernat7val" id="select">
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
            <td><input name="supernat8" type="text" id="supernat82" size="15"></td>
            <td><select name="supernat8val" id="select12">
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
            <td><input name="supernat9" type="text" id="supernat92" size="15"></td>
            <td><select name="supernat9val" id="select13">
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
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr> 
            <td colspan="6"><strong>Realms</strong></td>
          </tr>
          <tr> 
            <td>Actor </td>
            <td><select name="realmactor" id="select77">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select></td>
            <td>Fea</td>
            <td><select name="realmfae" id="select75">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select></td>
            <td>Nature</td>
            <td><select name="realmnature" id="select58">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select></td>
          </tr>
          <tr> 
            <td>Prop</td>
            <td><select name="realmprop" id="select78">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select></td>
            <td>Scene</td>
            <td><select name="realmscene" id="select72">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select></td>
            <td>Time</td>
            <td><select name="realmtime" id="select73">
              <option value="0" selected>0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select></td>
          </tr>
          <tr> 
            <td colspan="2">&nbsp;</td>
            <td colspan="2">&nbsp;</td>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr> 
            <td colspan="2">Merits:</td>
            <td colspan="2">Total: * </td>
            <td colspan="2"><input name="meritstotal" type="text" id="meritstotal" size="5"></td>
          </tr>
          <tr> 
            <td colspan="6"><input name="merits" type="text" id="merits22" size="93"></td>
          </tr>
          <tr> 
            <td colspan="2">Flaws: </td>
            <td colspan="2">Total: * </td>
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
            <td>Banality Prm</td>
            <td><select name="banalityperm" id="select81">
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
            <td>Glamour Prm</td>
            <td><select name="glamourperm" id="select96">
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
            <td>Willpower Prm</td>
            <td><select name="willpowerperm" id="select80">
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
            <td>Banality Temp</td>
            <td><select name="banalitytemp" id="select82">
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
            <td>Glamour temp</td>
            <td><select name="glamourtemp" id="select83">
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
            <td>Willpower temp</td>
            <td><select name="willpowertemp" id="select79">
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
                <input type="submit" name="Submit" value="Submit A Changeling Character">
              </div></td>
          </tr>
      </table>
</form>
        <?php
print COM_siteFooter();
?>
	
	  