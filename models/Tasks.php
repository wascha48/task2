<?php

class Tasks
{



	public static function getTask1()
		
	{
		// Подключаемся к базе	
		$db = Db::getConnection();
		
		// Запрос к базе данных:
		// Номер заказа, имя товара, цена, количество, имя оператора за которым числится заказ ,ГДЕ количество товара >2 И id оператора 10 ИЛИ 12
		// Если под "имя оператора" имелось ввиду ФИО то нужно поменять в запросе:
		// operators.name AS operator_name, 
		// или полностью с должностью:  
		// CONCAT(operators.name,' ',operators.fio) AS operator_name,
		
		$result = $db->query("SELECT 
								requests.id AS request_id, 
								offers.name AS tovar_name, 
								requests.price, 
								requests.count,								
								SUBSTRING_INDEX(SUBSTRING_INDEX(operators.fio, ' ', 2), ' ', -1) AS operator_name
							FROM requests 
								LEFT JOIN operators ON requests.operator_id = operators.id 
								LEFT JOIN offers ON requests.offer_id = offers.id 
							WHERE 
								requests.count > 2 
								AND (
										operators.id = 10 
										OR 
										operators.id = 12											
									)
							ORDER BY request_id;"
							);
		$result->setFetchMode(PDO::FETCH_ASSOC);

		$i = 0;		
		while ($task1List[$i]=$result->fetch()) $i++;		
		unset($task1List[$i]);
		
		return $task1List;
	}
	
	
	public static function getTask2()
		
	{
		
		// Подключаемся к базе	
		
		$db = Db::getConnection();
		
		// Запрос к базе данных:
		//Имя товара, количество товара, и сумма (price) по каждому товару (сгруппировать)
		
		$result = $db->query("SELECT 
								offers.name AS tovar_name, 
                                IFNULL( SUM( requests.count ), 0) AS count_sum, 
								IFNULL( SUM( requests.price*requests.count  ), 0) AS price_sum
							FROM offers 
								LEFT JOIN requests ON requests.offer_id = offers.id 
							WHERE 1
                            GROUP BY offers.id
							ORDER BY offers.name;"
							);
		$result->setFetchMode(PDO::FETCH_ASSOC);

		$i = 0;		
		while ($task2List[$i]=$result->fetch()) $i++;
		unset($task2List[$i]);
		
		return $task2List;
	}
	
	


}