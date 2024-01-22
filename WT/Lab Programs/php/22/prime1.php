<?php
	$n=$_REQUEST['i1'];
	settype($n,"integer");
	function prm($n)
	{
		 $c=0;;
		for ($i=1; $i<=$n;$i++)
		{
			if(($n%$i)==0)
				$c++;
		}
		if($c == 2)
			echo $n."is a prime number";
		else
			echo $n."is not a prime number";
	}
	prm($n);
?>
