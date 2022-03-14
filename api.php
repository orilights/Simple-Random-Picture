<?php

const DBFILE = 'data/emilia.txt';

//读取数据
$data = file(DBFILE, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
if (empty($data[0])){
    header('HTTP/1.1 503 Service Unavailable');
    die ('503 Service Unavailable');
}

//初始化
header('Access-Control-Max-Age: 86400');
header('Access-Control-Allow-Origin: *');
$id = $_REQUEST['id'];
$type = $_REQUEST['type'];
$quantity = count($data);

//处理id
if(!isset($id)){
    $id = array_rand($data) + 1;
}
settype($id,'integer');
if ($id <= 0 || $id > $quantity){
    $id = array_rand($data) + 1;
}

//输出或跳转
$pic = $data[$id - 1];
switch ($type) {
    case 'quantity':
        echo $quantity;
        break;
    case 'json':
        $result = [
            'code' => 200,
            'id' => $id,
            'url' => $pic
        ];
        header('Content-Type: text/json');
        echo json_encode($result);
        break;
    default:
        header("Location:" . $pic);
}

?>