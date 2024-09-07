<?php

require __DIR__ . "/src/Model/Genero.php";
require __DIR__ . "/src/Model/Titulo.php";
require __DIR__ . "/src/Model/Serie.php";
require __DIR__ . "/src/Model/Filme.php";
require __DIR__ . "/src/Calculos/CalculadoraDeMaratona.php";

echo "Bem-vindo(a) ao ScreenMatch\n";

$filme = new Filme('Thor - Ragnarok', 2021, Genero::SuperHeroi, 180);

$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(5);

var_dump($filme);

echo $filme->media() . "\n";

echo $filme->anoLancamento . "\n";

$serie = new Serie('Lost', 2008, Genero::Drama, 5, 22, 30);

echo $serie->anoLancamento . "\n";

$serie->avalia(8);

echo $serie->media() . "\n";

$calculadora = new CalculadoraDeMaratona();
$calculadora->incluir($filme);
$calculadora->incluir($serie);
$duracao = $calculadora->duracao();

echo "Para essa maratona, você precisa de $duracao minutos";