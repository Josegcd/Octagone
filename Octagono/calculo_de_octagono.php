<?php 
 
function areaOctagon( $side) 
{ 
	return (2 * (1 + sqrt(2)) * 
			$side * $side); 
} 

$side = 4; 
echo("Area of Regular Octagon = "); 
echo(areaOctagon($side)); 

?> 
