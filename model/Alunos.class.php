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
			$this->$atributo = $this->$valor;
	}//fecha set
	
	public function __get($valor){
		return $this->$valor;
	}//fecha get
	
}//fecha classe