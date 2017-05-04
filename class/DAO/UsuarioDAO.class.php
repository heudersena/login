<?php

class UsuarioDAO {

    private $conexao;

    function __construct() {
        $this->conexao = new Conexao();
    }

    function login($login, $senha) {
        $sql = "SELECT * FROM usuario WHERE loginUsuario = '$login' AND senhaUsuario = '$senha' ";
        $executa = mysqli_query($this->conexao->getCon(), $sql);

        if (mysqli_num_rows($executa) > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
