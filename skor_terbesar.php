<?php
function skor_terbesar($arr){
//kode di sini
  //pengelompokan kelas
  $kelas = [];
  $hapus = [];
  $n = 0;
  for ($i=0; $i < count($arr); $i++) { 
    array_push($kelas, $arr[$i]['kelas']);
  }
  for ($i=1; $i < count($kelas); $i++) { 
    for ($j=0; $j < $i; $j++) { 
      if($kelas[$i] == $kelas[$j])
      {
        $hapus[$n] = $i;
        $n++;
      }
    }
  }
  for ($i=0; $i < count($hapus); $i++) { 
    unset($kelas[$hapus[$i]]);
  }

  //sort kelas
  for ($i=0; $i < count($kelas); $i++) { 
    for ($j=0; $j < count($arr); $j++) { 
      if($arr[$j]['kelas'] == $kelas[$i])
      {
        $kelas[$i]
      }
    }
  }

  
//   for ($i=0; $i < count($arr); $i++) { 
//     if($arr[$i]['kelas'] == 'Laravel')
//     {
//       arsort(['nilai']); 
//     }
//   }
  
//     print_r($arr);
}


// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>