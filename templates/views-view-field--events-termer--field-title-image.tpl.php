<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo $output;
if(isset($row->field_field_title_image[0]['raw']['field_foto_kilde_']['und'][0]['value']))
{
    echo "<span class='oc_photo_kilde'>Foto: ".$row->field_field_title_image[0]['raw']['field_foto_kilde_']['und'][0]['value']."</span>";
}
else
{
   echo "<span class='oc_photo_kilde'>Foto:</span>"; 
}
