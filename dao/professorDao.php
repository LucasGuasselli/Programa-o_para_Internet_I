<?php
	require '../persistencia/conexaoBanco.php';

	class professorDao{
		private $conexao = null;

		public function __construct(){
			$this->conexao = conexaoBanco::getInstancia();
		}

		public function __destruct(){
			$this->conexao = null;
		}

		public function cadastrarProfessor($p){
			try {
				
				$stat = $this->conexao->prepare("insert into professores(codigo, nome, data_admissao, disciplina) values(null, ?, ?, ?)");

				$stat->bindValue(1, $p->nome);
				$stat->bindValue(2, $p->data_admissao);
				$stat->bindValue(3, $p->disciplina);

				$stat->execute();

			} catch (Exception $e) {
				echo 'Erro ao cadastrar Professor. Erro: '.$e;
			}
		}//close method for new teacher

		public function buscar(){
			try {

				$stat = $this->conexao->query("select codigo, nome, data_admissao, disciplina from professores");
				$array = $stat->fetchAll(PDO::FETCH_CLASS, 'Professor');

				return $array;

			} catch (Exception $e) {
				echo 'Erro ao buscar dados: '.$e;
			}
		}//close method for search dates

		public function buscarParaAlterar($a){
			try {

				$stat = $this->conexao->query('select codigo, nome, data_admissao, disciplina from professores where codigo = '.$a.'');

				$array = $stat->fetchAll(PDO::FETCH_CLASS, 'Professor');

				return $array;

			} catch (Exception $e) {
				echo 'Erro ao buscar dados: '.$e;
			}
		}//close method for search dates

		public function alterarProfessor($p){

			try {

				$stat = $this->conexao->prepare("update Professores set nome = ?, data_admissao = ?, disciplina = ? where 
					codigo = ?");

				$stat->bindValue(1, $p->nome);
				$stat->bindValue(2, $p->data_admissao);
				$stat->bindValue(3, $p->disciplina);
				$stat->bindValue(4, $p->codigo);

				$stat->execute();
				
			} catch (Exception $e) {
				echo 'Erro ao alterar Professor. Erro: '.$e;
			}

		}//close method for alter teacher

		public function deletarProfessor($cod){

			try {

				$stat = $this->conexao->prepare("delete from professores where codigo=?");

				$stat->bindValue(1, $cod);

				$stat->execute();
				
			} catch (Exception $e) {
				echo 'Erro ao deletar Professor. Erro: '.$e;
			}

		}//close method for delete teacher

	}//close class