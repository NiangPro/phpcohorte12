<?php 

$age = 11;

if ($age == 6 || $age == 7) {
    echo "poussin";
}else if($age == 8 || $age == 9){
    echo "pupille";
}else if($age  == 10 || $age == 11){
    echo "minime";
}else if($age > 12){
    echo "cadet";
}else{
    echo "age non pris en charge";
}