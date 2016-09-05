<?php
$gmapAddr = $row->field_field_location[0]['raw']['thoroughfare'] . ", " . $row->field_field_location[0]['raw']['postal_code'] . " " . $row->field_field_location[0]['raw']['locality'];
echo "<a target='_blank' href='http://maps.google.com/?saddr=Current%20Location&daddr=".$gmapAddr."'>" . $row->field_field_location[0]['raw']['thoroughfare'] . "</a>";

