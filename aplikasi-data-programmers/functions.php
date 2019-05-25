<?php
if ($_POST) {
    $configs = array(
        'database' => 'daftar_programmer',
        'host' => 'localhost',
        'username' => 'root',
        'password' => ''
    );

    $mysqli = new mysqli($configs['host'], $configs['username'], $configs['password'], $configs['database']);
    $data = $_POST; // tambahkan xss_clean

    if ($data['action'] == 'anp-btn') {
        $query = "INSERT INTO users (id, name) VALUES ('" . $data['id'] . "', '" . $data['name'] . "');";
        if ($result = $mysqli->query($query)) {
            echo json_encode(array(
                'status' => 'success',
                'message' => $data['name'] . ' Berhasil Ditambahkan!'
            ));
        } else {
            echo json_encode(array(
                'status' => 'failed',
                'message' => $data['name'] . ' Gagal Ditambahkan ' . $query . ' ' . $mysqli->error
            ));
        }
    } else if ($data['action'] == 'add_skill_btn') {
        $query = "SELECT id FROM `users` WHERE name = '" . $data['username'] . "'";
        $result = $mysqli->query($query);
        $result = $result->fetch_assoc();
        $user_id = $result['id'];

        $querychk = "SELECT * FROM skills WHERE `user_id` = '" . $user_id . "'";
        $result2 = $mysqli->query($querychk);
        $result2 = $result2->fetch_assoc();
        
        if ($result2) {
            $query = "UPDATE `skills` SET `name` = '" . $result2['name'] . $data['name'] . "' WHERE user_id = '". $user_id ."' ";
            if ($result = $mysqli->query($query)) {
                echo json_encode(array(
                    'status' => 'success',
                    'message' => $data['name'] . ' Berhasil Di Update!'
                ));
            } else {
                echo json_encode(array(
                    'status' => 'failed',
                    'message' => 'no request ' . $query . $mysqli->error
                ));
            }
        } else {

            $query = "INSERT INTO skills (name, user_id) VALUES ('" . $data['name'] . "', '" . $user_id . "');";

            if ($result = $mysqli->query($query)) {
                echo json_encode(array(
                    'status' => 'success',
                    'message' => $data['name'] . ' Berhasil Ditambahkan!'
                ));
            } else {
                echo json_encode(array(
                    'status' => 'failed',
                    'message' => 'no request ' . $query . $mysqli->error
                ));
            }
        }
    }
} else {
    echo json_encode(array(
        'status' => 'failed',
        'message' => 'no request'
    ));
}
