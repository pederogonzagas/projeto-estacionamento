<?php
namespace projeto\estacionamento\PHP;
use projeto\estacionamento\PHP\Controle;
use projeto\estacionamento\PHP\Funcionario;
use projeto\estacionamento\PHP\Gerente;
use projeto\estacionamento\PHP\Mensalista;

require_once("Controle.php");
require_once("Funcionario.php");
require_once("Gerente.php");
require_once("Mensalista.php");


$entrada = new Controle("pedro", "porsche", 18.20, 20.20, 10, 11, 34289);
echo $entrada->imprimir();

$trabalhador = new Funcionario("pedro", "18/12/2007", 2109837123, "rua tamo junto 123", 3000, "frentista");
echo $trabalhador->imprimir();

$gerente = new Gerente("claudio", "30/04/1999", 29813728391, "rua mais ou menos ", 5000, "gerente");
echo $gerente->imprimir();

$mensal = new Mensalista("paulo", 379828098, "rua nicaragua", "ford focus", "qty9876", "preto", "19/09", 250);
echo $mensal->imprimir();

?>