<?php
include_once '../app/bootstrap.php';
$users = getUsers();
?>
<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ENV Test Page</title>
    <meta name="description" content="Test page for environmental variables">
    <meta name="author" content="DS">
</head>
<body>
<ul>
    <?php foreach ($users as $index=>$user) : ?>
    <li><?php echo "First Name: $user->first_name, Last Name: $user->last_name";?></li>
    <?php endforeach;?>
</ul>
</body>
</html>
