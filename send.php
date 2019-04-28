<?php

require_once './vendor/autoload.php';

$db = new MysqliDb ([
    'host' => '120.77.41.244',
    'username' => 'test',
    'password' => 'test',
    'db' => 'p2p',
    'port' => 3306,
    'prefix' => 'cl_',
    'charset' => 'utf8'
]);

$params = [1, -1];
while (true){
    $users = $db->rawQuery("SELECT count(*) as nums FROM cl_investor WHERE is_order_taking = ? AND ws_online = ?", $params);
    echo json_encode(['counts'=>$users[0]['nums']]). "\n";
    usleep(500000);
}


