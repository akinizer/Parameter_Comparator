
<html>
<head><h2>=Assignment2 PHP Program=</h2></head>
<body>
	<?php
		
		function test1($x=26,$y=49){
			return  $x*4 + $y%7;
		}
		
		//	1. Variable Number of Actual Parameters 
	
		echo  "\r\n1. variable number of actual parameters ";
	
		echo  "\r\nresult : " . test1(3,5) .	 "\r\n";	//numbers as parameters
		
		//	2. Parameter Correspondence

		//		2.a Positional

		echo  "\r\n2.a positional ";

		echo  "\r\nresult : ". test1(5,3) . "\r\n";	// values of x and y are swapped
		
		//		2.b Keyword

		echo  "\r\n2.b keyword ";
			
		echo  "\r\nresult : " . test1(3) . "\r\n";	//only x input is given, y uses default value

		//		2.c Combination

		echo  "\r\n2.c combination ";
			
		echo  "\r\nresult : " . test1(3+5,5-3) . "\r\n";	//expressions as inputs
		
		//	3. Formal Parameter Default Values 

		echo  "\r\n3. formal parameter default values";
	
		echo  "\r\nresult : " . test1() . "\r\n";	//empty inputs to use default x and y
		
		//	4. Parameter Passing Methods 

		function test2($x, $y){
			return  $x . " , " . $y;	//returns copy values of inputs
		}
		
		function test3($x, $y){
			return  $x[0] . " , " . $y[0];	//returns values are passed by reference in the addresses
		}

		echo  "\r\n4. parameter passing methods ";

		//		4.1 Pass by value

		echo  "\r\n4.1 pass by value ";	
		
		$p = 15;
		$q = 25;
			
		echo  "\r\nresult : " . test2($p,$q) . "\r\n";	//value inputs

		//		4.2 Pass by reference	

		echo  "\r\n4.2 pass by reference ";

		$a = [15];
		$b = [25];

		echo  "\r\nresult : " . test3($a,$b) . "\r\n";	//values that are contained in array addresses
		
	?>
</body>
</html>

