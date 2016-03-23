<?php
session_start();
if ($_SESSION[valid] != "valid") {
 header("Location: http://www.willowhaven.org/willowchat/login.php");
 exit;
 }
if ($_SESSION[groups] == "player") {
 header("Location: http://cityofsilence.org/DigiChat/database/portal.php");
 exit;
 }
 require_once('../lib-common.php');
print COM_siteHeader();
?>
Search Engine for Character Traits.<br>
      If you are not wanting to be here. <a href="portal.php">Click here</a>.
      <br>
      <strong>INSTRUCTIONS:</strong> To use the search engine. Select the name of the category you wish to search by. Then enter the value of the chosen category. I will add new categories as they are requested. For those that are not in the system. When doing searches on merits and flaws, or fields that can have a variable entry (i.e. Merits and Flaws) use %search for% in your search parameter.<br>
      <strong>EXAMPLE:</strong> I want to find all players with the eat food merit. <br>
      Text box is Merits and my search string is %eat food%<br>
      This allows the search system to search inside of a field instead of exactly matching it. </em><em><br>
        <br>
        Abilities coming Soon! (As soon as I find the time to do the data entry.) </em></p>
      <form name="form1" method="post" action="search.php">
         * = Required 
         Field
         <table width="100%"  border="1" cellpadding="1">
          <tr>
            <td>Field to search in </td>
            <td>Searching for this: </td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><select name="peram">
              <option selected>--Select--</option>
              <option value="player">Player Name</option>
              <option value="tribe">Tribe</option>
              <option value="clan">Clan</option>
              <option value="tradition">Tradition</option>
              <option value="kith">Kith</option>
              <option value="sect">Sect</option>
              <option value="court">Court</option>
              <option value="venue">Venue</option>
              <option value="str">Strength</option>
              <option value="dex">Dexterity</option>
              <option value="sta">Stamina</option>
              <option value="intel">Intelligence</option>
              <option value="cha">Charisma</option>
              <option value="app">Appearance</option>
              <option value="man">Manipulation</option>
              <option value="per">Perception</option>
              <option value="wit">Wits</option>
              <option value="nature">Nature</option>
              <option value="demeanor">Demeanor</option>
              <option value="merits">Merits</option>
              <option value="flaws">Flaws</option>
                        </select> 
            * </td>
            <td><input type="text" name="value"> 
            * </td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><select name="peram2" id="peram2">
			  <option value="" selected></option>
              <option value="player">Player Name</option>
              <option value="tribe">Tribe</option>
              <option value="clan">Clan</option>
              <option value="tradition">Tradition</option>
              <option value="kith">Kith</option>
              <option value="sect">Sect</option>
              <option value="court">Court</option>
              <option value="venue">Venue</option>
              <option value="str">Strength</option>
              <option value="dex">Dexterity</option>
              <option value="sta">Stamina</option>
              <option value="intel">Intelligence</option>
              <option value="cha">Charisma</option>
              <option value="app">Appearance</option>
              <option value="man">Manipulation</option>
              <option value="per">Perception</option>
              <option value="wit">Wits</option>
              <option value="nature">Nature</option>
              <option value="demeanor">Demeanor</option>
              <option value="merits">Merits</option>
              <option value="flaws">Flaws</option>
                                                                                                                                                            </select></td>
            <td><input type="text" name="value2"></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><select name="peram3" id="peram3">
			   <option value="" selected></option>
              <option value="player">Player Name</option>
              <option value="tribe">Tribe</option>
              <option value="clan">Clan</option>
              <option value="tradition">Tradition</option>
              <option value="kith">Kith</option>
              <option value="sect">Sect</option>
              <option value="court">Court</option>
              <option value="venue">Venue</option>
              <option value="str">Strength</option>
              <option value="dex">Dexterity</option>
              <option value="sta">Stamina</option>
              <option value="intel">Intelligence</option>
              <option value="cha">Charisma</option>
              <option value="app">Appearance</option>
              <option value="man">Manipulation</option>
              <option value="per">Perception</option>
              <option value="wit">Wits</option>
              <option value="nature">Nature</option>
              <option value="demeanor">Demeanor</option>
              <option value="merits">Merits</option>
              <option value="flaws">Flaws</option>
                                                </select></td>
            <td><input type="text" name="value3"></td>
            <td><input type="submit" name="Submit" value="Submit"></td>
          </tr>
        </table>
      </form>
      <p>
        <?php
if ($_POST[value] != "") {
$count = 0;
$db_name = "willowchat";
$table_name = "characters";
$connection = @mysql_connect("69.226.156.121", "". "")
or die(mysql_error());
$db = @mysql_select_db($db_name, $connection) or die(mysql_error());
$sql = "SELECT charname FROM $table_name WHERE $_POST[peram] LIKE '$_POST[value]' ORDER BY `charname` ASC";
if ($_POST[peram2] != "") {
$sql = "SELECT charname FROM $table_name WHERE $_POST[peram] LIKE '$_POST[value]' AND $_POST[peram2] LIKE '$_POST[value2]' ORDER BY `charname` ASC";
}
//$sql = "SELECT charname FROM $table_name WHERE $_POST[peram] = '$_POST[value]'";
// SELECT `nickname` FROM `profile` WHERE 1 AND `sex` LIKE 'male' AND `age` LIKE '21' ORDER BY `nickname` ASC 
if ($_POST[peram3] != "") {
$sql = "SELECT charname FROM $table_name WHERE $_POST[peram] LIKE '$_POST[value]' AND $_POST[peram2] LIKE '$_POST[value2]' AND $_POST[peram3] LIKE '$_POST[value3]' ORDER BY `charname` ASC";
}
$result = @mysql_query($sql,$connection) or die(mysql_error());
while ($row = mysql_fetch_array($result)) {
$charname = $row['charname'];
$count++;
echo "$charname <a href=\"do_search.php?do_edit=$charname\">Edit $charname.</a><br>";
}
echo "$count entries found.";
} else {
?>
No search defined.<br>
<?php
}
print COM_siteFooter();
?>