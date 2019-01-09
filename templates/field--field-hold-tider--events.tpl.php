<?php
foreach($element["#object"]->field_hold_tider['und'] as $inline_obj)
{
    $entity = $inline_obj['entity'];
    $p2b_id = $entity->field_place2book_tickets['und'][0]['value'];
?>

<div class="card" style="with:55px;border:2px solid black;padding:5px;display:inline-block;border:10%;margin-right: 5px;">
    <b><?php echo $entity->title; ?></b><br/>
    Dato: <b><?php echo date('d-m-Y', strtotime($entity->field_dato["und"][0]['value']))  ?></b><br/>
    Start: <?php echo date('H:i', strtotime($entity->field_dato["und"][0]['value'])) ?> - 
    Slut: <?php echo date('H:i', strtotime($entity->field_dato["und"][0]['value'])) ?>
    <?php echo '<input type="hidden" class="inline-place2book-ticketinfo" value="' . $entity->nid . '"/>'; ?>
</div> 
<?php
}
?>
