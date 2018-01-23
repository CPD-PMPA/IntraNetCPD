<?php include 'header.inc.php'; ?>

<h1>Chamados Abertos - Departamento de TI</h1>
<br><br>
<table id="customers">
  <center>
<tr>
  <th style="width: 10px">#</th>
  <th>NOME</th> 
  <th>TELEFONE</th>
  <th>SECRETARIA</th>
  <th>ENDEREÇO</th>
  <th>TIPO DE CHAMADO</th> 
  <th>DESCRIÇÃO</th>
  <th style="width: 79px">DATA</th>
  <th style="width: 20px">STATS</th>
</tr>  
</center>
<?php
require 'config.php';
$consulta = $pdo->query("SELECT id, nome, matricula, telefone, secretaria, descricao, tipo_chamado, endereco,status, data FROM abertura_chamado");

while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    echo "
    <tr>
      <td><a href='chamado_{$linha['id']}'>2018/00{$linha['id']}</a></td>
      <td>{$linha['nome']} </td> 
      <td>{$linha['telefone']}</td>
      <td>{$linha['secretaria']}</td>
      <td>{$linha['endereco']}</td>
      <td>{$linha['tipo_chamado']}</td>
      <td>{$linha['descricao']}</td>
      <td>{$linha['data']}</td>
      <td><img src='img/{$linha['status']}.png' alt='open' class='openClosed'></td>
    </tr>";
}
echo "
</table>
";?>

<?php include 'footer.inc.php'; ?>