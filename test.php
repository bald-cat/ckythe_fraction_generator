<?php

require_once 'Nations.php';
require_once 'Tabs.php';
require_once 'Random.php';

$nation = new Nations(5);
$tabs = new Tabs(5);
$random = new Random(5);

var_dump($random->getRandom());

