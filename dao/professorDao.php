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
				
				$stat = $this->conexao->prepare("insert into professor(codigo, nome, data_admissao, disciplina) values(null, ?, ?, ?)");

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

				$stat = $this->conexao->query("select nome, data_admissao, disciplina from professor");
				$array = $stat->fetchAll(PDO::FETCH_CLASS, 'Aluno');

			} catch (Exception $e) {
				echo 'Erro ao buscar dados: '.$e;
			}
		}//close method for search dates

		public function alterarProfessor($p){

			try {

				$stat = $this->conexao->prepare("");
				
			} catch (Exception $e) {
				echo 'Erro ao alterar Professor. Erro: '.$e;
			}

		}//close method for alter teacher

		public function deletarProfessor($cod){

			try {

				$stat = $this->conexao->prepare("delete from professor where codigo=?");

				$stat->bindValue(1, $cod);

				$stat->execute();
				
			} catch (Exception $e) {
				echo 'Erro ao deletar Professor. Erro: '.$e;
			}

		}//close method for delete teacher

	}//close class