<?php
$nbPassagers = array(35, 10, 22, 52, 15, 58, 8, 73);

$totalPassagers = 0;

for ($i = 0, $nbTraversees = count($nbPassagers); $i < $nbTraversees; $i++) {
    $totalPassagers =  $totalPassagers + $nbPassagers[$i];
}

echo $totalPassagers , " passagers transportés le 22/09/2022.\n";
?>
