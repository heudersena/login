<?php

class Conexao {

    private $usuario = "site.local";
    private $senha = "123456";
    private $caminho = "127.0.0.1";
    private $banco = "login";
    private $con;

    public function __construct() {
        $this->con = mysqli_connect($this->caminho, $this->usuario, $this->senha) or die("error ao conectar");
        mysqli_select_db($this->con, $this->banco) or die("erro ao conectar db");
    }

    /* fim da função construct */
    
    function getCon() {
        return $this->con; // Retorna a conexao
    }
}

/* fim da class conexao */
?>