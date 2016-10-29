<?php
		
	class Professor{

	private $codigo;
	private $nome;
	private $data_admissao;
	private	$disciplina;
	
	public function __construct(){}
	
	public function __destruct(){
		
	}
	
	public function __set($atributo, $valor){
			$this->$atributo = $this->$valor;
	}//fecha set
	
	public function __get($valor){
		return $this->$valor;
	}//fecha get
	
	public function __toString(){
		return '<p>Codigo: '.$this->codigo.
				'<br>Nome: '.$this->nome.
				'<br>Data de Admissao: '.$this->date_admissao.
				'<br>Disciplina: '.$this->disciplina.'</p>';
	}	
	
	
}//fecha classe