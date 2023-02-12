<?php
// echo "<h1>h1 p</h1>";

// type data string
$string1 = "data 1";
// echo $string1;
// unset($string1);
// var_dump($string1);


// type data integer
$integer1 = 5;
// echo $integer1;
// var_dump($integer1);

// type data float yaitu angka yang berkoma
$float = 2.23;
// var_dump($float);

// type data NULL
$nulls = null;
// var_dump($nulls);
// echo $nulls;


// type data boolean OR bool
$bool1 = true;
$false = false;
// echo $bool;
// var_dump($bool1);

// echo "<br>";

// var_dump($false);

// type data array
$array = [
    "data", 1, 2.4, true
];

// cara memanggil data di array. yaitu tinggal tambahin tanda [keynya]
// echo $array[1];
// echo $array[0];


// cara menambah atau merubah data di array
$array[1];
$array[] = "data terakhir";

// $array[10] = "data terakhir";
// $array["data2"] = "data terakhir";

$array[0] = "bukan data";


// cara menghapus data array;
// unset($array[0]);

$array = [];

var_dump($array);

// var_dump($array);

$arraykey = [
    "data1" => "string 1 ini", 2 => 3
];
// var_dump($arraykey);

$arrayDalamArray = [
    [
        "array pertama"
    ],
    [
        "array kedua"
    ],
    [
        "array ketiga"
    ]
];

// cara pemanggilan arraynya
// kita akan mengambil key yang 0 dan ambillagi data array yang 0
// echo $arrayDalamArray[1][0];
// var_dump($arrayDalamArray);