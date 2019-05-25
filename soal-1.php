<?php
//
function generate_biodata() {
    $my_biodata = array(
        'name' => 'Fikri Haikal',
        'hobbies' => array(
            'programming',
            'gaming'
        ),
        'is_married' => FALSE,
        'school' => array(
            'highSchool' => 'SMK Al Falah Dago Bandung',
            'highSchool' => ''
        ),
        'skills' => array(
            array(
                'name' => 'PHP',
                'score' => 80
            ),
            array(
                'name' => 'HTML',
                'score' => 80
            ),
            array(
                'name' => 'JavaScript',
                'score' => 80
            ),
            array(
                'name' => 'CSS',
                'score' => 80
            )
        )
    );

    // output (encode associative array menjadi json)
    return json_encode($my_biodata);
}

function create_rest_api($file_name) {
    // cek jika folder rest api ada atau tidak, jika tidak ada folder akan otomatis dibuat
    if (!is_dir('rest-api')) {
        mkdir('rest-api');
    }
    
    // buka file rest api, jika tidak ada fungsi fopen akan membuatnya secara otomatis
    $file = fopen('rest-api/' . $file_name, 'w+');

    // menulis output dari fungsi generate_biodata kedalama file rest api
    if(fwrite($file, generate_biodata())) {
        var_dump($file);
        // index pertama adalah status, dan index kedua adalah link rest pai
        return array(
            TRUE,
            'http://localhost/bootcamp-test-project/rest-api/' . $file_name
        );
    } else {
        return FALSE;
    }
}
// output dari create_rest_api
$rest_api = create_rest_api('biodata.json');

//jika statusnya true maka halaman akan dialihkan ke file rest api
if ($rest_api[0]) {
    header('Location: ' . $rest_api[1]);
} else {
    echo 'failed to create rest api';
}