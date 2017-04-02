<?php

$queryBuilder->table('taskList')->insert([
    'title' => Request::get('title', '')
]);

Request::back();