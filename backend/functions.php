<?php

function getVisIpAddr() {
      
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    }
    else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else {
        return $_SERVER['REMOTE_ADDR'];
    }
}
function check_login($connection){
    if(isset($_SESSION['user_id'])){
        $id = $_SESSION['user_id'];
        $query = "SELECT * FROM users WHERE user_id = '$id' limit 1";
        $result = mysqli_query($connection,$query);
        if($result && mysqli_num_rows($result) > 0){
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
}

function random_num($length) {
    $text = '';

    if($length < 5){
        $length = 5;
    }

    $len = rand(4,$length);

    for($i = 0; $i < $len; $i++){

        $text .= rand(0,9);
    }

    return $text;
}
?>