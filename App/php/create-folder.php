<?php 
 	
 	$id = $_POST['new-folder'];
 	$url = $_POST['url'];

 	 /*mkdir('../data/'.$id, 0777);*/

 	 mkdir('../../'.$url."/".$id, 0777); 
	
?>