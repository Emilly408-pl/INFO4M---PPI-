<?php

require_once __DIR__ . '/../config/database.php';

class Tarefas
{
    private $conn;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->conectar();
    }

    public function criar($descricao)
    {
        $descricao = $this->conn->real_escape_string($descricao);

        $sql = "INSERT INTO tarefas (descricao) VALUES ('$descricao')";

        return $this->conn->query($sql);
    }

    public function excluir($id)
    {
        $id = intval($id);

        $sql = "DELETE FROM tarefas WHERE id = $id";

        return $this->conn->query($sql);
    }

    public function listar()
    {
        $tarefas = [];

        $sql = "SELECT * FROM tarefas ORDER BY data_criacao DESC";

        $resultados = $this->conn->query($sql);

        if ($resultados->num_rows > 0) {
            while ($rowados = $resultados->fetch_assoc()) {
                $tarefas[] = $rowados;
            }
        }

        return $tarefas;
    }
}
?>
