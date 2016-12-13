<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class SqliTest extends TestCase
{
	public function testRun()
	{
		$sqli = (new \Shieldfy\Cannon\Attacks\Sqli('localhost'))->run();
		$passingAttacks = $sqli->getAttacks();
		$countPassing = $passingAttacks['countPassingAttacks'];
		$this->assertGreaterThan(0, $countPassing);
	}

}