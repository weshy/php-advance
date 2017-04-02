<?php

$username = isset($_GET['name']) ? $_GET['name'] : 'Guest';

require "views/profile.php";