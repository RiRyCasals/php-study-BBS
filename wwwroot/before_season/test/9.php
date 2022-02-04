<?php
$f_obj = new SplFileObject(__FILE__);

foreach($f_obj as $no => $line) {
    echo $line, "<br>\n";
}