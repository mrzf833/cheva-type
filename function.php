<?php 

// function sayBye(){
//     echo "byee";
// }

// sayBye();

function sayBye2($nama){
    echo "byee, " . $nama;
}

sayBye2("data 2");

function sayBye3($nama = "data"){
    echo "byee, " . $nama;
}

sayBye3("falaq");

?>