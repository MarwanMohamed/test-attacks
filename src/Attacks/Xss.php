<?php

namespace Shieldfy\Cannon\Attacks;

class Xss implements AttackInterface
{
	
	private $url;
	private $attackes;
	private $passingAttacks=[];
	private $blocksAttacks=[];
	private $attackName="xss";
	private $countAttacks=0;

	public function __construct($url)
	{
		$this->url=$url;
		$this->setAttacks();
	
	}


	private function setAttacks(){
		$this->attackes = require __DIR__ .'/../data/xss.php';
	}
	
	public function run()
	{

		$url=$this->url;
		$client = new \GuzzleHttp\Client();
		
		foreach($this->attackes as $attack){

			$result = $client->request('GET',$url ."?foo=" .$attack, ['http_errors' => false]);
			$this->countAttacks++;

			if($result->getStatusCode()==200){

					$this->passingAttacks[]= htmlentities($attack);
		 	}else{

		 			$this->blocksAttacks[]= htmlentities($attack);

		 	}

		}

		return $this;
	}	 

	public function getAttacks()
	{

		return [
		'attackName'=>$this->attackName,
		'countAttacks'=>$this->countAttacks,
		'countPassingAttacks'=>count($this->passingAttacks),
		'namePassingAttacks'=>$this->passingAttacks,
		'countBlocksAttacks'=>count($this->blocksAttacks),
		'nameBlocksAttacks'=>$this->blocksAttacks

		];
	}
		 

	


}
