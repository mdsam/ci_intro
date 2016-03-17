<!doctype <!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>User_Account</title>
</head>
<body>

<?php foreach ($users as $user);  ?>

<table>
<tr>
<td>
<?=$user['firstname'] ?>
</td>
<td>
<?=$user['secondname'] ?>
</td>
</tr>

<?php endforeach; ?>


</table>



</body>
</html>

