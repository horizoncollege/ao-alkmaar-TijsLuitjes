<?php

echo "Het albumoverzicht :";
$nummers = array("Citizin of Glass" => "€4,5", "Night" => "€9", "New Eyes" => "€5", "Strange Trials" => "€10");

foreach($nummers as $nummer => $value) {
    echo "$nummer kost $value" . PHP_EOL;
}

echo count($nummers)

?>