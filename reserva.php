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



if ($matriculaEfetuada) {
        $getDadosMatricula = "select * from reserva where escolas = '$escolas' and series = '$series' and cpf = '$cpf'";
        if ($resultadoDadosMatricula = $mysqli -> query($getDadosMatricula)) {
                while ($linha = $resultadoDadosMatricula->fetch_array()) {
                        $dataMatricula = $linha['dataMatricula'];
                }
        }
        // Trabalhar no comprovante
        ?>
        <table border="0">
                <tr>
                        <td colspan="2"> COMPROVANTE DE RESERVA </td>
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

}







   

mysqli_close($conexao2)
            
?>
         
         