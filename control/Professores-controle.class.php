
<?php
	session_start();

	require '../model/Professores.class.php';
	require '../dao/professoreDao.php';
	
	switch($_POST['op']){
		case '1':
			$p = new p();

			$p->nome = $_POST['nome']; 
			$p->data_admissao = $_POST['dataAd']; 	
			$p->disciplina = $_POST['disciplina']; 
	
			$_SESSION['nome'] = $p->nome;
			$_SESSION['data_admissao'] = $p->data_admissao;
			$_SESSION['disciplina'] = $p->disciplina;
		
			$pDAO = new ProfessorDAO();
					$pDAO->cadastrarProfessor($p);
					
					$_SESSION['professor'] = serialize($p);
					
					header("../visao/professor/index-professor.php");
			break;

		case  '2':
				$pDAO = new ProfessorDAO();
					$pDAO->ProfessorAluno($p);
					
					
					
					header("../visao/professor/index-professor.php");
			break;
			
		case '3':
					$pDAO = new ProfessorDAO();
					$pDAO->deletarProfessor($p);
					
				
					
					header("../visao/professor/index-professor.php");
			break;		
		case '4':
					$pDAO = new ProfessorDAO();
					$pDAO->buscarProfessor();
					
					
					header("../visao/aluno/index-professor.php");
			break;
			
			default: echo 'erro no switch';
			break;				
	}//fecha switch
?>
