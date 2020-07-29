<?php
function ubah_huruf($string){
//kode di sini
	$kata = '';
	$n = unpack("C*", $string);
	for ($i=1; $i <= count($n); $i++) { 
		$kata .= chr($n[$i]+1);
	}
	return $kata.'<br>';
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>