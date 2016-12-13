<?php

namespace Tests;

use PHPUnit\Framework\TestCase;


class NonTest extends TestCase
{
	public function testRun()
	{
		$non = (new \Shieldfy\Cannon\Attacks\Non('localhost'))->run();
		$passingAttacks = $non->getAttacks();
		$countPassing = $passingAttacks['countPassingAttacks'];
		$this->assertGreaterThan(0, $countPassing);
	}

}