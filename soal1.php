
<?php

echo "Nama: Noviona M S\n";
echo "\n";

function rumus($n) {
    $hasil = [];
    $a0 = 1;
    $hasil[] = $a0;
    
    for ($i = 1; $i <$n; $i++){
        $a0 +=$i;
        $hasil[] = $a0;

    } 
    return implode("-",$hasil);


}
echo "Masukkan/Input Nilai : ";
$input = fopen("php://stdin", "r");
$n = intval(trim(fgets($input)));
echo "Output: " . rumus($n) . PHP_EOL;
?>