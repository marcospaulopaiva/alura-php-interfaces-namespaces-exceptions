<?php

use ScreenMatch\Calculos\ConversorNotaEstrela;
use ScreenMatch\Model\Episodio;
use ScreenMatch\Model\Genero;
use ScreenMatch\Model\Serie;

require 'autoload.php';

$serie = new Serie('Nome da serie',2024, Genero::Acao, 7, 20, 30);
$episodio = new Episodio($serie, 'Piloto', 1);
//$episodio->avalia(10);

$conversor = new ConversorNotaEstrela();
echo $conversor->converte($episodio);