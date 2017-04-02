<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task List</title>
</head>
<body>
	<ul>
		<?php foreach ($tasks as $name): ?>
		<li>
			<? $name["name"] ?> : <? $name["time"] ?>
		</li>
	<?php endforeach ?>
	<?php die(var_dump($tasks));?>
	</ul>
</body>
</html>
