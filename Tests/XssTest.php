<?php

namespace Tests;

use PHPUnit\Framework\TestCase;


class XssTest extends TestCase
{
	public function testRun()
	{
		$xss = (new \Shieldfy\Cannon\Attacks\Xss('localhost'))->run();
		$passingAttacks = $xss->getAttacks();
		$countPassing = $passingAttacks['countPassingAttacks'];
		$this->assertGreaterThan(1, $countPassing);
	}

}