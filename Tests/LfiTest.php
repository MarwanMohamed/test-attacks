<?php

namespace Tests;

use PHPUnit\Framework\TestCase;


class LfiTest extends TestCase
{
	public function testRun()
	{
		$lfi = (new \Shieldfy\Cannon\Attacks\Lfi('localhost'))->run();
		$passingAttacks = $lfi->getAttacks();
		$countPassing = $passingAttacks['countPassingAttacks'];
		$this->assertGreaterThan(0, $countPassing);
	}

}