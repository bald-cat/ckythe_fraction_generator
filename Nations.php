<?php


class Nations
{
	public $nations;

	public function __construct()
	{
		$this->nations = array(
			1 => "союз Руссвет ",
			2 => 'Крымское ханство',
			3 => 'республика Поляния',
			4 => 'Саксонская империя',
			5 => 'Северное королевство'
		);

	}

	public function getArrNations(){
		return $this->nations;
	}
}

