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
			<form method="post" action="../dao/alunoDao" class="formu">
			 <div class="form-group">
			    <label for="exampleInputEmail1">Nome</label>
			    <input type="text" class="form-control" name="nome" placeholder="Aqui vem o nome">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email</label>
			    <input type="email" class="form-control" name="email" placeholder="Email">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Curso</label>
			    <select name="curso">
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
	</body>
</html>