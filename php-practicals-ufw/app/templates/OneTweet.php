<?php
echo $tweet['content'].'</br>';
echo date('d M Y H:i:s', strtotime($tweet['date'])).'</br>';
echo $tweet['user'].'</br>'.'</br>';

?>
<form action="/tweets/<?= $tweet['id'] ?>" method="POST">
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" value="Delete">
</form>