<?php
/** @var  $queryBuilder QueryBuilder */
$tasks = $queryBuilder->table('todo')->all();


require_once "views/todo.php";