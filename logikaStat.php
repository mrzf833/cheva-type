<?php 

// if else

$data = ""; // mepresentasikan data false
$data = "d"; // mepresentasikan data true
$data = 0; // mepresentasikan data false
$data = 1; // mepresentasikan data true karena >= 1  itu akan menghasilkan nilai true kalau di perbandingan


// if($data == "array"){
//     echo "benar ini";
// }

// if($data != "array"){
//     echo "benar ini";
// }

// 2 == "asddas" adalah sebuah bool yaitu false

// echo $data;

// contoh pertama
// $data = false;
// if($data){
//     echo "data satu";
// }else{
//     echo "ini data else";
// }

// contoh kedua
// $data = false;
// if($data){
//     echo "data satu";
//     if(false){
//         echo "dalam if";
//     }
// }else if(false){
//     echo "ini data else if";
// }else {
//     echo "ini data else";
// }


// // switch case

// $data = "data";
// switch($data){
//     case "data":
//         echo "ini data";
//         break;
//     case "solo":
//         echo "solo";
//         break;
//     default :
//         echo "default";
// }


// tenary
// jadi kalau && harus terpenuhi semua kalau || salah satunya aja
$data = "data";
($data == "data" && $data == "solo") ?  $data = "tenary" : $data = "salah";

echo $data;