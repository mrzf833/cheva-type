<?php 

// for
// for($i = 0; $i <= 5; $i++){
//     echo $i;
//     for($l = 0; $l <= 5; $l++){
//         echo $l;
//     }
// }


// $array = [
//     0 => "data1", 1 => "data 2"
// ];

// for($i = 0; $i < count($array); $i++){
//     echo $array[$i];
// }

// $i = 0;
// while($i < 5){
//     echo "data";
//     // $i = $i + 1;
//     $i++;
// }

// $i = 6;
// do {
//     echo "data";
//     // $i = $i + 1;
//     $i++;
// } while($i < 5)


$array = [
    "key1" => "data1", 3 => "data 2"
];

foreach($array as $key=>$value){
    echo $key;
}




?>