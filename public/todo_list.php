<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<!DOCTYPE html>

<html>
<head>
	<title></title>
</head>


<body>


<h3>To-Do List</h3>
	<ul>
		<li>Learn Git</li>
		<li>Learn Shortcut Keys</li>
		<li>Be Patient</li>
		<li>Do a little homework so you don't fall behind</li>
	</ul>

<form method="POST" action="/todo_list.php">
    <p>
        <label for="additem">Add Item</label><br>
        <input type="text" id="additem" name="additem"  placeholder="Type the item here">
    </p>
 
    <p>
    <input type="submit" value="ADD IT!">
    </p>

</form>

</body>
</html>