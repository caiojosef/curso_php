<?php
require_once 'db_connect.php';

$sql = "SELECT * FROM usuarios";
$resultado = sqlsrv_query($conn, $sql);

if ($resultado === false) {
    die("Erro ao executar a consulta: <br>" . print_r(sqlsrv_errors(), true));
}

echo "<h2>Lista de Usuários</h2>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>ID</th><th>Nome</th><th>Login</th><th>Senha (Hash)</th></tr>";

while ($row = sqlsrv_fetch_array($resultado, SQLSRV_FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['nome'] . "</td>";
    echo "<td>" . $row['login'] . "</td>";
    echo "<td>" . $row['senha'] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
