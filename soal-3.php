<?php
function count_vowels($string) {
    // huruf vokal
    $vowels_alphabet = array('a', 'i', 'u', 'e', 'o');
    // jumlah huruf vokal
    $vowels_count = 0;
    // incremental untuk for loop
    $i = 0;
    // string yang sudah di konversi menajadi potongan - potongan character dalama sebuah array
    $string = str_split($string);

    // mencari huruf vokal dari variabel $string secara terus menerus sampai ke character terakhir
    for (; $i < count($string); $i++) {
        if (in_array($string[$i], $vowels_alphabet)) {
            ++$vowels_count;
        }
    }

    // output
    return $vowels_count;
}

//echo "Jumlah Huruf Vokal Dari 'alphabet' adalah : " . count_vowels('alphabet');

function hitung_ganjil($string) {
    $string = preg_match_all('/[0-9]/i', $string, $matches);

    $odd_num_count = 0;
    $odd_num = 0;
    $i = 0;

    for (; $i < count($matches[0]); $i++) {
        $odd_num = $matches[0][$i] % 2;
        if ($odd_num != 0) {
            ++$odd_num_count;
        }
    }
    
    echo $odd_num_count;
}

hitung_ganjil('123456789');