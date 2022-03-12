 <?php
	require_once 'tarefa.model.php';
	require_once 'tarefa.service.php';
	require_once 'conexao.php';
	
	
	$acao = isset($_GET['acao']) ? $_GET['acao']:$acao;
	
	if($acao=='inserir'){
		$tarefa = new Tarefa();
		$tarefa->__set('tarefa',$_POST['tarefa']);
		
		
		$conexao = new Conexao();
		
		$tarefaService = new TarefaService($conexao, $tarefa);
		$tarefaService->inserir();
		
		header ('location: todas_tarefas.php');
		
	}elseif($acao == 'recuperar'){
		$tarefa = new Tarefa();
		$conexao = new Conexao();

		$tarefaService = new TarefaService($conexao,$tarefa);
		$tarefa = $tarefaService->recuperar();
	}
	elseif($acao == 'atualizar'){
	  $tarefa = new Tarefa();
	  $conexao = new Conexao();
		
	  $tarefa->__set('id',$_POST['id']);
	  $tarefa->__set('tarefa',$_POST['tarefa']);
		
	  $tarefaService = new TarefaService($conexao, $tarefa);
	  if($tarefaService->atualizar()){
			header('Location: todas_tarefas.php');
	  }
	}
	elseif($acao == 'remover'){
		$tarefa = new Tarefa();
		$conexao = new Conexao();
		
		$tarefa->__set('id',$_GET['id']);
		
		$tarefaService = new TarefaService($conexao, $tarefa);
		$tarefaService->remover();
		header('Location: todas_tarefas.php');
	}
	elseif($acao == 'marcarRealizada'){
		$tarefa = new Tarefa();
		$tarefa->__set('id',$_GET['id']);
		$tarefa->__set('id_status',2);
		
		$conexao = new Conexao();
		
		$tarefaService = new TarefaService($conexao, $tarefa);
		$tarefaService->marcarRealizada();
		
		header('location: todas_tarefas.php');
	
	}elseif($acao == 'recuperarTarefasPendentes'){
		$tarefa = new Tarefa();
		$conexao = new Conexao();

		$tarefaService = new TarefaService($conexao,$tarefa);
		$tarefa = $tarefaService->recuperarTarefasPendentes();
	}
	
	
	
 ?>