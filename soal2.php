
<?php

echo "Nama: Noviona M S\n";
echo "\n";

function denserank($mainskor, $mainskorgits) {
    $urutanskor = array_unique($mainskor);
    rsort($urutanskor);
    $hasil = [];
    
    foreach($mainskorgits as $skorgits){
        $rank = 1;
        foreach ($urutanskor as $skor) {
            if ($skorgits >= $skor) {
                break;
            }
            $rank++;

        }
        $hasil[] = $rank;

    }
    return $hasil;
}
// sampel input
$n = 7;
$mainskor = [100, 100, 50, 40, 40, 20, 10]; 
$m = 4;
$mainskorgits = [5, 25, 50, 120];
$hasil = denserank($mainskor, $mainskorgits);
echo implode(' ', $hasil) . PHP_EOL;
?>