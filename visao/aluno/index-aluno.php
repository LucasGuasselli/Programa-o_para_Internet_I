<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Alunos</title>
		<link rel="stylesheet" type="text/css" href="../../estilo/default.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
		<div class="formu">
			<form method="post" action="../../control/Alunos-controle.class.php?op=1" class="form-inline">
			  <div class="form-group">
			    <label for="exampleInputName2">Nome</label>
			    <input type="text" class="form-control" name="nome" placeholder="Jane Doe">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputName2">E-mail</label>
			    <input type="email" class="form-control" name="email" placeholder="Exemplo@hotmail.com">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputName2">Curso</label>
			    <select name="curso">
					<option value="Multimidia">Multimidia</option>
					<option value="Analise e desenvolvimento de sistemas">Analise e desenvolvimento de sistemas</option>
					<option value="Sistemas para internet">Sistemas para internet</option>
					<option value="Redes">Redes</option>
					<option value="Publicidade">Publicidade</option>
					<option value="Jornalismo">Jornalismo</option>
				</select>
			  </div>
			  <button type="submit" class="btn btn-default">Enviar</button>	
			</form>
		</div>
		<?php
			if (isset($_SESSION['aluno'])) {
         ?>
          <table>
            <thead>
                <tr>
                	<th colspan="2">Opções</th>
                    <th>Matricula</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Curso</th>
                </tr>
            </thead>
            <tfoot>
            	<th colspan="2">Opções</th>
                <th>Matricula</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Curso</th>
            </tfoot>                    
            <?php
        }//fecha if
        include '../../model/Alunos.class.php';
        if (isset($_SESSION['aluno'])) {
            $array = unserialize($_SESSION['aluno']);
            echo '<tbody>';
            foreach ($array as $a) {
                //echo '<br>' . $a;
                $id = $a->matricula;
                echo '<tr>';
                echo '<td><a href="alterar-aluno.php"><img src="http://icons.veryicon.com/png/System/Onebit%201-3/pencil.png" alt="Smiley face" height="20" width="20"></td>';
                echo '<td><form name="excluir" id="excluir" method="post" action="../../control/Alunos-controle.class.php?op=3">
                	<input type="text" name="id" value="'.$id.'" class="hidden">
                	<button  type="submit" name="btnexcluir" id="btnexcluir"><img src="http://upload.wikimedia.org/wikipedia/commons/d/da/Crystal_button_cancel.png" alt="Smiley face" height="20" width="20"></button>
					</form></td>';
                echo '<td>' . $a->matricula . '</td>';
                echo '<td>' . $a->nome . '</td>';
                echo '<td>' . $a->email . '</td>';
                echo '<td>' . $a->curso . '</td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
            unset($_SESSION['aluno']);
        }//fecha if
        ?>	
	</body>
</html>