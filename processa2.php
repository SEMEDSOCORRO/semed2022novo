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
$permiteReserva = true;
$consultaMatriculaExistente = "select * from matricula where cpf = '$cpf'";
if ($resultado = $mysqli -> query($consultaMatriculaExistente)) {
        // testa se a quantiade de matriculas com esse cpf é maior que zero
        // se for maior que zero atribui a variáveio $permiteMatricula um valor falso
        if ($resultado -> num_rows > 0) {
                $permiteMatricula = false;
				// Não faz reserva
                $permiteReserva = false;
        }
		
		// pega os dados do aluno já matriculado
		while ($linha = $resultado->fetch_array()) {
           $nomeEscolaAlunoJaMatriculado = $linha['escolas'];
        }
}

// Validação de quantidade de vagas
$sqlValidaVagas = "select * from matricula where escolas = '$escolas' and series = '$series'";
if ($resultadoValidaVagas = $mysqli -> query($sqlValidaVagas)) {
        // testa se a quantiade de matriculas com esse cpf é maior que zero
        // se for maior que zero atribui a variável $permiteMatricula um valor falso
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

if ($matriculaEfetuada || !$permiteReserva) {
        $getDadosMatricula = "select * from matricula where escolas = '$escolas' and series = '$series' and cpf = '$cpf'";
        if ($resultadoDadosMatricula = $mysqli -> query($getDadosMatricula)) {
                while ($linha = $resultadoDadosMatricula->fetch_array()) {
                        $dataMatricula = $linha['dataMatricula'];
						$nomeEscolaAlunoJaMatriculado = $linha['escolas'];
						$serieEscolaAlunoJaMatriculado = $linha['series'];
                }
        }
        // Trabalhar no comprovante
        ?>
        
	<?php 
        if (!$permiteReserva) { 
                ?>
        <div align="center" style="text-align: center;">
		<h4> <?php 
                echo "Esse aluno já encontra-se matriculado na escola " . $nomeEscolaAlunoJaMatriculado;
                ?> 
                </h4>
                <hr>
        </div>
        <?php
	}
		
		?>
        <div align="bottom" id="certificado" class="box">
                <img src="img/indice.jpg" alt="titulo_logo" width="400" height="100">
                <div class="campo" id="titulo">
                        <h4>COMPROVANTE DE PRE-MATRICULA:<h4>
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
                <h6>Imprima esse comprovante de pré-matrícula e dirija-se à escola selecionada, NO PRAZO MÁXIMO DE 05 DIAS, CONTADOS DA DATA DO CADASTRO, levando as cópias dos documentos abaixo, acompanhadas dos originais:<h6>
                
                <h6><strong>Documentos do aluno:<strong><h6>
                <h6>A) Duas fotos 3x4;<h6>
                <h6>B) Certidão de Nascimento;</h6>
                <h6>C) RG;</h6>
                <h6>D) CPF;</h6>
                <h6>E) Cartão de vacinação atualizado;</h6>
                <h6>F) Comprovante do Número de Identificação Social (NIS);</h6>
                <h6>G) Cartão do Sistema Único de Saúde (SUS);</h6>
                <h6>H) Transferência ou Declaração de Escolaridade (em caso de prosseguimento de estudos;</h6>
                <h6>I) Comprovante de pré-matrícula.</h6> 
                <br>
                <h6><strong>Documentos dos pais ou responsável:</strong><h6>
                <h6>A) RG;</h6>
                <h6>B) CPF;<h6>
                <h6>C) Comprovante do NIS (quando for o caso);</h6>
                <h6>D) Comprovante de residência no nome dos pais ou responsável legal (água, luz, telefone, ou contrato de locação), atualizado ou no máximo de 03 (três)meses; E) Termo de Guarda (definitivo ou provisório), declaração de responsabilidade ou declaração parental (são considerados responsáveis, para fins de matrícula, os avós e tios biológicos).</h6>

                <div>
                <div align="center" style="text-align: center;">        
                        <a href="#" onclick="javascript:window.print();">Imprimir
                
                </div>
        </div>
       <?php

} else {
        // Trabalhar na reserva
        ?>
        <body style="text-align: center;">
        <div align="center">
		<?php if ($permiteReserva) { ?>
			<h4> <?php echo "Infelizmente não há vagas disponíveis para essa escola nesse ano/série, gostaria de reservar uma vaga ou tentar uma vaga em outra escola?";?> </h4>
        		
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
		<?php } ?>	
        </body>
       <?php
}
mysqli_close($conexao2)
           
?>
         
         