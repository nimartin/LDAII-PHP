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
		echo $key['date'].'</br>';
		echo $key['user'].'</br>'.'</br>';
	}
?>