<?php
$input = (isset($argv[1]))? $argv[1] : 'abcd';

echo "$input \n";
if (strlen($input) > 1) {
	printPermutation(strlen($input), $input);
}


function printPermutation($n, $input) {
	if ($n == 1) {
		echo "$input \n";
	} else {
		for ($i = 0; $i < $n - 1; $i++) {
			if (1 < $n -1) {
				printPermutation( $n-1, $input);
			}
			if (0 == ($n % 2)) {
				$input = swap($input, $i, $n-1);
				echo "$input \n";
			} else {
				$input = swap($input, 0, $n-1);
				echo "$input \n";
			}

		}
		if (1 < $n -1) {
			printPermutation( $n-1, $input);
		}
	}
}

function swap($input, $pos1, $pos2) {
	$tmp = $input[$pos1];
	$input[$pos1] = $input[$pos2];
	$input[$pos2] = $tmp;
	return $input;
}

?>