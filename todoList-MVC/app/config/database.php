<?php

class Database {

    private $host = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $banco = "todo_list";
    private $conn = "";

    public function conectar() {

        $this->conn = new mysqli(
            $this->host,
            $this->usuario,
            $this->senha,
            $this->banco
        );

        if ($this->conn->connect_error) {
            die("Algo deu errado: " . $this->conn->connect_error);
        }

        return $this;
    }
}

?>