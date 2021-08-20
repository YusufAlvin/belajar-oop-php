<?php 
require_once __DIR__ . "\Entity\Todolist.php";
require_once __DIR__ . "\Repository\TodolistRepository.php";
require_once __DIR__ . "\Service\TodolistService.php";
require_once __DIR__ . "\View\TodolistView.php";
require_once __DIR__ . "\Helper\InputHelper.php";

use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;
use View\TodolistView;

echo "APLIKASI TODOLIST" . PHP_EOL;

$todolistRepository = new TodolistRepositoryImpl();
$todolistService = new TodolistServiceImpl($todolistRepository);
$todolistView = new TodolistView($todolistService);

$todolistView->showTodolist();