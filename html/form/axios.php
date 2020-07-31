<?php
    $error = array();

    if(!isset($_POST['nameSei']) || empty($_POST['nameSei'])){
        $error['nameSei'] = '姓を入力してください';
    }

    if(!isset($_POST['nameMei']) || empty($_POST['nameMei'])){
        $error['nameMei'] = '名を入力してください';
    }

    echo json_encode($error,JSON_UNESCAPED_UNICODE);
    exit();

?>

