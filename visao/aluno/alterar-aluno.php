<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Menu</title>
		<link rel="stylesheet" type="text/css" href="../../estilo/default.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
		<div class="mid aumentar">
			<form method="post" action="../../control/Alunos-controle.class.php?op=2" class="formu">
			 <div class="form-group">
			    <label for="exampleInputEmail1">Nome</label>
			    <input type="text" class="form-control" name="nome" <?php 
			    include '../../model/Alunos.class.php';
			    $array = unserialize($_SESSION['aluno']);
			    foreach ($array as $a)
			    
			    	echo 'value='.$a->nome;
			    ?> >
			  </div>
			  <div class="form-group">
		      <label for="disabledTextInput">Matricula</label>
		      <input type="text" name="matricula" id="disabledTextInput" class="form-control desabilitado"
		      	<?php 
		      		echo 'value='.$a->matricula;
		      	?>
		      >
		    </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email</label>
			    <input type="email" class="form-control" name="email" 
			    	<?php 
			    		echo 'value='.$a->email;
			    	?>
			    >
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Curso</label>
			    <select name="curso">
					<option value="Multimidia">Multimidia</option>
					<option value="Analise e desenvolvimento de sistemas">Analise e desenvolvimento de sistemas</option>
					<option value="Sistemas para internet">Sistemas para internet</option>
					<option value="Redes">Redes</option>
					<option value="Publicidade">Publicidade</option>
					<option value="Jornalismo">Jornalismo</option>
				</select>
				<label><?php echo 'Curso atual: '.$a->curso; ?></label>
			  </div>
			  <?php unset($_SESSION['aluno']); ?> 
			  <button type="submit" class="btn btn-default">Enviar</button>
			  <a href="../../control/Alunos-controle.class.php?op=4" class="btn btn-default">Cancelar</a>
			</form>
			
		</div>
	</body>
</html>