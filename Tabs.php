<?php


class Tabs
{
	public $tabs;
	public $index;
	public $arrTabs;

	public function __construct($count)
	{
		$this->tabs = array(
			1 => 'Промышленный',
			2 => 'Патриотический',
			3 => 'Технический',
			4 => 'Фермерский',
			5 => 'Строительный'
		);

		$this->index = $this->setTabsIndex($count);
		$this->arrTabs = $this->setTabs();
	}

	public function setTabsIndex($count)
	{
		$arrIndex = [1, 2, 3, 4, 5];
		$setTabsIndex = array();
		for ($i = 1; $i <= $count; $i++) {
			$valueIndex = array_rand($arrIndex);
			$setTabsIndex[] = $arrIndex[$valueIndex];
			unset($arrIndex[$valueIndex]);
		}
		return $setTabsIndex;
	}

	public function setTabs(){
		$arrIndex = $this->index;
		$Tabs = $this->tabs;
		$arrTabs = array();
		foreach ($arrIndex as $index){
			$arrTabs[] = [$index => $Tabs[$index]];
			unset($Tabs[$index]);
		}
		return $arrTabs;
	}

	public function getArrTabs(){
		return $this->arrTabs;
	}
}