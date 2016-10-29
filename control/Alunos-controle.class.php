
<?php
	session_start();

	require '../model/Alunos.class.php';
	require '../dao/alunoDao.php';
	
	switch($_GET['op']){
		case '1':
			$a = new Aluno();
			
			$a->nome = $_POST['nome']; 
			$a->email = $_POST['email']; 	
			$a->curso = $_POST['curso']; 
		
			$aDAO = new alunoDao();
					$aDAO->cadastrarAluno($a);
					
					header("location:../control/Alunos-controle.class.php?op=4");
			break;

		case  '2':
			$aDAO = new AlunoDAO();
					$aDAO->alterarAluno($a);		
					
					
					header("location:../visao/aluno/index-aluno.php");
			break;
			
		case '3':
				$aDAO = new alunoDao();
					
				$id = $_POST['id'];
            
				$aDAO->deletarAluno($id);
				unset($_SESSION['nome']);
				unset($_SESSION['email']);
				unset($_SESSION['curso']);
					
				header("location:../control/Alunos-controle.class.php?op=4");
			break;
		case '4':
				$aDAO = new alunoDao();
									
				$array = $aDAO->buscar();
            if ($array != null) {
                $_SESSION['aluno'] = serialize($array);
                header("location:../visao/aluno/index-aluno.php");
            }else{
                $_SESSION['aluno'] = 'Não existe dados';
                header("../visao/aluno/index-aluno.php");
            }//fecha else
					
					
					header("location:../visao/aluno/index-aluno.php");
				break;
		default: echo 'erro no switch';
		break;					
	}//fecha switch
?>

