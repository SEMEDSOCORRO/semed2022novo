<?php

$hostname = "localhost";
$user = "semedsoc";
$password ="34fMsz26fR";
$database ="semedsoc_db";
$conexao = mysqli_connect($hostname,$user,$password,$database);
$mysqli = new mysqli($hostname,$user,$password,$database);
if(!$conexao) {
    print "falha na conexão com Banco de dados";
}

?>
