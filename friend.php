<?php
include'./header.php';
?>
<h1> Friends family </h1>


<?php
$allFriends = $pdo->query("SELECT * FROM friend")->fetchALL();

    foreach($allFriends as $friend)
    {
        //Pour chaque ligne de mon tableau, j'affiche les infos récupéré de ma table et je rajoute 2 options (modifier et supprimer)
        echo $friend['firstname'].'---'.$friend['lastname']. ' 
    <a href="updatefriend.php?id='.$friend['id'].'&type=upd">✎</a> <a href="deletefriend.php?id='.$friend['id'].'&type=del">🚮</a> <br>';
    }

    ?>

    <div class="friends">
        <img src="img/friends.jpeg" alt="friends" class="friends">
    </div>