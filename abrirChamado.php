<?php include 'header.inc.php'; ?>

<h1>Abertura de Chamados - Departamento de TI</h1>
<br>
<div class = "fontup">Obs.: A abertura de falsos chamados serão tomados medidas administrativas em cima das mesmas! </div>
<br><br>

<form action="cadastrar.php" method="POST">
Tipo De Chamado
<select class="campo" name="tipo_chamado" required>
<option value="Internet">Internet</option>
<option value="Computador">Computador</option>
<option value="Impressora">Impressora</option>
<option value="Telefone">Telefone</option>
</select>
<select name="tipo_especifico" hidden>
<option value="internet_um_pc">Sem Conectividade 1 Computador</option>
<option value="internet_rede_toda">Sem Conectividade Rede Toda</option>
</select>
<select name="tipo_especifico" hidden>
<option value="computador_cpu">CPU</option>
<option value="computador_monitor">Monitor</option>
<option value="computador_kit">Teclado/Mouse</option>
<option value="computador_software">Software</option>
</select>
<select name="tipo_especifico" hidden>
<option value="impressora_locada">Locada</option>
<option value="impressora_patrimonio">Patrimonio</option>
</select>
<select name="tipo_especifico" hidden>
<option value="telefone_ip">Telefone IP</option>
<option value="telefone_comun">Telefone Comun</option>
</select>
<br/>
  
<input type="text" class="campo350" name="nome" placeholder="Nome"  required />
<input type="number" class="campo150" name="matricula" placeholder="Matricula" maxlength="6" required /><br/>
<input type="text" class="campo150 cel" name="telefone" placeholder="Tel p/ Contato" maxlength="15" required />
<input type="text" class="campo350" name="secretaria" placeholder="Secretaria"  required /><br/>
<input type="text" class="campo500" name="endereco" placeholder="Endereço de Atendimento" maxlength="200" required /><br/>
<input type="text" class="campo500" name="descricao" placeholder="Descrição do Problema" maxlength="200" required /><br/>
<input type="submit" class="button" value="Abrir Chamado" /> 

</form>


<script type="text/javascript" src="script/script.js"></script>   
<?php include 'footer.inc.php'; ?>