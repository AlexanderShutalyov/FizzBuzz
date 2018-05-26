<?php


// $file = fopen("counter.txt", "r"); 
// while (!feof($file)) {
// 	$str = fgets($file);
// }

// $arr = explode(" ", $str);

//  $arr[0] - fizz
//  $arr[1] - buzz
//  $arr[2] - 3d number
 $arr[0] = 3;
 $arr[1] = 5;
 $arr[2] = 17;

$i = 1;

function zzz(&$i, $fizz, $buzz) {
		if (($i % $fizz == 0) && ($i % $buzz == 0)) {
			echo 'FB ';
		}    elseif ($i % $fizz == 0) {
		 	 echo 'F ';
		     }    elseif ($i % $buzz == 0) {
					echo 'B ';
				  }    else 
		        		{ echo $i," ";}
	$i++;
}

	while ($i <= $arr[2]) {
		zzz($i, $arr[0], $arr[1]);
	} 
	

