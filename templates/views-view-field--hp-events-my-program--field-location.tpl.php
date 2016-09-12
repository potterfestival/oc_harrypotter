<div class="List-map-link">
    <span id="map" >
      <?php print $row->field_field_location[0]['raw']['thoroughfare']; ?>
    </span>
    <span id="map_data" style="display:none;">
      <?php print $row->field_field_location[0]['raw']['thoroughfare'] . ", " . $row->field_field_location[0]['raw']['postal_code'] . " " . $row->field_field_location[0]['raw']['locality']; ?>
    </span>
</div>