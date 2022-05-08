<?php

$command = escapeshellcmd('python3 crawler.py');
$output = shell_exec($command);
echo $output;

?>
