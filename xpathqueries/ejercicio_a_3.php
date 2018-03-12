<?php

$doc = new DOMDocument();
$doc->load("../xml/menu.xml");

$xpath = new DOMXPath($doc);

$result = $xpath->evaluate("sum(//calories)");

echo $result;
