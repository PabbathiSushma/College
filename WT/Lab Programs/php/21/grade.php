<?php
	$m1=$_REQUEST['i1'];
	$m2=$_REQUEST['i2'];
	$m3=$_REQUEST['i3'];
	settype($m1,"integer");
	settype($m2,"integer");
	settype($m3,"integer");
	if($m1 >=40 && $m2>=40 && $m3>=40)
	{
		$p=(($m1+$m2+$m3)/300)*100;
		if($p >= 70)
			echo "distinction";
		else if($p>=60)
			echo "First division";
		else if($p >= 50)
			echo "second division";
		else
			echo "Third division";
	}
	else	
		echo "Fail";
?>
