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
		<div class="mid aumentar">
			<form method="post" action="../../control/Professores-controle.class.php?op=2" class="formu">
			 <div class="form-group">
			    <label for="exampleInputEmail1">Nome</label>
			    <input type="text" class="form-control" name="nome"
			    <?php 
			    include '../../model/Professores.class.php';
			    $array = unserialize($_SESSION['professor']);
			    foreach ($array as $a)
			    
			    	echo 'value='.$a->nome;
			    ?> >
			  </div>
			  <div class="form-group">
		      <label for="disabledTextInput">Código</label>
		      <input type="text" name="codigo" id="disabledTextInput" class="form-control desabilitado"
		      	<?php 
		      		echo 'value='.$a->codigo;
		      	?>
		      >
		    </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Data Admissão</label>
			    <input type="date" class="form-control" name="dataAd"
			    <?php 
			    		echo 'value='.$a->data_admissao;
			    	?> >
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Disciplina</label>
			    <select name="disciplina">
					<option value="Multimidia">Multimidia</option>
					<option value="Analise e desenvolvimento de sistemas">Analise e desenvolvimento de sistemas</option>
					<option value="Sistemas para internet">Sistemas para internet</option>
					<option value="Redes">Redes</option>
					<option value="Publicidade">Publicidade</option>
					<option value="Jornalismo">Jornalismo</option>
				</select>
				<label><?php echo 'Curso atual: '.$a->disciplina; ?></label>
			  </div>
			   <?php unset($_SESSION['aluno']); ?>
			  <button type="submit" class="btn btn-default">Enviar</button>
			  <a href="../../control/Alunos-controle.class.php?op=4" class="btn btn-default">Cancelar</a>
			</form>
		</div>
		
	</body>
</html>