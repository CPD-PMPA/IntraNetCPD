<?php include 'header.inc.php'?>

<h1>Abertura de Chamados - Departamento de TI</h1> 
<form action="cadastrar.php">
Tipo De Chamado
<select class="campo" name="tipo_chamado" method="POST" required>
<option class="campo">Selecione o Tipo de Chamado</option>
<option value="Internet">Internet</option>
<option value="Computador">Computador</option>
<option value="Impressora">Impressora</option>
<option value="Telefone">Telefone</option>
</select>

<select name="Internet" hidden>
<option value="internet_um_pc">Sem Conectividade 1 Computador</option>
<option value="internet_rede_toda">Sem Conectividade Rede Toda</option>
</select>

<select name="Computador" hidden>
<option value="computador_cpu">CPU</option>
<option value="computador_monitor">Monitor</option>
<option value="computador_kit">Teclado/Mouse</option>
<option value="computador_software">Software</option>
</select>

<select name="Impressora" hidden>
<option value="impressora_locada">Locada</option>
<option value="impressora_patrimonio">Patrimonio</option>
</select>

<select name="Telefone" hidden>
<option value="telefone_ip">Telefone IP</option>
<option value="telefone_comun">Telefone Comun</option>
</select>
<br>

Nome <input type="text" class="campo" name="nome" placeholder="Nome" autofocus required>
Matricula <input type="text" class="campo" name="matricula" placeholder="Matricula" autofocus required><br>

Telefone <input type="text" class="campo" name="telefone" placeholder="Telefone" autofocus required>
Secretaria <input type="text" class="campo" name="secretaria" placeholder="Secretaria" autofocus required><br>

Patrimônio <input type="text" class="campo" name="patrimonio" placeholder="Patrimonio" autofocus required><br>
Observação <textarea class="campo" data-ls-module="charCounter" maxlength="200" placeholder="Observação"></textarea><br>

<input type="submit" value="Abrir Chamado"> 

</form>
<?php include 'footer.inc.php' ?>