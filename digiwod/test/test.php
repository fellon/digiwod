<?
session_start();
?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<?
if ($_GET[value] == "red") {
?>
<style type="text/css">
<!--
body,td,th {
	color: #FFFFFF;
}
body {
	background-color: #FF0000;
}
-->
</style>
<?
}
?>
</head>

<body>
<?
if ($_GET[value] == "default") {
echo "<h1>Default page $_GET[pgnmbr]</h1>";
}
if ($_GET[value] == "yellow") {
echo "<h1>Yellow page $_GET[pgnmbr]</h1>";
}
if ($_GET[value] == "red") {
echo "<h1>Red page $_GET[pgnmbr]</h1>";
}
?>
<form action="test.php" method="get" name="form"><table width="100%"  border="1">
  <tr>
    <td><select name="value" id="value">
      <option value="default" selected>Default</option>
      <option value="yellow">Yellow</option>
      <option value="red">Red</option>
    </select></td>
    <td><select name="pgnmbr" id="pgnmbr">
      <option value="1" selected>1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select></td>
  </tr>
  <tr>
    <td colspan="2">New text in button: 
      <input name="test" type="text" id="test"></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
<?
if ($_GET[test] == "") {
$test = "Push me";
} else {
$test = $_GET[test];
}
?>
<input type="submit" name="Submit" value="<? echo $test; ?>"></td>
  </tr>
</table>
</form>
<a href="test.php?value=default">Default</a>
<a href="test.php?value=yellow">Yellow</a>
<a href="test.php?value=red">Red</a>
</body>
</html>
