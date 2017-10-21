<?php
$howMuch = 10;
$first = 0;
$second = 1;
echo $first.',';
echo $second.',';

for($i=0; $i<$howMuch; $i++){
    $third = $first+$second;
    echo $third.',';
    $first = $second;
    $second = $third;
}
?>
