<?php
$repertoire_courant = './';

foreach (glob($repertoire_courant . '*', GLOB_MARK) as $element) {
    echo basename($element) . "<br>";
}
?>
