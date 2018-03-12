<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>
    Título de las noticias, pero no el titulo principal en rss.xml
</h1>
</body>
</html>

<?php

$doc = new DOMDocument();
$doc->load("../xml/rss.xml");

$xpath = new DOMXPath($doc);

$result = $xpath->query("//item/title");

foreach ($result as $node) {
    echo $node->textContent."<br>";
}