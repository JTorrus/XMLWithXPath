<?php

$doc = new DOMDocument();
$doc->load("../xml/menu.xml");

$xpath = new DOMXPath($doc);

$result = $xpath->query("/menu/menjar/descripcio")[3];

echo $result->textContent;