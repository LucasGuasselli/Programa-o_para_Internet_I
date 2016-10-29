<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Professores</title>
	</head>
	<body>
		<form method="post" action="../dao/professorDao" class="form-inline">
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
		  <button type="submit" class="btn btn-default">Submit</button>	
		</form>
	</body>
</html>