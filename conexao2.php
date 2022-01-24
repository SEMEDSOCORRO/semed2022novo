<?php

$hostname = "localhost";
$user = "semedsoc";
$password ="34fMsz26fR";
$database ="semedsoc_db";
$conexao2 = mysqli_connect($hostname,$user,$password,$database);

$mysqli = mysqli_connect($hostname,$user,$password,$database);

if(!$conexao2) {
    print "falha na conexão com Banco de dados";
}

?>