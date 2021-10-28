<?php


class Random
{
	public $arrRandom;
	public $arrNations;
	public $arrTabs;

	public function __construct($count){
		$this->arrNations = $this->randomNation($count);
		$this->arrTabs = $this->randomTabs($count);
		$this->arrRandom = $this->random($count);
	}

	public function randomNation($count){
		$arr = [1, 2, 3, 4, 5, 6, 7];
		$arrNations = array();
		for($i = 1; $i <= $count; $i++){
			$index = array_rand($arr);
			$arrNations[] = $arr[$index];
			unset($arr[$index]);
		}
		return $arrNations;
	}

	public function randomTabs($count){
		$arr = [1, 2, 3, 4, 5, 6, 7];
		$arrTabs = array();
		for($i = 1; $i <= $count; $i++){
			$index = array_rand($arr);
			$arrTabs[] = $arr[$index];
			unset($arr[$index]);
		}
		return $arrTabs;
	}

	public function random($count) {

		$nation = $this->arrNations;
		$tabs = $this->arrTabs;

		$arrRandom = array();
		for($i = 1; $i <= $count; $i++){

			$indexNation = array_rand($nation);
			$indexTab = array_rand($tabs);

			$randomNation = $nation[$indexNation];
			$randomTab = $tabs[$indexTab];

			if($randomNation == 1 and $randomTab == 1 or $randomNation == 2 and $randomTab == 2){
				$tabsAlternative = $tabs;
				unset($tabsAlternative[$randomTab]);
				$alternativeIndex = array_rand($tabsAlternative);
				$arrRandom[] = [$randomNation => $alternativeIndex];
				unset($nation[$indexNation]);
				unset($tabs[$alternativeIndex]);
			} else{
				$arrRandom[] = [$randomNation => $randomTab];
				unset($nation[$indexNation]);
				unset($tabs[$indexTab]);
			}
		}

		return $arrRandom;
	}

	public function getRandom(){
		return $this->arrRandom;
	}
}