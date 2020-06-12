<?php
try {
	processCC();
} catch (Exception $e) {
	echo $e->getMessage();
	echo "\n";
	echo $e->getPrevious()->getMessage();
}

function processCC($numb = null, $zipCode = null) {
	try {
		validate($numb, $zipCode);
	} catch (Exception $e) {
		throw new Exception('Invalid Inputs', null, $e);
	}
	echo 'processed';
}

function validate($numb, $zipCode) {
	if (is_null($numb)) {
		throw new Exception('No CC Number');
	}
}