 <?php
		
	class Aluno{

	private $matricula;
	private $nome;
	private	$email;
	private	$curso;
	
	public function __construct(){}
	
	public function __destruct(){
	
	}
	
	public function __set($atributo, $valor){
			$this->$atributo = $valor;
	}//fecha set
	
	public function __get($atributo){
		return $this->$atributo;
	}//fecha get
	
	public function __toString(){
		return '<p>Codigo: '.$this->matricula.
				'<br>Nome: '.$this->nome.'
				<br>Email: '.$this->email.'
				<br>Curso: '.$this->curso.'</p>';
	}	

}//fecha classe