
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
	
			$_SESSION['nome'] = $a->nome;
			$_SESSION['email'] = $a->email;
			$_SESSION['curso'] = $a->curso;
		
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
					$aDAO->deletarAluno($a);
					
					
					header("../visao/aluno/index-aluno.php");
			break;
		case '4':
					$aDAO = new AlunoDAO();
					$aDAO->buscarAluno();
					
					
					header("../visao/aluno/index-aluno.php");
				break;
		default: echo 'erro no switch';
		break;					
	}//fecha switch
?>

