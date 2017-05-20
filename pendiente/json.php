<?php
	$n=0;
	$arre=array();
	$conn=mysqli_connect("localhost","root","","empleados");
		if($conn)
		{
			$query='SELECT * FROM empleados';
			$res=mysqli_query($conn,$query);
			while($fila=mysqli_fetch_assoc($res)){
				$arre[$n]=$fila["id"]." ".$fila["nom"]." ".$fila["ape"];
				$m=json_encode($arre);
				$_GET[$n]=$m;
				$n++;
			}
			echo $_GET[$n]=$m;		
		}
?>