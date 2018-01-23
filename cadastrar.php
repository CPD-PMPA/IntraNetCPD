<?php
    require 'config.php';
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $telefone = $_POST['telefone'];
    $secretaria = $_POST['secretaria'];
    $descricao = $_POST['descricao'];
    $tipo_chamado = $_POST['tipo_chamado'];
    $endereco = $_POST['endereco'];
    // $tipo_especifico = $_POST['tipo_especifico'];

    // Inserir caso nescessario tipo_especifico na SQL.
    $sql = 'INSERT INTO `abertura_chamado` (nome, matricula, telefone, secretaria, descricao, tipo_chamado, endereco) VALUES (:nome, :matricula, :telefone, :secretaria, :descricao, :tipo_chamado, :endereco)';                                      
    $e = $pdo->prepare($sql);
    $e->bindParam(':nome', $nome);       
    $e->bindParam(':matricula', $matricula); 
    $e->bindParam(':telefone', $telefone);
    $e->bindParam(':secretaria', $secretaria); 
    $e->bindParam(':descricao', $descricao);
    $e->bindParam(':tipo_chamado', $tipo_chamado);
    $e->bindParam(':endereco', $endereco);
    
    // $e->bindParam(':tipo_especifico', $tipo_especifico);
    $e->execute();
    
    $consulta = $pdo->query("SELECT id FROM abertura_chamado WHERE nome='$nome'");
    $id = $consulta->fetch(PDO::FETCH_ASSOC)
?>
<?php include 'header.inc.php'?>

<h1>Departamento de TI</h1>
<br><br>
<?php
    echo "
    Chamado de número 2018/00{$id['id']}, foi aberto com sucesso! Aguarde nossa equipe vericar e tomar devidas providências!
    "
?>
<?php include 'footer.inc.php'?>