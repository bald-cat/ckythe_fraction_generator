<?php


class Tabs
{
	public $tabs;


	public function __construct()
	{
		$this->tabs = array(
			1 => 'Промышленный',
			2 => 'Патриотический',
			3 => 'Технический',
			4 => 'Фермерский',
			5 => 'Строительный'
		);

	}

	public function getArrTabs(){
		return $this->tabs;
	}
}