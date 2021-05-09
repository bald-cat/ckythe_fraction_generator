<?php


class Nations
{
	public $nations;
	public $index;
	public $arrNations;

	public function __construct($count)
	{
		$this->nations = array(
			1 => 'союз Руссвет',
			2 => 'Крымское ханство',
			3 => 'республика Поляния',
			4 => 'Саксонская империя',
			5 => 'Северное королевство'
		);

		$this->index = $this->setNationsIndex($count);
		$this->arrNations = $this->setNations();
	}

	public function setNationsIndex($count)
	{
		$arrIndex = [1, 2, 3, 4, 5];
		$setNationsIndex = array();
		for ($i = 1; $i <= $count; $i++) {
			$valueIndex = array_rand($arrIndex);
			$setNationsIndex[] = $arrIndex[$valueIndex];
			unset($arrIndex[$valueIndex]);
		}
		return $setNationsIndex;
	}

	public function setNations(){
		$arrIndex = $this->index;
		$Nations = $this->nations;
		$arrNations = array();
		foreach ($arrIndex as $index){
			$arrNations[] = [$index => $Nations[$index]];
			unset($Nations[$index]);
		}
		return $arrNations;
	}

	public function getArrNations(){
		return $this->arrNations;
	}
}