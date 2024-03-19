<?php
// Conexão com o banco de dados (substitua pelas suas credenciais)
$host = "localhost";
$user = "root";
$password = "161019";
$database = "uniasselvi2";

// Conectando ao banco de dados
$link = mysqli_connect($host, $user, $password, $database);

// Verifica se a conexão foi bem-sucedida
if ($link === false) {
    die("Erro: Não foi possível conectar ao banco de dados. " . mysqli_connect_error());
}

// Obtém o nome pesquisado (você pode passar esse valor via parâmetro GET ou POST)
$nome_pesquisado = mysqli_real_escape_string($link, $_REQUEST['nome']);

// Consulta SQL para pesquisar funcionários pelo nome
$sql = "SELECT * FROM FUNCIONARIO WHERE NOME LIKE '%$nome_pesquisado%'";

// Executa a consulta
if ($result = mysqli_query($link, $sql)) {
    // Array para armazenar os resultados
    $funcionarios = array();

    // Transforma os resultados em um array associativo
    while ($row = mysqli_fetch_assoc($result)) {
        $funcionarios[] = $row;
    }

    // Retorna os resultados em formato JSON
    echo json_encode($funcionarios);
} else {
    echo "Erro ao executar a consulta: " . mysqli_error($link);
}

// Fecha a conexão com o banco de dados
mysqli_close($link);
?>
