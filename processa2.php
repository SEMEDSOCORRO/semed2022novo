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
                        <td> <?php echo $escolas ?> / <?pho echo $series ?> </td>
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
        echo "Não tem vagas para essa série, deseja fazer a reserva Sim ou Não";
        ?>
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
                <input type="submit" value="Efetuar Reserva" />
                <input type="button" value="Voltar" onclick="history.back()" />
        </form> 





        <?php


}







   

mysqli_close($conexao2)
            
?>
         
         