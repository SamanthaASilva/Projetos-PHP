<?php

$jogadorX = readline ("Digite o nome do jogador X:");
$jogadorO = readline ("Digite o nome do jogador O:");

echo "\n
|1| |2| |3|
|4| |5| |6|
|7| |8| |9|
\n";

$tabuleiro = array();
$tabuleiro [1] = "|1|";
$tabuleiro [2] = "|2|";
$tabuleiro [3] = "|3|";
$tabuleiro [4] = "|4|";
$tabuleiro [5] = "|5|";
$tabuleiro [6] = "|6|";
$tabuleiro [7] = "|7|";
$tabuleiro [8] = "|8|";
$tabuleiro [9] = "|9|";

$i = 0;

do{
$posicaoX = readline ("Escolha uma posição Jogador ".$jogadorX.":");
$posicaoO = readline ("Escolha uma posição Jogador ".$jogadorO.":");

$numeroX = $posicaoX;
$numeroO = $posicaoO;

if($posicaoX == $numeroX && $posicaoO == $numeroO){
    $tabuleiro[$numeroX] = "|X|";
    $tabuleiro[$numeroO] = "|O|";
    echo"
    $tabuleiro[1] $tabuleiro[2] $tabuleiro[3]
    $tabuleiro[4] $tabuleiro[5] $tabuleiro[6]
    $tabuleiro[7] $tabuleiro[8] $tabuleiro[9]\n\n";
}
$i = $tabuleiro;
if($i[1] == "|X|" && $i[2] == "|X|" && $i[3] == "|X|" || $i[1] == "|X|" && $i[4] == "|X|" && $i[7] == "|X|"){
    $i = "|X|";
    echo"Parabéns, o vencedor é o jogador $jogadorX!";
    exit();
}
elseif($i[3] == "|X|"&& $i[6] == "|X|" && $i[9] == "|X|" || $i[9] == "|X|" && $i[8] == "|X|" && $i[7] == "|X|"){
    $i = "|X|";
    echo"Parabéns, o vencedor é o jogador $jogadorX!";
    exit();
}
elseif($i[1] == "|X|" && $i[5] == "|X|" && $i[9] == "|X|"){
    $i = "|X|";
    echo"Parabéns, o vencedor é o jogador $jogadorX!";
    exit();
}
elseif($i[1] == "|O|" && $i[2] == "|O|" && $i[3] == "|O|" || $i[1] == "|O|" && $i[4] == "|O|" && $i[7] == "|O|"){
    $i = "|O|";
    echo"Parabéns, o vencedor é o jogador $jogadorO!";
    exit();
}
elseif($i[3] == "|O|"&& $i[6] == "|O|" && $i[9] == "|O|" || $i[9] == "|O|" && $i[8] == "|O|" && $i[7] == "|O|"){
    $i = "|O|";
    echo"Parabéns, o vencedor é o jogador $jogadorO!";
    exit();
}
elseif($i[1] == "|O|" && $i[5] == "|O|" && $i[9] == "|O|"){
    $i = "|O|";
    echo"Parabéns, o vencedor é o jogador $jogadorO!";
    exit();
} 
}while($i != "|X|" || $i != "|O|");
?>