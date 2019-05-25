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

echo count_vowels('alphabet');