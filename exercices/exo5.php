<?php 
$nombre = 8;

echo "<h1> La table de multiplication de $nombre est : </h1>";
for ($i=1; $i <=10 ; $i++) { 
    echo "$nombre x $i = ".($nombre * $i)."<br>";
}

echo "<h1> Les table de multiplication de 1 a 10</h1>";

for ($n=1; $n <=10 ; $n++) { 
    for ($i=1; $i <=10 ; $i++) { 
        echo "$n x $i = ".($n * $i)."<br>";
    }
    echo "----------------------------------------------------- <br>";
}
