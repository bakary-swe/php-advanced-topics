<?php
try {
	processCC();
} catch (Exception $e) {
	echo $e->getMessage();
}

function processCC($numb = null, $zipCode = null) {
	if (is_null($numb)) {
		throw new Exception('No CC Number');
	}
	echo 'processed';
}