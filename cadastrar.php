<?php
session_start();
$strcon = mysqli_connect('localhost','root','','cpd_pmpa') or die('Erro ao conectar ao banco de dados');
$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$telefone = $_POST['telefone'];
$secretaria = $_POST['secretaria'];
$patrimonio = $_POST['patrimonio'];
$descricao = $_POST['descricao'];
$tipo_chamado = $_POST['tipo_chamado'];
$sql = "INSERT INTO cadastro VALUES ";
$sql .= "('$nome', '$matricula', '$telefone', '$secretaria', '$patrimonio', '$descricao', '$tipo_chamado')"; 
mysqli_query($strcon,$sql) or die("Erro ao tentar Abrir Chamado!");
mysqli_close($strcon);
echo "Chamado Aberto com sucesso!";
?>