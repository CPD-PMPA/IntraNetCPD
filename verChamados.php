<?php include 'header.inc.php'; ?>

<?php 
// Contador de chamados abertos e fechados
$count=0;
$countclosed=0;
require 'config.php';
$consulta = $pdo->query("SELECT id, nome, matricula, telefone, secretaria, descricao, tipo_chamado, endereco,status, data FROM abertura_chamado WHERE status = 'open'");
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    $count++;
}
$consulta = $pdo->query("SELECT id, nome, matricula, telefone, secretaria, descricao, tipo_chamado, endereco,status, data FROM abertura_chamado WHERE status = 'closed'");
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    $countclosed++;
}

//Confere o SLA do CHAMADO
date_default_timezone_set('America/Sao_Paulo');
$date = date('Y-m-d H:i');
$convert_date = strtotime($date);
?>

<h1><?php echo "{$count}"?> Chamados Abertos - Departamento de TI</h1>
<br><br>
<table id="customers">
<center>
<tr>
  <th style="width: 10px">#</th>
  <th>SOLICITANTE</th>
  <th style="width: 120px">TELEFONE</th>
  <th>SECRETARIA</th>
  <th>ENDEREÇO</th>
  <th>TIPO DE CHAMADO</th>
  <th>DESCRIÇÃO</th>
  <th style="width: 79px">DATA</th>
  <th style="width: 20px">SLA</th>
</tr>
</center>
<?php
$count=0;
require 'config.php';
$convert_dates = 0;
$consulta = $pdo->query("SELECT id, nome, matricula, telefone, secretaria, descricao, tipo_chamado, endereco, status, data FROM abertura_chamado WHERE status = 'open'");
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
  $convert_dates = strtotime($linha['data']);
  $status = "intermed";
  $sla = strtotime('+2 day', $convert_dates);
  if ($convert_date>=$sla) {
    $status = "open";
  }
  echo "
    <tr>
      <td>{$linha['id']}</td>
      <td>{$linha['nome']} </td> 
      <td>{$linha['telefone']}</td>
      <td>{$linha['secretaria']}</td>
      <td>{$linha['endereco']}</td>
      <td>{$linha['tipo_chamado']}</td>
      <td>{$linha['descricao']}</td>
      <td>{$linha['data']}</td>
      <td><img src='img/$status.png' alt='SLA' class='openClosed'></td>
    </tr>";
}
echo "
</table>
";
?>
<br><br>
<h1><?php echo "{$countclosed}"?> Chamados Fechados - Departamento de TI</h1>

<table id="customers">
<center>
<tr>
  <th style="width: 10px">#</th>
  <th>SOLICITANTE</th> 
  <th style="width: 120px">TELEFONE</th>
  <th>SECRETARIA</th>
  <th>ENDEREÇO</th>
  <th>TIPO DE CHAMADO</th> 
  <th>DESCRIÇÃO</th>
  <th style="width: 79px">DATA</th>
  <th style="width: 20px">SLA</th>
</tr>  
</center>
<br><br>
<?php
require 'config.php';
$consulta = $pdo->query("SELECT id, nome, matricula, telefone, secretaria, descricao, tipo_chamado, endereco,status, data FROM abertura_chamado WHERE status = 'closed'");
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    echo "
    <tr>
      <td>{$linha['id']}</td>
      <td>{$linha['nome']} </td> 
      <td>{$linha['telefone']}</td>
      <td>{$linha['secretaria']}</td>
      <td>{$linha['endereco']}</td>
      <td>{$linha['tipo_chamado']}</td>
      <td>{$linha['descricao']}</td>
      <td>{$linha['data']}</td>
      <td><img src='img/{$linha['status']}.png' alt='CLOSED' class='openClosed'></td>
    </tr>";
}
echo "
</table>
";?>
<br><br>
<?php include 'footer.inc.php'; ?>