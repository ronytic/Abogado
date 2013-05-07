<?php
function resaltar($cadena, $arr_palabras) {
    if (!is_array ($arr_palabras) || empty ($arr_palabras) || !is_string ($cadena)) {
        return false;
    }
    $str_palabras = implode ('|', $arr_palabras);
    return preg_replace ('@\b('.$str_palabras.')\b@si', '<a href="palabra.php?p=$1" class="palabraresaltar" target="_blank">$1</a>', $cadena);
}
?>