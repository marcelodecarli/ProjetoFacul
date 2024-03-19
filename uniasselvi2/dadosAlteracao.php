<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1", charset='utf-8'>
<title>Página Inicial</title>
<style>
        body {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh; /* Isso garante que o conteúdo ocupe toda a altura da janela */

        }

        input{
            border-radius: 5px 10px;
        }

        td{
            border: 1px solid black;
            background: grey;
            border-radius: 5px 10px;
            color: black
        }


        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: 3;
            cursor: pointer;
            border-radius: 10px 20px;
            margin-left: 100px;
        }

        #results {
            margin-top: 20px;
        }

    </style>
</head>
<body>
<form action="alter.php" method="post">
<table>
<tr>
<td colspan="2">Cadastro de Funcionário</td>
</tr>

<tr>
<td>Nome:</td>
<td><input type="text" name="nome"></td>
</tr>
<tr>
<td>Cargo:</td>
<td><input type="text" name="cargo"></td>
</tr>
<tr>
<td>Descrição<BR>
    cargo:</td>
<td><textarea name="descCargo" cols="15"
rows="15"></textarea></td>
</tr>
<tr>
<td>Setor:</td>
<td><input type="text" name="setor"></td>
</tr>
<tr>
<td>Salario:</td>
<td><input type="text" name="salario"></td>
</tr>
</table>
<br><br>
<button type="submit" name="Gravar">Salvar</button>
</form>
</body>
</html>