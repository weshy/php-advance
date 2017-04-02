<?php
class Task
{
	public $taskList = [];

	public static function getList()
	{
		if ($db = mysqli_connect('localhost','root','','bjatta')) {
			$sql = "SELECT name,time FROM taskList";
			$result = mysqli_query($db,$sql);
			$taskList = mysqli_fetch_all($result,MYSQLI_ASSOC);
			mysqli_close($db);
		}	
		return $taskList;
	}

	public static function addTask ($name)
	{
		if ($db = mysqli_connect('localhost','root','','bjatta')) {
		$sql_str = mysqli_real_escape_string($db, $descr);
		$sql = "INSERT INTO taskList (name) VALUES ('$name')";
		$result = mysqli_query($db,$sql);
		pre_print_r(mysqli_error($db));
		mysqli_close($db);
		}
	}
}