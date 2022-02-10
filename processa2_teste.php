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

$consultaMatriculaExistente = "select * from matricula where cpf = '$cpf'";
if ($resultado = $mysqli -> query($consultaMatriculaExistente)) {
        // testa se a quantiade de matriculas com esse cpf é maior que zero
        // se for maior que zero atribui a variáveio $permiteMatricula um valor falso
        if ($resultado -> num_rows > 0) {
                $permiteMatricula = false;
        }
}


// Validação de quantidade de vagas
$sqlValidaVagas = "select * from matricula where escolas = '$escolas' and series = '$series'";
if ($resultadoValidaVagas = $mysqli -> query($sqlValidaVagas)) {
        // testa se a quantiade de matriculas com esse cpf é maior que zero
        // se for maior que zero atribui a variáveio $permiteMatricula um valor falso
        if ($resultadoValidaVagas -> num_rows >= $qtdVagas) {
                $permiteMatricula = false;
                $fazReserva = true;
        }
}




// Inserir as informações no banco de dados
$sql = "INSERT INTO matricula (nome,cpf,nascimento,pai,mae,telefone,email,rua,numero,bairro,estado,cidade,municipio,cep,series,escolas,turno,matricula) values ('$nome','$cpf','$nascimento','$pai', '$mae', '$telefone', '$email' , '$rua', '$numero', '$bairro', '$estado', '$cidade', '$municipio', '$cep', '$series', '$escolas', '$turno', '$matricula') ";

if ($permiteMatricula) {
        $salvar = mysqli_query($conexao2, $sql);
        $matriculaEfetuada = true;
}


?>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <header>
        <div class="container" id="nav-container">
        <!-- add essa class -->
            <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
            <img id="logo" src="img/logo3 2.png" alt="Semed"> 
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                <div class="navbar-nav">
                    <a style="font-size:large; border-radius:30px; background-color: white; color:#04a486" class="nav-item nav-link" id="home-menu" href="http://localhost/SEMED_Matriculas-main/matricula2022/index.php">Inicio</a>  
                </div>
            </div>
            </nav>
        </div> 
        <br>
        <br>
        <br> 
    </header>
<body>
<?php

if ($matriculaEfetuada) {
        $getDadosMatricula = "select * from matricula where escolas = '$escolas' and series = '$series' and cpf = '$cpf'";
        if ($resultadoDadosMatricula = $mysqli -> query($getDadosMatricula)) {
                while ($linha = $resultadoDadosMatricula->fetch_array()) {
                        $dataMatricula = $linha['dataMatricula'];
                }
        }
        // Trabalhar no comprovante
        ?>
        <table border="0">
                <tr>
                        <td colspan="2"> COMPROVANTE DE PRE MATRICULA </td>
                </tr>
                <tr>
                        <td> Nome </td>
                        <td> <?php echo $nome ?> </td>
                </tr>
                <tr>
                        <td> CPF </td>
                        <td> <?php echo $cpf ?>  </td>
                </tr>
                <tr>
                        <td> Data de cadastro </td>
                        <td> <?php echo $dataMatricula ?> </td>
                </tr>
                <tr>
                        <td> Escola / Série </td>
                        <td> <?php echo $escolas ?> / <?php echo $series ?> </td>
                </tr>
                
                <tr>
                        <td colspan="2"> TEXO PARA SUBSTITUIR </td>
                        <td> </td>
                </tr>
                <tr>
                        <td colspan="2"><a href="#" onclick="javascript:window.print();">Imprimir </td>
        
                </tr>
        </table>
       <?php

} else {
        // Trabalhar na reserva
        ?>
        <body style="text-align: center;">
        <div align="center">
        <h1> <?php echo "Infelizmente não há vagas disponíveis para essa escola nesse ano/série, gostaria de reservar uma vaga ou tentar uma vaga em outra escola?";?> </h1>
        <form method="post" action="reserva.php">
                <input type="hidden" value="<?php echo $nome      ;?>" name="nome"/>
                <input type="hidden" value="<?php echo $cpf       ;?>" name="cpf"/>
                <input type="hidden" value="<?php echo $ano       ;?>" name="ano"/>
                <input type="hidden" value="<?php echo $mes       ;?>" name="mes"/>
                <input type="hidden" value="<?php echo $dia       ;?>" name="dia"/>
                <input type="hidden" value="<?php echo $pai       ;?>" name="pai"/>
                <input type="hidden" value="<?php echo $mae       ;?>" name="mae"/>
                <input type="hidden" value="<?php echo $telefone  ;?>" name="telefone"/>
                <input type="hidden" value="<?php echo $email     ;?>" name="email"/>
                <input type="hidden" value="<?php echo $rua       ;?>" name="rua"/>
                <input type="hidden" value="<?php echo $numero    ;?>" name="numero"/>
                <input type="hidden" value="<?php echo $bairro    ;?>" name="bairro"/>
                <input type="hidden" value="<?php echo $estado    ;?>" name="estado"/>
                <input type="hidden" value="<?php echo $cidade    ;?>" name="cidade"/>
                <input type="hidden" value="<?php echo $municipio ;?>" name="municipio"/>
                <input type="hidden" value="<?php echo $cep       ;?>" name="cep"/>
                <input type="hidden" value="<?php echo $series    ;?>" name="series"/>
                <input type="hidden" value="<?php echo $escolas   ;?>" name="escolas"/>
                <input type="hidden" value="<?php echo $turno     ;?>" name="turno"/>
                <input type="hidden" value="<?php echo $matricula ;?>" name="matricula"/>
                <input type="hidden" value="<?php echo $qtdVagas  ;?>" name="qtdVagas"/>
                <input type="submit" value="SIM, fazer cadastro reserva" style="background-color:#04a486; color:white; border-radius: 30px; font-family:Verdana, Geneva, Tahoma, sans-serif"/>
                <input type="button" value="NÃO, tentar em outra escola" onclick="history.back()" style="background-color:#04a486; color:white; border-radius: 30px; font-family:Verdana, Geneva, Tahoma, sans-serif"/>
        </form> 
        </body>
       <?php


}

mysqli_close($conexao2)
            
?>
         
         