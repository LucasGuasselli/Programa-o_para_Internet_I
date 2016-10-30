
<?php
	session_start();

	require '../model/Professores.class.php';
	require '../dao/professorDao.php';
	
	switch($_GET['op']){
		case '1':
			$p = new Professor();
			
			$p->nome = $_POST['nome']; 
			$p->data_admissao = $_POST['dataAd']; 	
			$p->disciplina = $_POST['disciplina']; 
		
			$pDAO = new ProfessorDAO();
					$pDAO->cadastrarProfessor($p);
					
					header("location:../control/Professores-controle.class.php?op=4");
			break;

		case  '2':
			$pDAO = new ProfessorDAO();

				$p->nome = $_POST['nome']; 
				$p->data_admissao = $_POST['dataAd']; 	
				$p->disciplina = $_POST['disciplina'];
				$p->codigo = $_POST['codigo'];

				$pDAO->alterarProfessor($p);
					
								
					header("location:../control/Professores-controle.class.php?op=4");
			break;
			
		case '3':
				$pDAO = new ProfessorDAO();
					
				$id = $_POST['id'];
            
				$pDAO->deletarProfessor($id);
				unset($_SESSION['nome']);
				unset($_SESSION['data_admissao']);
				unset($_SESSION['disciplina']);
					
					header("location:../control/Professores-controle.class.php?op=4");
			break;		
		case '4':
				$pDAO = new ProfessorDAO();
									
				$array = $pDAO->buscar();

            if ($array != null) {
                $_SESSION['professor'] = serialize($array);
                header("location:../visao/professor/index-prof.php");
            }else{
                $_SESSION['professor'] = 'Não existe dados';
                header("location:../visao/professor/index-prof.php");
            }//fecha else
					
			break;

		case '5':

				$id = $_POST['id'];
				$pDAO = new professorDao();
									
				$array = $pDAO->buscarParaAlterar($id);
	            if ($array != null) {
	                $_SESSION['professor'] = serialize($array);
	                header("location:../visao/professor/alterar-prof.php");
	            }else{
	                $_SESSION['professor'] = 'Não existe dados';
	                header("../visao/professor/index-prof.php");
	            }//fecha else
					
				break;
			
			default: echo 'erro no switch';
			break;				
	}//fecha switch
?>
