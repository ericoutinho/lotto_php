<?php

	/*
		Gerar números randômicos para MEGA SENA
		6 números de 01 a 60
	*/

	/*
		foreach(range(0,50,10) as $cont){
			echo $cont . "<br>\n";
		}
	*/


	function lotto($digits = 6, $range = 60) {

		$numbers = [];

		for ( $i = 0; $i < $digits; $i++ ) {
		
			$rand = mt_rand(1, $range);
			
			if ( in_array($rand, $numbers) ) {

				while ( in_array($rand, $numbers) ) {

					$rand = mt_rand(1, $range);

				}

			}

			//array_push($numbers, $rand);
			array_push($numbers, sprintf("%'02d", $rand));
			
		}

		sort($numbers);
		return $numbers;

	}

	var_dump(lotto());

?>