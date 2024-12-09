<?php

require_once "../Model/TodoList.php";
require_once "../helper/input.php";
require_once "../BusinessLogic/AddTodoList.php";

function viewAddTodoList() {
    echo "MENAMBAH TODO" . PHP_EOL;

    $todo = input("Todo (x untuk batal)");

    if ($todo == "x") {
        echo "Batal menambah todo" . PHP_EOL;
    } else {
        addTodoList($todo);
    }
}