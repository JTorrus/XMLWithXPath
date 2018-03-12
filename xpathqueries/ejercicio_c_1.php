<?php

$doc = new DOMDocument();
$doc->load("../xml/rss.xml");

$xpath = new DOMXPath($doc);

$result = $xpath->query("//item/title");

foreach ($result as $node) {
    echo $node->textContent."<br>";
}