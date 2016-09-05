<?php
$gmapAddr = $row->field_field_location[0]['raw']['thoroughfare'] . ", " . $row->field_field_location[0]['raw']['postal_code'] . " " . $row->field_field_location[0]['raw']['locality'];
$user_agent = $useragent = $_SERVER ['HTTP_USER_AGENT'];
$link = "";
if(strpos($a, 'iPad') != false || strpos($a, 'iPhone') != false)
{
    $link = "http://maps.apple.com/?saddr=Current%20Location&daddr=" . $gmapAddr;
}
elseif(strpos($a, 'Android') != false)
{
    $link = "http://maps.google.com/?saddr=Current%20Location&daddr=" . $gmapAddr;
}
elseif(strpos($a, 'Windows Phone') != false || strpos($a, 'IEMobile') != false)
{
    $link = "maps:" . $gmapAddr;
}
else
{
    $link = "http://maps.google.com/?saddr=Current%20Location&daddr=" . $gmapAddr;
}
echo "<a target='_blank' href='".$link."'>" . $row->field_field_location[0]['raw']['thoroughfare'] . "</a>";

