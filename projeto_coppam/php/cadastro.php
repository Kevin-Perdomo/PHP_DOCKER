<?php

//Inserção
// Dados de conexão com o banco de dados
$servername = "db";
$username = "meu_usuario";
$password = "senha_usuario";
$dbname = "meu_banco";

// Criando conexão com o MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Capturar dados do formulário e inserir no banco de dados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    // Inserir dados na tabela
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    if ($conn->query($sql) === TRUE) {
        echo "<h1>Cadastro realizado com sucesso!</h1>";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

//Consulta
// Consulta SQL para buscar todos os usuários
$sql = "SELECT id, nome, email, senha, data_cadastro FROM usuarios";
$result = $conn->query($sql);

// Verificar se há resultados e exibir os usuários
if ($result->num_rows > 0) {
    echo "<h2>Usuários cadastrados:</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Senha (Hash)</th>
                <th>Data de Cadastro</th>
            </tr>";
    
    // Exibir os dados de cada linha
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["nome"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["senha"] . "</td>
                <td>" . $row["data_cadastro"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum usuário encontrado.";
}

// Fechar conexão
$conn->close();