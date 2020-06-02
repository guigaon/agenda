<?php

namespace app\models;
use app\core\Model; //conecta com o banco de dados

class Contato extends Model {
	
	public function listarContatos() {
		$sql = "SELECT * FROM contato";
		$qry = $this->db->query($sql); //migra a coneção do Model.php, query executa a funcao do banco de dados
		
		
		return $qry->fetchAll(\PDO::FETCH_OBJ); //como tem mais de um resultado, quarda os resultados array, (Esse PDO retorna uma matriz indexada pelo nome da coluna(só tirar e testar pra ver como fica))
		
		
	}
	
	public function inserir ($valores){ 
		$sql = "INSERT INTO contato SET
				nome 		=:nome,
				email 		=:email,
				cpf 		=:cpf,
				endereco 	=:endereco,
				cidade 		=:cidade,
				bairro 		=:bairro,
				uf 			=:uf,
				cep 		=:cep,
				ddd 		=:ddd,
				fone 		=:fone,
				sexo 		=:sexo,
				nascimento 	=:nascimento
				";
				
		$qry = $this->db->prepare($sql); 	//prepara os dados
		$qry-> bindValue(":nome", $nome); //substitui o parametro cantor por $nome
		$qry-> bindValue(":email", $email);
		$qry-> bindValue(":cpf", $cpf);
		$qry-> bindValue(":endereco", $endereco);
		$qry-> bindValue(":cidade", $cidade);
		$qry-> bindValue(":uf", $uf);
		$qry-> bindValue(":bairro", $bairro);
		$qry-> bindValue(":cep", $cep);
		$qry-> bindValue(":ddd", $ddd);
		$qry-> bindValue(":sexo", $sexo);
		$qry-> bindValue(":nascimento", $nascimento);
		$qry-> bindValue(":fone", $fone);
		$qry->execute();
		
		return $this->db->lastInsertId();
	}
		
		
	
}	
	
	
	
	
	
	
	
	
	
	
