<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Contato;

class ContatoController extends Controller{
    
	public function index(){
		$contato = new Contato;
	 
		$dados["contatos"] = $contatos->listarContatos();
		$dados["view"] = "contato/lista";
		$this->load("tamplate", $dados);
	} 
	
	public function create(){   
	  $dados["view"] = "contato/create";
	  $this->load("tamplate", $dados);
	}
   
	
	public function salvar (){
		$contato = new Contato();
		 //recebe nome de "create.php"
		 
		$valores = (object) array (
		
		"nome" 		=> strip_tags(filter_input(INPUT_POST,"nome")),
		"email"		=> strip_tags(filter_input(INPUT_POST,"email")),
		"cpf"		=> strip_tags(filter_input(INPUT_POST,"cpf")),
		"endereco"	=> strip_tags(filter_input(INPUT_POST,"endereco")),
		"cidade"	=> strip_tags(filter_input(INPUT_POST,"cidade")),
		"bairro"	=> strip_tags(filter_input(INPUT_POST,"bairro")),
		"uf"		=> strip_tags(filter_input(INPUT_POST,"uf")),
		"cep"		=> strip_tags(filter_input(INPUT_POST,"cep")),
		"ddd"		=> strip_tags(filter_input(INPUT_POST,"ddd")),
		"fone"		=> strip_tags(filter_input(INPUT_POST,"fone")),
		"sexo"		=> strip_tags(filter_input(INPUT_POST,"sexo")),
		"nascimento"=> strip_tags(filter_input(INPUT_POST,"nascimento")),
		"site"		=> strip_tags(filter_input(INPUT_POST,"site"))
		
		);
		
		$contato->inserir($valores);
	}

	public function edit(){
		
		
	}
	
	public function excluir(){
		
		
	}
}
