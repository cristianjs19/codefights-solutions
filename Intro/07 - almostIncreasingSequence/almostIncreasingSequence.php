<?php 

function almostIncreasingSequence($sequence)
{
    $count = 0;
    for ($i = 0; $i < count($sequence) - 1; $i++) {
        if ($sequence[$i] >= $sequence[$i + 1]) {
            $count++;
        }
        if (($i - 1 >= 0) &&
            (count($sequence) - 2 > $i) &&
            ($sequence[$i - 1] >= $sequence[$i + 1]) &&
            ($sequence[$i] >= $sequence[$i + 2])
            ) {
            return false;
        }
    }
    return $count <= 1 ? true : false;
}

 ?>
