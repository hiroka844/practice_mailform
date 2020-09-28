<?php
    $error = array();

    if(!isset($_POST['name_sei']) || empty($_POST['name_sei'])){
        $error['name_sei'] = '姓を入力してください';
    }

    if(!isset($_POST['name_mei']) || empty($_POST['name_mei'])){
        $error['name_mei'] = '名を入力してください';
    }
    var_dump(77);
    echo json_encode($error,JSON_UNESCAPED_UNICODE);
    exit();

?>

