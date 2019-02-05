<?php

	$imageBin = file_get_contents($argv[1]);
	$imageEnc = base64_encode($imageBin);

	if($argv[2]){

	} else {
		echo "\n";
		echo $imageEnc;
		echo "\n\n";
	}
