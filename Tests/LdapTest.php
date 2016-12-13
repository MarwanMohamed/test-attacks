<?php

namespace Tests;

use PHPUnit\Framework\TestCase;


class LdapTest extends TestCase
{
	public function testRun()
	{
		$ldap = (new \Shieldfy\Cannon\Attacks\Ldap('localhost'))->run();
		$passingAttacks = $ldap->getAttacks();
		$countPassing = $passingAttacks['countPassingAttacks'];
		$this->assertGreaterThan(0, $countPassing);
	}

}