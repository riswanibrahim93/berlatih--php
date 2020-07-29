<?php

function papan_catur($angka) {
// tulis kode di sini
	//kolom
	for ($i=1; $i <= $angka; $i++) { 
		if($i%2 == 1)
		{
			for ($j=1; $j <= $angka; $j++) { 
				echo "# ";
			}
		}
		else
		{
			for ($j=1; $j <= $angka-1; $j++) { 
				echo " #";
			}
		}
		echo "<br>";
	}
	echo "<br>";
}

// TEST CASES
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #

echo papan_catur(5);

# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
