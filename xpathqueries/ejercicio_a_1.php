<?php

$doc = new DOMDocument();
$doc->load("../xml/menu.xml");

$xpath = new DOMXPath($doc);

$result = $xpath->query("/menu/menjar/nom");

foreach ($result as $node) {
    echo $node->textContent."<br>";
}
