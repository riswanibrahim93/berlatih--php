<?php
function pasangan_terbesar($angka){
// kode di sini

	$arr =str_split($angka);
	$panjang = count($arr);
	$n = 0;
	// $a = (int)($arr[0].$arr[1]);
	// $b = (int)($arr[1].$arr[2]);
	// var_dump($a);
	// var_dump($b);
	// if( > )
	// {
	// 	echo $a;
	// }
	// if()
	$besar = (int)($arr[0].$arr[1]);
	for ($i=1; $i < $panjang-1; $i++) { 
		$pembanding = (int)($arr[$i].$arr[$i+1]);
		if($besar < $pembanding)
		{
			$besar = $pembanding;
		}

	}
	return $besar.'<br>';
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>