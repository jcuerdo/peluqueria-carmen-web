<?php


$items = array();
$items['Inicio'] = 'index';
$items['Noticias'] = 'noticias';
$items['Fotos'] = 'fotos';
$items['Servicios'] = 'servicios';
$items['Localización'] = 'localizacion';
$items['Contacto'] = 'contacto';


echo '<ul class="menu">';
$i = 0;
foreach ($items as $key => $value) {
    $classes = '';
    $classes.=$page == $value ? " current_page_item" : "";
    $classes.=$i == 0 ? " first" : "";
    $classes.=$i == (count($items) -1) ? " last " : "";
    if (CLEAN_URL) {
        echo '<li class="'.$classes.'" ><a href="' . $value . '">' . $key . '</a></li>';
    } else {
        echo '<li class="'.$classes.'"><a href="index.php?p=' . $value . '">' . $key . '</a></li>';
    }

    $i++;
}
echo '</ul>';
?>


