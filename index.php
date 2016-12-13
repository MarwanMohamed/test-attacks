<?php

require_once __DIR__ . '/cannon/vendor/autoload.php';

if (isset($_GET['check'])) {

	$cannon = (new Shieldfy\Cannon\Attacks\Cannon($_GET['check']))->getAll();

	$result = $cannon->getResult();

	print_r($result);
}


