<?php
try {
	processCC();
} catch (Exception $e) {
	echo $e->getMessage();
	echo get_class($e);
	echo "\n";
	echo $e->getPrevious()->getMessage();
	echo get_class($e->getPrevious());
}

function processCC($numb = null, $zipCode = null) {
	try {
		validate($numb, $zipCode);
	} catch (Exception $e) {
		throw new BadFunctionCallException('Invalid Inputs', null, $e);
	}
	echo 'processed';
}

function validate($numb, $zipCode) {
	if (is_null($numb)) {
		throw new InvalidArgumentException('No CC Number');
	}
}