<?php

require_once "core/task.php";
$tasks = Task::getList();
require_once "views/task.php";