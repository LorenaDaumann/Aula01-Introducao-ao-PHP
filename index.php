<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!--PARA ABRIR O CÓDIGO: http://localhost/aula01/-->

    <h1>Olá mundo!</h1>
    <p>Teste 123</p>

    <?php
    echo "Olá mundooo";
    //AULA 1
    /* echo escreve na tela - é um print da vida */
    // aaaaaaaaaaaaaaaaaaaaaaaaaa

    echo "<br>Meu nome é Lorena";
    echo "<br>";
    echo "Tenho 18 anos";

    // variaves
    $nome = "Lorena";
    $idade = 18;

    echo "<br><br>Olá, seu nome é " . $nome;
    echo "<br><br>Olá " . $nome . ", sua idade é " . $idade;


    //EXERCICIO 1
    // Crie variavei para nome, idade e cidade e exiba tudo em uma frase

    //EXERCICIO 2
    //mostre: 10+5 = 15 usando variaveis para os numeros

    //EXERCICIO 3
    //crie um 'produto' com nome e preço e exiba na tela


    ?>

    <?php
    //AULA 2
    include_once "header.php"; //pega todo o código do header e cola aqui
    echo "<br>Bem-vindo ";

    define("TURMA", "TIN3"); //se usa tudo maiusculo por convenção, para bater o olho e dizer que é uma contante
    //não é possivel alterar o valor de uma constante

    echo TURMA;


    echo "<br><br>Olá, seu nome é " . $nome . " e estou no " . TURMA . "<br><br>";

    //vetor
    $vetor = ["TIN3", 10, 3.14];

    echo $vetor[0];

    echo "<br>";

    foreach ($vetor as $valor) {
        echo $valor . "<br>";
    }

    ?>




    <?php
    //AULA 3
    //laço while
    $i = 1;

    echo "<br>";

    while ($i <= 10) {
        echo $i . ", <br>";
        $i++;
    }

    echo "<br>";

    //Laço for
    for ($j = 0; $j < 8; $j += 2) {
        echo $j . ", <br>";
    }


    //estrtura de decisão - if e else
    $idade = 18;

    if ($idade >= 18) {
        echo "você é maior de idade, uhul<br><br>";
    } else {
        "você é menor de idade, beta<br><br>";
    }

    $n1 = 3;
    $n2 = 6;
    $soma = $n1 + $n2;

    //if($n1 == $n2) valor igual
    //if($n1 === $n2) tipo igual(atring, number, etc)
    //if($n1 != $n2) valor diferente

    echo $soma;

    ?>

    <?php

    //JAVA: tipo (return)   -   privacidade  -  nomeFunaocao(){}
    // o que fica em PHP: function nomeFuncao(){}
    function mensagem()
    { //parâmetro: variavel
        echo "Olá<br>";
    }

    mensagem();
    mensagem();
    mensagem();

    function saudacao($nome)
    {
        echo "<br><br>Olá, " . $nome;
    }

    $nome = "Amanda";
    saudacao($nome);
    saudacao("Ana");

    function soma($n1, $n2)
    {
        return $n1 + $n2;
    }

    $result = soma(2, 5);
    echo "<br><br>O resultado da soma: {$result}"

    ?>

<!--<form action="processa.php" method="GET">  GET - passa pela url    POST - não passa
    <label>Nome:</label>
    <input type="text" name="nome">
    <button type="submit">Enviar</button>
</form>
-->
<br><br>
<form action="processa.php" method="POST">  <!--GET - passa pela url    POST - não passa-->
    <label>Nome:</label>
    <input type="text" name="nome">
    <button type="submit">Enviar</button>
</form>


</body>

</html>