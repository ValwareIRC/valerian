<?php
/*
Messy asf script to get time and day of week in Valerian in UK timezone
by Valware

Feel free to change timezone to suit ya
*/
date_default_timezone_set('Europe/London');




$dayNum = date('w');
$hour = date('H');
if ($dayNum == '1' || ($dayNum == '2' && ($hour <= '08' && $hour >= '00'))) { $v = "Velodas"; $vNum = '1'; }
elseif (($dayNum == '2' && $hour >= '09') || ($dayNum == '3' && $hour <= '17')) { $v = "Loquedas"; $vNum = '2'; }
elseif (($dayNum == '3' && $hour >= '18') || ($dayNum == '4') || ($dayNum == '5' && $hour <= '02')) { $v = "Pondas"; $vNum = '3'; }
elseif (($dayNum == '5' && $hour >= '03') || ($dayNum == '6' && $hour <= '11')) { $v = "Imperidas"; $vNum = '4'; }
else { $v = "Requidas"; $vNum = '5'; }
$today = $v;

if ($dayNum == '1') { $vHour = $hour; }
if ($dayNum == '2') {
	if ($hour <= '08' && $hour >= '00') { $vHour = $hour + 24; }
	else { $vHour = $hour - 8; }
}
if ($dayNum == '3') {
	if ($hour <= '17' && $hour >= '00') { $vHour = $hour + 15; }
	else { $vHour = $hour - 18; }
}
if ($dayNum == '4') { $vHour = $hour + 6; }

if ($dayNum == '5') {
	if ($hour <= '02' && $hour >= '00') { $vHour = $hour + 30; }
	else { $vHour = $hour - 3; }
}
if ($dayNum == '6') {
	if ($hour <= '11' && $hour >= '00') { $vHour = $hour + 21; }
	else { $vHour = $hour + 12; }
}
if ($dayNum == '7') { $vHour = $hour + 12; }

if ($vHour >= '18') { $xm = "PM"; }
else { $xm = "AM"; }

$newtime = $vHour.":".date('i');
echo "Valerian Time: It is ".$newtime.$xm." on ".$today.", day ".$vNum." of 5";


?>
