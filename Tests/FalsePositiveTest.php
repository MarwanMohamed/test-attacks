<?php

namespace Tests;

use PHPUnit\Framework\TestCase;


class FalsePositiveTest extends TestCase
{
	public function testRun()
	{
		$Falsee = (new \Shieldfy\Cannon\Attacks\FalsePositive('localhost'))->run();
		$passingAttacks = $Falsee->getAttacks();
		$countPassing = $passingAttacks['countBlocksAttacks'];
		$this->assertGreaterThan(0, $countPassing);
	}

}