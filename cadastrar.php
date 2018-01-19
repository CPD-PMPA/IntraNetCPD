<?php
    require 'config.php';

    $sql = 'INSERT INTO movies(nome, matricula, telefone, secretaria, patrimonio, descricao, tipo_chamado) VALUES (:nome, :matricula, :telefone, :secretaria, :patrimonio, :descricao, :tipo_chamado)';                                      
    $e = $pdo->prepare($sql);
    $e->bindParam(':nome', $_POST['nome']);       
    $e->bindParam(':matricula', $_POST['matricula']); 
    $e->bindParam(':telefone', $_POST['telefone']);
    $e->bindParam(':secretaria', $_POST['secretaria']); 
    $e->bindParam(':patrimonio', $_POST['patrimonio']);
    $e->bindParam(':descricao', $_POST['descricao'];);
    $e->bindParam(':tipo_chamado', $_POST['tipo_chamado'];);
    $e->execute();

    echo 'Sucesso';
