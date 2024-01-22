<html>
	<body>
		<?php	
			function count1($s)
			{
					$f=array();
					$w=preg_split("/[.,!?' ']/",$s);
					//print_r($w);
					foreach($w as $x)
					{
						$k=array_keys($f);
						//print_r($k);
						//echo "<br/>";
						if(in_array($x,$k))
							$f[$x]++;
						else
							$f[$x]=1;
					}		
						
					return $f;
			}
			$a=count1("apple,banana is a good.apple and banana also useful"); 
			$keys=array_keys($a);
			foreach($keys as $y)
				echo $y,":    ",$a[$y],"<br/>";
		?>
	</body>
</html>
