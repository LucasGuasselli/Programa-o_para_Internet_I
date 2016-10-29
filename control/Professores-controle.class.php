
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
		
			$pDAO = new ProfessorDAO();
					$pDAO->cadastrarProfessor($p);
					
					$_SESSION['professor'] = serialize($p);
					
					header("../visao/professor/index-professor.php");
			break;

		case  '2':
				$pDAO = new ProfessorDAO();
					$pDAO->alterarProfessor($p);
					
								
					header("../visao/professor/index-professor.php");
			break;
			
		case '3':
				$pDAO = new ProfessorDAO();
					
				$id = $_SESSION['codigo'];
            
				$uDAO->deletarProfessor($id);
				unset($_SESSION['nome']);
				unset($_SESSION['data_admissao']);
				unset($_SESSION['disciplina']);
					
					header("../visao/professor/index-professor.php");
			break;		
		case '4':
				$pDAO = new ProfessorDAO();
									
				$array = $pDAO->buscarProfessor();
            if ($array != null) {
                $_SESSION['professor'] = serialize($array);
                header("../visao/aluno/index-professor.php");
            }else{
                $_SESSION['professor'] = 'Não existe dados';
                header("../visao/aluno/index-professor.php");
            }//fecha else
					header("../visao/aluno/index-professor.php");
			break;
			
			default: echo 'erro no switch';
			break;				
	}//fecha switch
?>
