<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 24</title>
</head>
<body>
    <?php
        include 'Controle.php'
    ?>
 
    <h1>Controle de entradas e saidas</h1>

    <form method="POST">
    <label>informe o nome do cliente </label>
    <input type="text" id="nome" name="nome"><br><br>

    <label>informe o carro do cliente </label>
    <input type="text" id="carro" name="carro"><br><br>

    <label>informe o horario em que o carro entrou</label>
    <input type="Number" id="hrentrou" name="hrentrou"><br><br>
   
    <label>informe o dia em que o carro entrou </label>
    <input type="Number" id="diaentrou" name="diaentrou"><br><br>
   
    <label>informe o horario em que o carro saiu</label>
    <input type="Number" id="hrsaiu" name="hrsaiu"><br><br>
 
    <label>informe o dia em que o carro saiu </label>
    <input type="Number" id="diasaiu" name="diasaiu"><br><br>
   
    <label>gere e informe o codigo </label>
    <input type="Number" id="codigo" name="codigo"><br><br>
   
   
    <button>Gerar nota
    <?php
        session_start();
        try{
            $_SESSION['nome']       = $_POST['nome'];
            $_SESSION['carro']      = $_POST['carro'];
            $_SESSION['hrentrou']  = $_POST['hrentrou'];
            $_SESSION['diaentrou'] = $_POST['diaentrou'];
            $_SESSION['hrsaiu']    = $_POST['hrsaiu'];
            $_SESSION['diasaiu']   = $_POST['diasaiu'];
            $_SESSION['codigo']     = $_POST['codigo'];
        }catch(exception $erro){
            echo $erro;
        }
    ?>
    </button><br><br>
</body>
</html>
 