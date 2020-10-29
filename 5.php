<?php
	$soma=0;
	while (true) {
		$num=rand(1,100);
		$soma=$soma+$num;
		if ($soma>=1000) {
			break;
		}
		echo "<br>";
		echo "A soma é " .$soma;
	
}


?>
