<?php

namespace Tests;

use PHPUnit\Framework\TestCase;


class DangerousTest extends TestCase
{
	public function testRun()
	{
		$dangerous = (new \Shieldfy\Cannon\Attacks\Dangerous('localhost'))->run();
		$passingAttacks = $dangerous->getAttacks();
		$countPassing = $passingAttacks['countPassingAttacks'];
		$this->assertGreaterThan(0, $countPassing);
	}

}