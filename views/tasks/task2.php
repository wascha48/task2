<!DOCTYPE html>
<html>
    <head>
        <title>Тестовое задание 2</title>
		<script>
			$(document).ready(function(){ 
				$('#table2').DataTable({
				        "paging":	false,
					"filter":	false,
					"info":  	false
				});				
			}); 
   		</script>
	</head>
	<body>
		<h4 align="center"> Запрос 2</h4>
		<div>
			<table id="table2" class="table table-striped table-bordered text-center text-nowrap">
				<thead>
					<tr>
						<th>Наименование товара</th>
						<th>Сумма</th>
						<th>Количество</th>
					</tr>
				</thead>
				<tbody>
				<?php 
					foreach ($task2List as $task2Item): 
						echo '<tr>';	
						echo '		<td>' , $task2Item['tovar_name'],'</td>
								<td>' , $task2Item['price_sum'], '</td>
								<td>' , $task2Item['count_sum'], '</td>							
							</tr>';	
					endforeach;
				?>
				</tbody>
			</table>
		</div>
	</body>
</html>
