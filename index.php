<?php

$categorias= [];
$categorias [] = 'crianças';
$categorias [] = 'adolescentes';
$categorias [] = 'adultos';
$categorias [] = 'idoso;';

//print_r($categorias);

$nome ='eduardo';
$idade = 8;

//var_dump($nome);
//var_dump($idade);



if($idade>= 6 && $idade<=12)
{
    echo 'infantil';
}
    else if($idade>=13 && $idade <=18)
    {
        echo 'adolecente';
    }
else
{
    echo 'adulto';
}