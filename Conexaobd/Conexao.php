<?php
define("USER", "root");
define("PASS", "");
define("HOST", "localhost");
define("DBNAME", "nomeBD");
define("HOME", "http://localhost/ProgramacaoPHPMoodle");

//CONEXAO COM O BANCO DE DADOS
function conectar() {
    $dsn = "mysql:host=" . HOST . ";dbname=" . DBNAME . "";
    try {
        $conectar = new PDO($dsn, USER, PASS);
        $conectar->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Erro ao conectar ao banco " . $e->getMessage();
    }
    return $conectar;
}
