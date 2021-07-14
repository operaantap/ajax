<?php

$a = array("HTML", "CSS", "PHP");

echo "<br>";



$b = array("Pete"=>"31", "Paul"=>"24", "Julia"=>"20");

$result = array($a, $b);

for ($i = 0; $i < count($result); $i++) {
    echo gettype($result[$i]). '<br/>';
    echo "<br>";
    if (is_array($result[$i])){
        print_r($result[$i]);
    }
}

?>