<?php
$array = ['A' => 'Ubas', 'B' => 'Santol', 'C' => 'Mangga', 'D' => 'Apol', 'E' => 'Bayavas'];
$keys = array_keys( $array ); //built in function 
function myFunction($prutas,$suse){
    for($i = 0; $i < count($suse); $i++){
        $value = $suse[$i];
        $key = $prutas[$value];
        echo 'Index: ' .$value .' Value: ' .$key .'<br>';
    } 
}
myFunction($array,$keys);
?>