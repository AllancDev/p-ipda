<?php
    require_once("environment.php");
    date_default_timezone_set("America/Sao_Paulo");
    setlocale(LC_ALL, 'pt_BR');

    
    $config = array();

    if(ENVIRONMENT == 'development') {
        define("BASE_URL", "http://localhost/p-ipda/");
        define("ROOT_SYSTEM", $_SERVER['DOCUMENT_ROOT'] . '/p-ipda/');
        $config['db_host'] = '127.0.0.1';
        $config['db_name'] = 'db_ipda';
        $config['db_user'] = 'root';
        $config['db_pass'] = '';
    } else {
        define("BASE_URL", "");
        define("ROOT_SYSTEM", $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'p-ipda' . DIRECTORY_SEPARATOR);
        $config['db_host'] = '';
        $config['db_name'] = '';
        $config['db_user'] = '';
        $config['db_pass'] = '';
    }

    global $db;

    try {
        $db = new PDO("mysql:dbname=" . $config['db_name'] . ";host=" . $config['db_host'] . ";charset=utf8", $config['db_user'], $config['db_pass']);
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "ERRO: " . $e -> getMessage();
        exit;
    }


?>