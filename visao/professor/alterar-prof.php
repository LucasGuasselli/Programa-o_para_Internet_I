<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Professores</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
		<form method="post" action="../dao/alunoDao">
		 <div class="form-group">
		    <label for="exampleInputEmail1">Nome</label>
		    <input type="text" class="form-control" name="nome" placeholder="Aqui vem o nome">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Data Admissão</label>
		    <input type="date" class="form-control" name="dataAd">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Disciplina</label>
		    <select name="disciplina">
				<option value="1">Multimidia</option>
				<option value="2">Analise e desenvolvimento de sistemas</option>
				<option value="3">Sistemas para internet</option>
				<option value="4">Redes</option>
				<option value="5">Publicidade</option>
				<option value="6">Jornalismo</option>
			</select>
		  </div>
		  <button type="submit" class="btn btn-default">Submit</button>
		</form>
	</body>
</html>