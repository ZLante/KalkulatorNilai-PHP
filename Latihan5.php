<?php
$input = readline("Masukkan angka (1-10): ");
 
if (!is_numeric($input)) {
    echo "Error: bukan angka!\n";
} elseif (($input < 1) || ($input > 10)) {
    echo "Error: di luar rentang 1-10!\n";
}