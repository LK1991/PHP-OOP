<?php

	$name1 = 200;  
	$name2 = "App";  

	if (is_integer($name1))  {
		echo "$name1 is an integer.<br>" ;  
	}
	else {  
		echo "$name1 is not an integer.<br>" ;  
	}  
	if (is_integer($name2)) {  
		echo "$name2 is an integer.<br>" ;  
	}  
	else {  
		echo "$name2 is not an integer.<br>" ;  
	}  

	$result=is_integer($name1);  
	echo "$name1 is an integer." .var_dump($result)."<br>";  
	$result=is_integer($name2);  
	echo "$name2 is an integer." .var_dump($result)."<br>";  

	echo "____________________________________________________________________<br>" . "<br>";

	$var_name = array("A", "B", "C");  
	if (is_array($var_name)) { 
		echo "This is an array.<br>";  
	}
	else {
		echo "This is not an array";  
	}

	echo "____________________________________________________________________<br>" . "<br>";

	$var_name = 10.5;
	if (is_double($var_name)) {
		echo "This is a double value.<br>";
		echo "<br>";
	}
	else {
		echo "This is not a double value.<br>";
		echo '<br>';
	}

	var_dump(is_double(85));
	echo '<br>';
	var_dump(is_double(1099));
	echo '<br>';
	var_dump(is_double(6.66));
	echo '<br>';
	var_dump(is_double(23.3));
