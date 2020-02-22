<?php
#
# An expando part.
# This part is a form view component for displaying an expandable field.
# Copyright 2020 Christopher Reilly
#

function makeExpandoPart($name, $label, $initialValue)
{
    $part = array (
            'expanded'=>TRUE,
            'initialValue'=>$initialValue,
            'label'=>$label,
            'name'=>$name
            );
    return $part;
}

function printExpandoPart($part)
{
    $expanded = $part['expanded'] == TRUE ? 'expanded' : 'contracted';
    echo '<div class="inline expando container '
        . $expanded
        . '" onclick="toggleExpando(this);">';
    echo '<input name="'.$part['name'].'" id="'
        . $part['name']
        . '" type="text" class="primary" value="'
        . $part['initialValue']
        . '" onclick="event.cancelBubble=true;"/>';
    echo '<br/>';
    echo '<label for="'.$part['name'].'">'.$part['label'].'</label>';
    echo '</div>';
}
?>
