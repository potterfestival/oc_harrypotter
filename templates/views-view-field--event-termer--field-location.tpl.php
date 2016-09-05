<?php
$gmapAddr = $row->field_field_location[0]['raw']['thoroughfare'] . ", " . $row->field_field_location[0]['raw']['postal_code'] . " " . $row->field_field_location[0]['raw']['locality'];
$user_agent = $_SERVER ['HTTP_USER_AGENT'];
$link = "";
if(strpos($user_agent, 'iPad') != false || strpos($user_agent, 'iPhone') != false)
{
    $link = "http://maps.apple.com/?saddr=Current%20Location&daddr=" . $gmapAddr;
}
elseif(strpos($user_agent, 'Android') != false && strpos($user_agent, 'Windows Phone') == false)
{
    $link = "http://maps.google.com/?saddr=Current%20Location&daddr=" . $gmapAddr;
}
elseif(strpos($user_agent, 'Windows Phone') != false || strpos($user_agent, 'IEMobile') != false)
{
    $link = "bingmaps:?q=" . $gmapAddr;
}
else
{
    $link = "http://maps.google.com/?saddr=Current%20Location&daddr=" . $gmapAddr;
}
echo "<a target='_blank' href='".$link."'>" . $row->field_field_location[0]['raw']['thoroughfare'] . "</a>";

