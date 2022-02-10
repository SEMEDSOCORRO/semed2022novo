<?php

//carregar as informações de banco de dados
include_once("conexao2.php");




// Lendo os dados do furmulário
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$ano = $_POST['ano'];
$ano = $_POST['mes'];
$ano = $_POST['dia'];
$nascimento = $_POST['ano']. "-" . $_POST ['mes'] . "-" . $_POST['dia'];
$pai = $_POST['pai'];
$mae = $_POST['mae'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$municipio = $_POST['municipio'];
$cep = $_POST['cep'];
$series = $_POST['series'];
$escolas = $_POST['escolas'];
$turno = $_POST['turno'];
$matricula = $_POST['matricula'];
$qtdVagas = $_POST['qtdVagas'];


// Validação se já existe matricula

$permiteMatricula = true;

$consultaMatriculaExistente = "select * from reserva where cpf = '$cpf'";
if ($resultado = $mysqli -> query($consultaMatriculaExistente)) {
        // testa se a quantiade de matriculas com esse cpf é maior que zero
        // se for maior que zero atribui a variáveio $permiteMatricula um valor falso
        if ($resultado -> num_rows > 0) {
                $permiteMatricula = false;
        }
}



// Inserir as informações no banco de dados
$sql = "INSERT INTO reserva (nome,cpf,nascimento,pai,mae,telefone,email,rua,numero,bairro,estado,cidade,municipio,cep,series,escolas,turno) values ('$nome','$cpf','$nascimento','$pai', '$mae', '$telefone', '$email' , '$rua', '$numero', '$bairro', '$estado', '$cidade', '$municipio', '$cep', '$series', '$escolas', '$turno') ";

if ($permiteMatricula) {
        $salvar = mysqli_query($conexao2, $sql);
        $matriculaEfetuada = true;
}


?>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/form.css">

    <style>  
        img {
                display: block;
                margin-left: auto;
                margin-right: auto;
                margin-bottom: 10px;
        }

        hr {
                margin-top: 0px;
        }

        h1 {
                margin: 30px 0px;
                padding: 0px;
                text-align: center;
                font-family: 'Roboto', sans-serif;
        }


        #titulo{
                text-align: center;
        
                
        }

        .campo{
                padding: 5px
        }
        </style>
</head>
<?php
if ($matriculaEfetuada) {
        $getDadosMatricula = "select * from reserva where escolas = '$escolas' and series = '$series' and cpf = '$cpf'";
        if ($resultadoDadosMatricula = $mysqli -> query($getDadosMatricula)) {
                while ($linha = $resultadoDadosMatricula->fetch_array()) {
                        $dataMatricula = $linha['dataMatricula'];
                }
        }
        // Trabalhar no comprovante
        ?>
        <div align="bottom" id="certificado" class="box">
                <img src="img/indice.jpg" alt="titulo_logo" width="400" height="100">
                <div class="campo" id="titulo">
                        <h4>COMPROVANTE DE CADASTRO RESERVA<h4>
                        <hr style="background-color:black">
                </div>
                
                <div class="campo">
                        Nome: <?php echo $nome ?>           
                </div>

                <div class="campo">
                        CPF: <?php echo $cpf ?>            
                </div>

                <div class="campo">
                        Data de cadastro: <?php echo $dataMatricula ?> 
                </div>
                <div class="campo">
                        Escola e Ano/Série: <?php echo $escolas ?> / <?php echo $series ?>         
                </div>
                
                <div align="center" style="text-align: center;">
                <h4>ORIENTAÇÕES<h4>
                <br>
                <div align="center" style="text-align: left;">
                <h6>Aguarde a ligação da escola ou da Secretaria de Educação em até 15 dias. Ao final deste prazo, caso não receba a ligação, dirija-se a escola. Para maiores esclarecimentos entre em contato com o telefone (79) 99605-4792</h6>
                <div>
                <div align="center" style="text-align: center;">        
                        <a href="#" onclick="javascript:window.print();">Imprimir
                
                </div>
        </div>






        <?php

}







   

mysqli_close($conexao2)
            
?>