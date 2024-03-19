<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa de Funcionários</title>
    <style>


        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        input[type="text"] {
            padding: 10px;
            font-size: 16px;
            border-radius: 10px 20px;

        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 10px 20px;

        }
        #results {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Pesquisa de Funcionários</h1>
    <input type="text" id="searchInput" placeholder="Digite o nome do funcionário">
    <button onclick="searchEmployees()">Pesquisar</button>
    <div id="results"></div>

    <script>
        function searchEmployees() {
            const searchTerm = document.getElementById("searchInput").value;

            // Fazer uma requisição AJAX para a API de pesquisa (substitua pela sua URL)
            // Aqui, estou usando um exemplo fictício
            fetch(`get.php?nome=${searchTerm}`)
                .then(response => response.json())
                .then(data => displayResults(data))
                .catch(error => console.error("Erro na pesquisa:", error));
        }

        function displayResults(results) {
            const resultsDiv = document.getElementById("results");
            resultsDiv.innerHTML = ""; // Limpa os resultados anteriores

            if (results.length === 0) {
                resultsDiv.innerHTML = "Nenhum funcionário encontrado.";
                return;
            }

            const ul = document.createElement("ul");
            results.forEach(employee => {
                const li = document.createElement("li");
                li.textContent = `\n\n
                - Nome: ${employee.NOME} \n\n
                - Cargo: ${employee.CARGO} \n\n
                - Setor: ${employee.SETOR} \n\n
                - Descrição do cargo: ${employee.DESCRICAOCARGO}\n\n`;
                ul.appendChild(li);
            });

            resultsDiv.appendChild(ul);
        }
    </script>

<table>
    <tr>
        <td>
            <button onclick="window.location.href='index.php'">INÍCIO</button>
        </td>
    </tr>
</table>

</body>
</html>
