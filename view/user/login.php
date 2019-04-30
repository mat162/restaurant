<?php

if($_SESSION['logged']): ?>

<form action="" method="post">
    <input type="mail" name="Email">
    <input type="password" name="pwd">
    <input type="submit" name="submit" value="Se connecter">
</form>

<?php endif ?>