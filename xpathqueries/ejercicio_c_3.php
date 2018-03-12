<?php

$doc = new DOMDocument();
$doc->load("../xml/rss.xml");

$xpath = new DOMXPath($doc);

$result = $xpath->evaluate("count(//item)");

echo "Hay ". $result. " noticias";