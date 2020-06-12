<?php
$password = password_hash('testing', PASSWORD_DEFAULT);
echo "{$password}\n";
$matches = password_verify('foo', $password);
echo "{$matches}\n";
$matches = password_verify('testing', $password);
echo "{$matches}\n";