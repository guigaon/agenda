		<div class="conteudo">
			<section class="caixa">
				<div class="thead"><i class="ico lista"></i> Lista de contatos</div>
				<div class="base-lista">
				<div class="lst">
					<form>
						<div class="rows">
							<div class="cel8">
									<select name="txt_id_empresa">
										<option selected>Selecione o valor...</option>
										<option value="1">Código</option>
										<option value="2">Nome</option>
										<option value="3">Email</option>
										<option value="4">Cidade</option>
										<option value="5">Site</option>
										<option value="6">Fone</option>
									</select>
									<input type="text"  name="" placeholder="Valor da pesquisar..." >
									<input type="submit" class="btn" value="pesquisar">
							</div>
						</div>
					</form>
						
				</div>
				<div class="rows">				
					<div class="cel12">
						<span class="itens"><i class="ico-list"></i> <b>18 </b>clientes cadastrados</span>
					</div>
				</div>
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						<thead> 
						  <tr>
							<th align="left">Nome</th>
							<th align="left">Email</th>
							<th align="center">Telefone</th>
							<th align="center">Ação</th>
						  </tr>
						</thead> 
						<tbody>
						<?php foreach($lista as $listaFinal) {	?>
							<tr>
								<td><?php echo $_POST["nome"]?></td>
								<td><?php echo $_POST["email"]?></td>
								<td align="center">9899924667</td>
								<td align="center">
								
								
									<a href="formulario.html" class="btn alterar">Editar</a>
									<a href="formulario.html" class="btn excluir">Excluir</a>
								</td>
							</tr>
						<?php }?>			
						</tbody>
					</table>
					<div class="paginacao">
						<span><p>Página 1 de 144</p></span>
						<ul>
							<li><a href="#" class="primeiro">Primeira</a></li>
							<li><a href="#" class="anterior">Anterior</a></li>
							<li><a href="#" class="proximo">Próxima</a></li>
							<li><a href="#" class="ultimo">Última</a></li>
						</ul>
					</div>
					
					<p class="nao-encontrado">Nenhum registro encontrado</p>
				</div>
			</section>
		</div>
		
	</body>
</html>