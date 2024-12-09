<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Belajar PHP");
addTodoList("Belajar MySql");
addTodoList("Belajar Laravel");

ViewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();