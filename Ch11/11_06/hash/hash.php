<?php
$password = password_hash('testing', PASSWORD_DEFAULT);
echo "{$password}\n";
if (password_needs_rehash($password, PASSWORD_DEFAULT, ['cost' => 12])) {
	$newHash = password_hash('testing', PASSWORD_DEFAULT, ['cost' => 12]);
	echo "{$newHash}\n";
}