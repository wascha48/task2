<?php

include_once ROOT.'/models/Tasks.php';

class TasksController
{
	// Главная страница
	
	public function actionIndex()
	{ 

		
		require_once(ROOT . '/views/tasks/index.php');
		
		return true;
	}
	
	// Запрос 1
	
	public function actionTask1()
	{ 
				

		$task1List = array();
		$task1List = Tasks::getTask1();
		
		require_once(ROOT . '/views/tasks/task1.php');
		
		return true;
	}

	// Запрос 2
	
	public function actionTask2()
	{ 
				

		$task2List = array();
		$task2List = Tasks::getTask2();
			
		require_once(ROOT . '/views/tasks/task2.php');
		
		return true;
	}
	

}