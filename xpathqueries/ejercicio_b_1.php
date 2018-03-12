<?php

$doc = new DOMDocument();
$doc->load("../xml/bookstore.xml");

$xpath = new DOMXPath($doc);

$result = $xpath->query("//book[@id='bk104']/title");

foreach ($result as $node) {
    echo $node->textContent."<br>";
}