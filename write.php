<?php
$file = "text.txt";
$existingData = file_get_contents($file);
$fp= fopen($file, "w");
fwrite($fp,$existingData);
fwrite($fp, "Sabiha mahbuba\n");
fwrite($fp, "mahi mahbuba\n");