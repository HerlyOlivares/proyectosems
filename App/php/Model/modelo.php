<?php 

class BD{

	function conexion(){

		$conexion = mysqli_connect('localhost', 'root', '123456', 'sems');

		if (isset($conexion)) {
			
			echo 'La conexion es satisfactoria';
		}
	}
}


?>