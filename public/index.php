<?php

require '../vendor/autoload.php';
require '../connect.php';

use MVC\Model\QuestManager;

$listQuest = new QuestManager();
var_dump($listQuest->findAll());
