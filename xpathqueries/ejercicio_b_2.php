<?php

$doc = new DOMDocument();
$doc->load("../xml/bookstore.xml");

$xpath = new DOMXPath($doc);

$result = $xpath->query("//title | //description");

foreach ($result as $node) {
    echo $node->textContent."<br>";
}