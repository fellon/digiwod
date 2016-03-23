<?
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
The current time in the City is <? echo date("g:i a", $time) ?>.<br>
Next new game day in: <? echo date("g:i:s", $secstotomorrow) ?> (real time)<br>
<br>
Real current time: <? echo $nowdate; ?><br>
Current time: <? echo $ctime; ?><br>