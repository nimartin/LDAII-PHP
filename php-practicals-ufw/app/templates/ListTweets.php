<h1> Add tweet </h1>
<form action="/tweets" method="POST">
	<input type="hidden" name="_method" value="POST">
    <label for="username">Username:</label>
    <input type="text" name="username">

    <label for="message">Message:</label>
    <textarea name="message"></textarea>

    <input type="submit" value="Tweet!">
</form>
<h1> All tweets </h1>
<?php
	foreach ($tweets as $key) {
		echo $key['content'].'</br>';
		echo date('d M Y H:i:s', strtotime($key['date'])).'</br>';
		echo $key['user'].'</br>'.'</br>';
	}
?>
<h1>Delete a tweet</h1>
<form action="/tweets/<?= $id ?>" method="POST">
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" value="Delete">
</form>