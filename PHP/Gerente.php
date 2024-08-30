<?php

namespace projeto\estacionamento\PHP;

    
class Gerente{
        private string $nome;
        private string $dataNas;
        private int $telefone;
        private string $endereco;
        private int $salario;
        private string $cargo;


    
        
    function __construct($nome,
        $dataNas,
        $telefone, 
        $endereco, 
        $salario, 
        $cargo){
    $this->nome = $nome;
    $this->dataNas = $dataNas;
    $this->telefone = $telefone;
    $this->endereco = $endereco;
    $this->salario = $salario;
    $this->cargo = $cargo;
    }

    

    function __get(string $name):mixed
        {
            return $this->name;
        }

    function __set(string $name, mixed $value):void
        {
            $this->name = $value;
        }  
    }

    
   ?>
<button>
    <?php
    session_start();
    try{
        $_SESSION['nome']     = $_POST['nome'];
        $_SESSION['telefone'] = $_POST['telefone'];
        $_SESSION['endereco'] = $_POST['endereco'];
        $_SESSION['carro']    = $_POST['carro'];
        $_SESSION['placa']    = $_POST['placa'];
        $_SESSION['cor']      = $_POST['cor'];
        $_SESSION['nome']     = $_POST['nome'];
        $_SESSION['dataPag']  = $_POST['dataPag'];
        $_SESSION['valor']    = $_POST['valor'];
    }catch(Exception $erro){
        echo $erro;
    }
    ?>
</button>

    <button><a href="Funcionario2.php"></button>MODIFICAR FUNCIONARIO</a>
