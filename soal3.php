
<?php

echo "Nama: Noviona M S\n";
echo "\n";

function balancebracket($input) {
    $stack = [];
    $brackets = [
        ')' => '(',
        ']' => '[',
        '}' => '{'
    ];
    $input = str_replace(' ', '', $input);

    for ($i = 0; $i < strlen($input); $i++) {
        $char = $input[$i];

        if (in_array($char, ['(', '[', '{'])) {
            array_push($stack, $char);
        } elseif (isset($brackets[$char])) {
            if (empty($stack) || array_pop($stack) !== $brackets[$char]) {
                return "NO";
            }
        }
    }

    return empty($stack) ? "YES" : "NO";
}
echo "Masukkan bracket: ";
$input = trim(fgets(STDIN));
$output = balancebracket($input);
echo "Output: $output\n";

?>