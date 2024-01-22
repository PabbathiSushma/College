<html>
	<body>
		<?php
			$s="May is too hot";
			$w=explode(" ",$s);
			echo "orginal string : ".$s;
			echo "<br/>apply explode function on the string :  ";
			print_r($w);
			echo "<br/>apply implode function on the splited string :  ";
			$str=implode(" ",$w);
			echo $str."<br/>";
			$a=array(2,7,9,4,55);
			$x=array_search(9,$a);
			if($x >=0)
				echo "search element found in the array.";
			else
				echo "search element not found in the array.";
			echo "<br/>array elements are :  ";
			print_r($a);
			array_unshift($a,100);
			echo "<br/>Adding an element at staring position of the array : ";
			print_r($a);
		?>
	</body>
</html>
