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
    Suma de las calorias de todos los platos en menu.xml
</h1>
</body>
</html>

<?php

$doc = new DOMDocument();
$doc->load("../xml/menu.xml");

$xpath = new DOMXPath($doc);

$result = $xpath->evaluate("sum(//calories)");

echo "Hay un total de ".$result. " calorias";
