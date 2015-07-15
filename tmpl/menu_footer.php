<?php

$items = array();
$items['Contacto'] = 'contacto';
$items['Legal'] = 'legal';


echo '<div class="links">';
$i = 0;
foreach ($items as $key => $value) {
    $classes = '';
    $classes.=$page == $value ? " current" : "";
    $classes.=$i == 0 ? " first" : "";
    $classes.=$i == (count($items) -1) ? " last " : "";
    if (CLEAN_URL) {
        echo '<span class="'.$classes.'" ><a href="' . $value . '">' . $key . '</a></span>';
    } else {
        echo '<span class="'.$classes.'"><a href="index.php?p=' . $value . '">' . $key . '</a></span>';
    }
    
    $separator=$i == (count($items) -1) ? "" : " | ";
    echo $separator;

    $i++;
}
echo '</div>';
?>
