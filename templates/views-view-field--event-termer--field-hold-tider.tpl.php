<?php
$test = 0;
foreach($row->field_field_hold_tider as $inline_obj)
{
    $entity = $inline_obj['raw']['entity'];
    $p2b_id = $entity->field_place2book_tickets['und'][0]['value'];
       $dt_start = new DateTime();
    $dt_start->setTimestamp(strtotime($entity->field_dato["und"][0]['value'] . " " ."UTC"));
    $dt_start->setTimezone(new DateTimeZone('Europe/Copenhagen'));
    
    $dt_end = new DateTime();
    $dt_end->setTimestamp(strtotime($entity->field_dato["und"][0]['value2'] . " " ."UTC"));
    $dt_end->setTimezone(new DateTimeZone('Europe/Copenhagen'));
?>
<div class="card hp-joined-event-wrapper" style="">
    <b><?php echo $entity->title; ?></b><br/>
    Dato: <b><?php echo date('d-m-Y', strtotime($entity->field_dato["und"][0]['value']))  ?></b><br/>
    Start: <?php echo $dt_start->format('H:i') ?> - 
    Slut: <?php echo $dt_end->format('H:i'); ?><br/><br/>
    <?php echo '<input type="hidden" class="inline-place2book-ticketinfo" value="' . $entity->nid . '"/>'; ?>
</div>
<?php
}
?>

