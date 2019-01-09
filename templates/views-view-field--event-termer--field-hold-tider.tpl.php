<?php
$test = 0;
foreach($row->field_field_hold_tider as $inline_obj)
{
    $entity = $inline_obj['raw']['entity'];
    $p2b_id = $entity->field_place2book_tickets['und'][0]['value'];
?>
<div class="card" style="border:2px solid black;padding:5px;float:left;border:10%;margin-right: 5px;">
    <b><?php echo $entity->title; ?></b><br/>
    Dato: <b><?php echo date('d-m-Y', strtotime($entity->field_dato["und"][0]['value']))  ?></b><br/>
    Start: <?php echo date('H:i', strtotime($entity->field_dato["und"][0]['value'])) ?> - 
    Slut: <?php echo date('H:i', strtotime($entity->field_dato["und"][0]['value'])) ?><br/><br/>
    <?php echo '<input type="hidden" class="inline-place2book-ticketinfo" value="' . $entity->nid . '"/>'; ?>
</div>
    
<?php
}
?>

