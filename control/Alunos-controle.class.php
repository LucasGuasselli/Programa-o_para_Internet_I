
<?php
	session_start();

	require '../model/Alunos.class.php';
	require '../dao/alunoDao.php';
	
	switch($_POST['op']){
		case '1':
			$a = new a();
			
			$a->nome = $_POST['nome']; 
			$a->email = $_POST['email']; 	
			$a->curso = $_POST['curso']; 
		
			$aDAO = new AlunoDAO();
					$aDAO->cadastrarAluno($a);
					
					$_SESSION['aluno'] = serialize($a);
					
					header("../visao/aluno/index-aluno.php");
			break;

		case  '2':
			$aDAO = new AlunoDAO();
					$aDAO->alterarAluno($a);		
					
					
					header("../visao/aluno/index-aluno.php");
			break;
			
		case '3':
					$aDAO = new AlunoDAO();
					
					$id = $_SESSION['matricula'];
            
				$aDAO->deletarAluno($id);
				unset($_SESSION['nome']);
				unset($_SESSION['email']);
				unset($_SESSION['curso']);
					
					header("../visao/aluno/index-aluno.php");
			break;
		case '4':
				$aDAO = new AlunoDAO();
									
				$array = $aDAO->buscarAluno();
            if ($array != null) {
                $_SESSION['aluno'] = serialize($array);
                header("../visao/aluno/index-aluno.php");
            }else{
                $_SESSION['aluno'] = 'Não existe dados';
                header("../visao/aluno/index-aluno.php");
            }//fecha else
					
					
					header("../visao/aluno/index-aluno.php");
				break;
		default: echo 'erro no switch';
		break;					
	}//fecha switch
?>

