function replace_char(word, char_to_replace, replacement) {
    var
        chars = [], // karakter - karakter
        i = 0, // incremental
        newWord = ''; // kalimat baru
    
    // men-konversikan string ke array yang bersisi setiap karakter dari kalimat
    for (; i < word.length; i++) {
        chars[i] = word.charAt(i);
    }

    // mengganti karakter yang ingin diganti dengan yang baru
    chars[chars.indexOf(char_to_replace)] = replacement;
    
    i = 0;
    // menggabungkan karakter menjadi kalimat baru
    for(; i < chars.length; i++) {
        newWord += chars[i];
    }

    return newWord;
}

console.log(replace_char('bandung', 'u', 'oe'));