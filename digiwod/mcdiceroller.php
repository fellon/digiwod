Willowchat Time system. Not official Yet!!<br>
Please be patient as we break the clock in. (Moon phase system will be added when it is finished.) <br>
<br>
<?php
function getgametime(){
    return date("g:i a Y-m-d",gametime());
}

function gametime(){
    $time = convertgametime(strtotime("now"));
    return $time;
}
/* function convertgametime($intime){
    $time = (strtotime(date("1971-m-d H:i:s",strtotime("-".getsetting("gameoffsetseconds",0)." seconds",$intime))))*getsetting("daysperday",4) % strtotime("1971-01-01 00:00:00");
    return $time;
}
*/
function convertgametime($intime){
    $time = (strtotime(date("1971-m-d H:i:s",$intime))) * 2 % strtotime("1971-01-01 00:00:00");
    return $time;
}
//Next New Day in ... is by JT from logd.dragoncat.net 
$ctime = getgametime();
$time = convertgametime(strtotime("now"));
//$time = gametime();
$tomorrow = strtotime(date("Y-m-d H:i:s",$time)." + 1 day");
$tomorrow = strtotime(date("Y-m-d 00:00:00",$tomorrow));
$secstotomorrow = $tomorrow-$time;
$realsecstotomorrow = $secstotomorrow / 2;
function getngdd(){
 return date("g:i a Y-m-d",$realsecstotomorrow);
}
$ngdd = getngdd();
function getsecstotomorrow(){
 return date("g:i a",$secstotomorrow);
}
$secstt = getsecstotomorrow();
$nowdate = date("g:i a Y-m-d",time(now));
$stime = strtotime("1970-01-01 00:00:00 + $realsecstotomorrow seconds");
?>
The current time in the City is <?php echo date("g:i a", $time) ?>. (Game Time) <br>
Next new game day in: <?php echo date("g:i:s", $secstotomorrow) ?> (Game Time)<br>
<br>
Real current time: <?php echo $nowdate; ?> (Real Time according to the server) 
<?php
// New dice roller
function roll_die($dp, $diff, $why)	
	{
	// Define variables
	$sux = 0;
	// Start the dialoge to be returned.
	print "$name rolls $dp dice to $why with a difficulty of $diff";
	// take the number of dice to be rolled and roll the first die
	$calc = "Rolled:";
	for ($i=0; $i<=$dp; $i++)
		{
		$die_roll = rand(1,10);
		if ($dice_roll >= $diff)
			{
			$sux++;
			}
		$calc = $calc." $die_roll";
		echo $dice_roll;
		echo $calc;
		}
	echo "$calc Total sux: $sux";
	}
	?>