<?php

require_once __DIR__ . "\..\Entity\Todolist.php";
require_once __DIR__ . "\..\Repository\TodolistRepository.php";
require_once __DIR__ . "\..\Service\TodolistService.php";


use Entity\Todolist;
use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;

function testShowTodolist(): void{

    $todolistRepository = new TodolistRepositoryImpl();
    $todolistRepository->todolist[1] = new Todolist("satu");
    $todolistRepository->todolist[2] = new Todolist("dua");
    $todolistRepository->todolist[3] = new Todolist("tiga");
    
    $todolistService = new TodolistServiceImpl($todolistRepository);
        
    $todolistService->showTodolist();
}

function testAddTodolist(): void{

    $todolistRepository = new TodolistRepositoryImpl();    
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Satu");
    $todolistService->addTodolist("Dua");
    $todolistService->addTodolist("Tiga");
    $todolistService->addTodolist("Empat");
    $todolistService->addTodolist("Lima");
        
    $todolistService->showTodolist();
}

function testRemoveTodolist(): void{

    $todolistRepository = new TodolistRepositoryImpl();    
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Satu");
    $todolistService->addTodolist("Dua");
    $todolistService->addTodolist("Tiga");
        
    $todolistService->showTodolist();
    $todolistService->removeTodolist(4);
    $todolistService->showTodolist();    
}

testAddTodolist();

