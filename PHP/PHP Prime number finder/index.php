<?php

//This script find a Prime number using PHP - probably a better way of doing this
//Author Stephen karpathakis
$Number = 3;
$count = 0;

$prime = 1;

echo "choose ".$Number."<hr/>"; 
for  ($value1 = 1; $value1 <= $Number; $value1++ )
{
	//echo $value1;
	
	if ( $value1 != 1 && $value1 != $Number )
	{
		//echo "A -" ;
		
		$mod = $Number % $value1;
		if ( $mod == 0 )
		{
			//echo " * ";
			$prime = 0;
			//Skip to save calc
			$value1 = $Number;
		}
		
		
	}
	//echo " - ".$prime . "<br/> " ;
}
echo "<hr>";

	if ( $prime == 1 )
	{
		echo "yes";
	}
	if ( $prime == 0 )
	{
		echo "no";
	}
		

?>