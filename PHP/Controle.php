<?php

namespace projeto\estacionamento\PHP;


class Controle{
    private string $nome;
    private string $carro;
    private int $hrEntrada;
    private int $hrSaida;
    private int $diaEntrada;
    private int $diaSaida;
    private int $codigo;


    function __construct($nome, $carro, $hrEntrada, $hrSaida, $diaEntrada, $diaSaida, $codigo)
    {
    $this->nome = $nome;
    $this->carro = $carro;
    $this->hrEntrada = $hrEntrada;
    $this->hrSaida = $hrSaida;
    $this->diaEntrada = $diaEntrada;
    $this->diaSaida = $diaSaida;
    $this->codigo = $codigo;
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
        $_SESSION['nome']       = $_POST['nome'];
        $_SESSION['carro']      = $_POST['carro'];
        $_SESSION['hrEntrada']  = $_POST['hrEntrada'];
        $_SESSION['hrSaida']    = $_POST['hrSaida'];
        $_SESSION['diaEntrada'] = $_POST['diaEntrada'];
        $_SESSION['diaSaida']   = $_POST['diaSaida'];
        $_SESSION['codigo']     = $_POST['codigo'];
    }catch(exception $erro){
        echo $erro;
    }

    ?>
</button>

<button><a href="Notinha.php"></button>IMPRIMIR NOTINHA</a>