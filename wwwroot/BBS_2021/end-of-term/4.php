<?php

$titlm = strval($_POST["title"] ?? "");
$name = strval($_POST["name"] ?? "");

echo htmlspecialchars($titlm), "<br>\n";
echo htmlspecialchars($name), "<br>\n";
