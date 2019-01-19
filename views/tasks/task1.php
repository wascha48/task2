<!DOCTYPE html>
<html>
    <head>
        <title>Тестовое задание 1</title>
		<script>
			$(document).ready(function(){ 
				$('#table1').DataTable({
				        "paging":   false,
						"filter": 	false,
						"info":     false
				});	
			}); 
   		</script>
	</head>
	
	<body>
		<h4 align="center"> Запрос 1 </h4>
		<div>
			<table id="table1" class="table table-striped table-bordered text-center text-nowrap" >
				<thead>
					<tr>
						<th>Номер заказа</th>
						<th>Наименование товара</th>
						<th>Цена</th>
						<th>Количество</th>
						<th>Имя оператора</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						foreach ($task1List as $task1Item): 
							echo '<tr>';	
							echo '		<td>' , $task1Item['request_id'], '</td>
										<td>' , $task1Item['tovar_name'],'</td>
										<td>' , $task1Item['price'], '</td>
										<td>' , $task1Item['count'], '</td>
										<td>' , $task1Item['operator_name'], '</td>							
								 </tr>';	
						endforeach;
					?>
				</tbody>
			</table>
		</div>
	</body>
</html>