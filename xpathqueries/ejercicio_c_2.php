<?php

$doc = new DOMDocument();
$doc->load("../xml/rss.xml");

$xpath = new DOMXPath($doc);

$result = $xpath->query("//item[last()-1]/description");

foreach ($result as $node) {
    echo $node->textContent;
}