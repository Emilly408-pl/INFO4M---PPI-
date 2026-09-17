<?php

require_once __DIR__ . '/../models/tarefa.php';

class TarefaController
{
    private $tarefasModel;

    public function __construct()
    {
        $this->tarefasModel = new Tarefas();
    }

    public function criar()
    {
        if (isset($_POST['descricao']) && !empty($_POST['descricao'])) {

            $this->tarefasModel->criar($_POST['descricao']);

        }

        header("Location: index.php");
        exit;
    }

    public function excluir()
    {
        if (isset($_GET['delete'])) {

            $this->tarefasModel->excluir($_GET['delete']);

        }

        header("Location: index.php");
        exit;
    }

    public function index()
    {
        $tarefas = $this->tarefasModel->listar();

        include __DIR__ . '/../views/listar.php';
    }
}
