<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Professores</title>
		<link rel="stylesheet" type="text/css" href="../../estilo/default.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
		<div class="formu">
			<form method="post" action="../../control/Professores-controle.class.php?op=1" class="form-inline">
			  <div class="form-group">
			    <label for="exampleInputName2">Nome</label>
			    <input type="text" class="form-control" name="nome" placeholder="Jane Doe">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputName2">Data de admissão</label>
			    <input type="date" class="form-control" name="dataAd">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputName2">Disciplina</label>
			    <select name="disciplina">
					<option value="1">Multimidia</option>
					<option value="2">Analise e desenvolvimento de sistemas</option>
					<option value="3">Sistemas para internet</option>
					<option value="4">Redes</option>
					<option value="5">Publicidade</option>
					<option value="6">Jornalismo</option>
				</select>
			  </div>
			  <button type="submit" class="btn btn-default">Enviar</button>	
			</form>
		</div>
		<?php
			if (isset($_SESSION['professor'])) {
         ?>
          <table>
            <thead>
                <tr>
                	<th colspan="2">Opções</th>
                    <th>Codigo</th>
                    <th>Nome</th>
                    <th>Data de Admissao</th>
                    <th>Disciplina</th>
                </tr>
            </thead>
            <tfoot>
            	<th colspan="2">Opções</th>
                <th>Codigo</th>
                    <th>Nome</th>
                    <th>Data Admissao</th>
                    <th>Disciplina</th>
            </tfoot>                    
            <?php
        }//fecha if
        include '../../model/Professores.class.php';
        if (isset($_SESSION['professor'])) {
            $array = unserialize($_SESSION['professor']);
            echo '<tbody>';
            foreach ($array as $p) {
                //echo '<br>' . $p;
                $id = $p->codigo;
                echo '<tr>';
                echo '<td><form name="excluir" id="excluir" method="post" action="../../control/Professores-controle.class.php?op=5">
                    <input type="text" name="id" value="'.$id.'" class="hidden">
                    <button  type="submit" name="btnexcluir" id="btnexcluir"><img src="http://icons.veryicon.com/png/System/Onebit%201-3/pencil.png" alt="Smiley face" height="20" width="20"</button>
                    </form></td>';
                echo '<td><form name="excluir" id="excluir" method="post" action="../../control/Professores-controle.class.php?op=3">
                	<input type="text" name="id" value="'.$id.'" class="hidden">
                	<button  type="submit" name="btnexcluir" id="btnexcluir"><img src="http://upload.wikimedia.org/wikipedia/commons/d/da/Crystal_button_cancel.png" alt="Smiley face" height="20" width="20"></button>
					</form></td>';
                echo '<td>' . $p->codigo. '</td>';
                echo '<td>' . $p->nome. '</td>';
                echo '<td>' . $p->data_admissao. '</td>';
                echo '<td>' . $p->disciplina. '</td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
            unset($_SESSION['professor']);
        }//fecha if
        ?>	
		<a href="../../index.php" class="btn btn-default" >Voltar</a>
	</body>
</html>