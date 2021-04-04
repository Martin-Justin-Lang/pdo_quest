<?php

include'./header.php';

if(isset($_POST['submit']) && $_POST['submit']<>'') {

    $query = 'SELECT id FROM friend WHERE firstname =:firstname and lastname=:lastname';
    $select = $pdo->prepare($query);
    $select->bindValue(':firstname', $_POST['firstname'], PDO::PARAM_STR);
    $select->bindValue(':lastname', $_POST['lastname'],PDO::PARAM_STR);
    $select->execute();
    $result=$select->fetchAll();

    if(count($result)>0){
        echo "Il est déjà parmis nous !";
    }else {

        $sql = "INSERT INTO friend VALUES(null, '" . $_POST['firstname'] . "', '" . $_POST['lastname'] . "')";
        $statement = $pdo->prepare($sql);
        $statement->execute();
    }


    if ($statement) {
        echo '<h2> Salut copain !</h2>';
        echo '<meta http-equiv="refresh" content="0;URL=./friend.php">';
    }else{
        echo '<h2> Tu pues le chat !</h2>';
    }
}
    ?>

<h1> A new friend !?</h1>

<form action="" method="post" class="form">
    <div class="form">
        <label for="firstname">Enter your firstname: </label>
        <input type="text" name="firstname" id="firstname" required>
    </div>
    <div class="form">
        <label for="lastname">Enter your lastname: </label>
        <input type="text" name="lastname" id="lastname" required>
    </div>
    <div class="form">
        <input type="submit" name= "submit" value="Submit">
    </div>
</form>

<div class="newfriend">
<img src="img/createfriend.png" alt="newfriend" class="newfriend">
</div>

<p>
<a href="/friend.php">Voir tout les friends</a>
</p>
