		<div class="conteudo">
			<section class="caixa">
				<div class="thead"><i class="ico cad"></i>Formulario de cadastro</div>
				<div class="base-form">
					<div class="caixa-form">
						<div class="thead">Inserir novo cadastro</div>
						<form action="<?php echo URL_BASE . "contato/salvar"?>" method="POST">
							<div class="rows">
								<label>Nome</label>
								<input name="nome" value="" type="text" placeholder="Insira um nome">
							</div>
							<div class="rows">					
								<div class="cel4">					
									<label>Endereço</label>
									<input name="endereco" value="" type="text" placeholder="Insira seu endereço">
								</div>			
								<div class="cel4">
									<label>Cidade</label>
									<input name="cidade" value="" type="text" placeholder="Insira sua cidade">	
								</div>		
								<div class="cel4">
									<label>Bairro</label>
									<input name="bairro" value="" type="text" placeholder="Insira seu bairro">
								</div>
							</div>
							<div class="rows">
								<div class="cel3">
									<label>UF</label>
									<select name="uf">
										<option value="MA">Maranhão</option>
										<option value="CE">Ceará</option>
									</select>						
								</div>
								<div class="cel3">
									<label>Cep</label>
									<input name="cep" value="" type="text" placeholder="Insira seu CEP">
								</div>
								<div class="cel3">
									<label>DDD</label>
									<input name="ddd" value="" type="text" placeholder="Insira o DDD">
								</div>						
								<div class="cel3">
									<label>Fone</label>
									<input name="fone" value="" type="text" placeholder="Insira seu telefone">
								</div>
							</div>
							<div class="rows">
								<div class="cel4">
									<label>sexo</label>
									<select name="sexo">
										<option value="M">Masculino</option>
										<option value="F">Feminino</option>
									</select>
								</div>
								<div class="cel4">		
									<label>data cadastro</label>
									<input name="data_cadastro" value="" type="date" placeholder="Insira a data">
								</div>
								<div class="cel4">
									<label>nascimento</label>
									<input name="nascimento" value="" type="date" placeholder="Insira a data">
								</div>
							</div>
							<div class="rows">
								<label>Email</label>
								<input name="email" value="" type="text" placeholder="Insira um email">
							</div>
							<div class="rows">
								<label>Site</label>
								<input name="site" value="" type="text" placeholder="Insira seu Site">
							</div>
							<div class="rows">
								<label>Observação</label>
								<textarea rows="10" name="observacao"></textarea>
							</div>
							
							<input type="submit" value="Cadastrar" class="btn">
						</form>
					</div>
				</div>
			</section>
		</div>

	</body>
</html>