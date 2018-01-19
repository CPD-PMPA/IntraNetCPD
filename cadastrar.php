<?php
    require 'config.php';
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula']
    $telefone = $_POST['telefone'];
    $secretaria = $_POST['secretaria'];
    $patrimonio = $_POST['patrimonio'];
    $descricao = $_POST['descricao']
    $tipo_chamado = $_POST['tipo_chamado'];

    $sql = 'INSERT INTO cadastro (nome, matricula, telefone, secretaria, patrimonio, descricao, tipo_chamado) VALUES (:nome, :matricula, :telefone, :secretaria, :patrimonio, :descricao, :tipo_chamado)';                                      
    $e = $pdo->prepare($sql);
    $e->bindParam(':nome', $nome);       
    $e->bindParam(':matricula', $matricula); 
    $e->bindParam(':telefone', $telefone);
    $e->bindParam(':secretaria', $secretaria); 
    $e->bindParam(':patrimonio', $patrimonio);
    $e->bindParam(':descricao', $descricao);
    $e->bindParam(':tipo_chamado', $tipo_chamado);
    $e->execute();

    echo 'Sucesso';
