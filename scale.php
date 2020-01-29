<?php
$weights = array_map('intval', explode(',', $argv[3]));;
rsort($weights);
$weight1 = (int)$argv[1];
$weight2 = (int)$argv[2];

if ($weight1 == $weight2) {
	echo "In balans\n";
}
else {
	$difference = $weight1 - $weight2;
	if ($weight1 < $weight2) {
		$difference = $weight2 - $weight1;
	}
	$weights_necessary = [];
	foreach ($weights as $single_weight) {
		if ($single_weight <= $difference) {
			$weights_necessary[] = $single_weight;
			$difference = $difference - $single_weight;
		}
	}
	if ($difference != 0) {
		echo "Niet in balans\n";
	} 
	else {
		echo implode(", ", $weights_necessary) . "\n";
	}
}
?>
