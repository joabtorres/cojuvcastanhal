<?php

/*
 * config.php  - Este arquivo contem informações referente a: Conexão com banco de dados e URL Pádrão
 */

require 'environment.php';
$config = array();
if (ENVIRONMENT == 'development') {
    //Raiz
    define("BASE_URL", "http://localhost:8080/cojuvcastanhal");
    define("BASE_URL_PAINEL", "http://localhost:8080/cojuvcastanhal/painel_cojuv");
    //Nome do banco
    $config['dbname'] = 'codjuven';
    //host
    $config['host'] = 'localhost';
    //usuario
    $config['dbuser'] = 'root';
    //senha
    $config['dbpass'] = '';
} else {
	//Raiz
    define("BASE_URL", "http://www.cavanis.edu.br");
    define("BASE_URL_PAINEL", "http://cavanis.edu.br/painel/");
      //Nome do banco
    $config['dbname'] = 'codjuven';
    //host
    $config['host'] = 'mysql.cavanis.edu.br';
    //usuario
    $config['dbuser'] = 'cavanis1';
    //senha
    $config['dbpass'] = '+f#yNqTQq2)L';
}
?>
