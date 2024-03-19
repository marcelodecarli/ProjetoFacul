<?php
// Conexão com o banco de dados (mesmo código que você já tem)
$link = mysqli_connect("localhost", "root", "161019", "uniasselvi2");
if ($link === false) {
    die("ERRO: Não foi possível conectar ao BD. " . mysqli_connect_error());
}

// Obter o nome do funcionário (suponho que você tenha um campo para o nome)
$nomeFuncionario = mysqli_real_escape_string($link, $_REQUEST['nome']);

// Obter os novos valores para os campos (suponho que você tenha campos para cargo, descrição do cargo, setor e salário)
$novoCargo = mysqli_real_escape_string($link, $_REQUEST['cargo']);
$novaDescCargo = mysqli_real_escape_string($link, $_REQUEST['descCargo']);
$novoSetor = mysqli_real_escape_string($link, $_REQUEST['setor']);
$novoSalario = mysqli_real_escape_string($link, $_REQUEST['salario']);

// Realizar o UPDATE
$sql = "UPDATE FUNCIONARIO
        SET CARGO = '$novoCargo',
            DESCRICAOCARGO = '$novaDescCargo',
            SETOR = '$novoSetor',
            SALARIO = '$novoSalario'
        WHERE NOME = '$nomeFuncionario'";

if (mysqli_query($link, $sql)) {
    echo "Atualização realizada com sucesso!";
} else {
    echo "Erro ao atualizar o registro: " . mysqli_error($link);
}

// Fechar a conexão
mysqli_close($link);
?>
