<?php

namespace Shieldfy\Cannon\Attacks;


class Cannon
{
	private $data = [];
	private $url;

	public function __construct($url)
	{
		$this->url = $url;
	}


	public function get($nameOfAttack)
	{
		$name = ucfirst($nameOfAttack);

		$name = __NAMESPACE__.'\\'.$name;

		$this->data[$name] = (new $name($this->url))->run()->getAttacks();

	  return $this;

	}


	public function getAll()
	{


	  $this->data['Falsee']=(new FalsePositive($this->url))->run()->getAttacks();
	  $this->data['Dangerous']=(new Dangerous($this->url))->run()->getAttacks();
	  $this->data['Ldap']=(new Ldap($this->url))->run()->getAttacks();
	  $this->data['Lfi']=(new Lfi($this->url))->run()->getAttacks();
	  $this->data['Non']=(new Non($this->url))->run()->getAttacks();
	  $this->data['Sqli']=(new Sqli($this->url))->run()->getAttacks();
	  $this->data['Xss']=(new Xss($this->url))->run()->getAttacks();

	  return $this;

	}


	

	public function getResult()
		{
			return $this->data;
		}



}


