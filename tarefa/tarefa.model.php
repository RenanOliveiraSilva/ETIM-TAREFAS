<?php
	class Tarefa{
		private $id;
		private $id_status;
		private $tarefa;
		private $data_cadastro;
		
		public function __set($atributo,$valor){
			$this->$atributo = $valor;
			return $this;
		}
		public function __get($atributo){
			return $this->$atributo;
		}
	}
/*$tarefa = new Tarefa();
$tarefa->__set('tarefa','Buscar o carro')
       ->__set('id',2);
echo $tarefa->__get('tarefa');
echo $tarefa->__get('id');*/



?>