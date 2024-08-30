<?php

namespace projeto\estacionamento\PHP;


    class Mensalista{
        private string $nome;
        private int $telefone;
        private string $endereco;
        private string $carro;
        private string $placa;
        private string $cor;
        private string $dataPag;
        private int $valor;


        
    

    public function __construct($nome, $telefone, $endereco, $carro, $placa, $cor, $dataPag, $valor){
    $this->nome = $nome;
    $this->telefone = $telefone;
    $this->endereco = $endereco;
    $this->carro = $carro;
    $this->placa = $placa;
    $this->cor = $cor;
    $this->dataPag = $dataPag;
    $this->valor = $valor;
    }

    

    
    public function __get(string $name):mixed
        {
            return $this->name;
        }

    public function __set(string $name, mixed $value):void
        {
            $this->name = $value;
        }


    
    public function imprimir(): string{
    return  "<br> <br> nome ". $this->nome.
            "<br> telefone ". $this-> telefone.
            "<br> endereco ". $this-> endereco.
            "<br> carro ". $this-> carro.
            "<br> placa ". $this-> placa.
            "<br> cor ". $this-> cor.
            "<br> dataPag ". $this-> dataPag.
            "<br> valor <br> <br> ". $this-> valor;
      }
    }


?>