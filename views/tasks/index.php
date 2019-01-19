<!DOCTYPE html>
<html>
    <head>
        <title>Тестовое задание</title>
		
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"> 
		
		<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"> </script>
		<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"> </script>
		<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"> </script>
		
		<script>
			$(document).ready(function(){ 
				
				$('#table').DataTable();
				
 		    	$('#request1').click(function(){
					$('#request1').hide();
        			$('#task1').load('/task1');       
    			}) 
				
				$('#request2').click(function(){
					$('#request2').hide();
        			$('#task2').load('/task2');       
    			}) 
				
			}); 			
   		</script>
	
	</head>
	<body>
		<h4 class="text-center"> Список заданий: </h4>
		
		<div class="container h-100">
			<div class="row h-100 justify-content-center align-items-center">
					<button id="request1" class="btn btn-primary btn-lg m-3">Запрос 1</button>
					<div id="task1" class="center-block"></div>
			</div>
		</div>
		
		<div class="container h-100">
			<div class="row h-100 justify-content-center align-items-center">
					<button id="request2" class="btn btn-primary btn-lg m-3">Запрос 2</button>
					<div id="task2" class="center-block"></div>
			</div>
		</div>
		
	</body>
</html>