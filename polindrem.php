<?php

function palindrome_angka($angka) {
  // tulis kode di sini
	for ($i=0; $i < 9; $i++) { 
		if($angka == $i)
		{
			$angka++;
			return $angka.'<br>';
		}
	}

	$arr =str_split($angka);
	$panjang = count($arr);
	
	$arr2 = [];
	$n = count($arr)-1;
	for ($i=0; $i < $panjang-1; $i++) { 
		
		$arr2[$i] = $arr[$n];
		$n--;
	}
	$arrawal = implode("",$arr);
	$arrbaru = implode("",$arr2);
	if($arrawal == $arrbaru)
	{
		$arr[0] += 1;
		$arr[$panjang-1] += 1;
		$arrprint = implode("",$arr);
	}
	else 
	{
		if($panjang%2 == 0)
		{
			for ($i=0; $i < $panjang/2+1; $i++) { 
				$arr[--$panjang] = $arr[$i];
			}
			$arrprint = implode("",$arr);
		}
		else
		{
			for ($i=0; $i < ($panjang-1)/2; $i++) { 
				$arr[--$panjang] = $arr[$i];
				$arr[($panjang+1)/2] += 1;
			}
			$arrprint = implode("",$arr);
		}
	}

	return $arrprint.'<br>';
	
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>