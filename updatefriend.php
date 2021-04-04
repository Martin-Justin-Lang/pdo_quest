<?php

include'./header.php';

//J'effectue la modfication de ma table
if(isset($_POST['submit']) && $_POST['submit']<>''){
    $pdo->exec("UPDATE friend SET firstname='".$_POST['firstname']."', lastname='".$_POST['lastname']."' WHERE id=".$_POST['id']);
}

//je teste s'il y a une demande de modification et je récupère l'id de l'enregistrementà modifier
if(isset($_GET['id']) && $_GET['id']<>''){
    $friend = $pdo->query("SELECT * FROM friend WHERE id=".$_GET['id'])->fetch();
}

?>

<form action="" method="post" class="form">
    <div class="form">
        <label for="firstname">Enter your firstname: </label>
        <input type="text" name="firstname" id="firstname" values="<?php echo $friend['firstname']; ?>" required>
    </div>
    <div class="form">
        <label for="lastname">Enter your lastname: </label>
        <input type="text" name="lastname" id="lastname" values="<?php echo $friend['lastnamename']; ?>"  required>
    </div>

    <input type="hidden" name="id"  value="<?php echo $friend['id']; ?>" />

    <div class="form">
        <button type="submit" name= "submit" value="Submit"> Modification du friend <?php echo $friend['firstname']; ?></button>
    </div>
</form>

<div class="newfriend">
<img src="img/createfriend.png" alt="newfriend" class="newfriend">
</div>

<p>
<a href="/friend.php">Voir tout les friends</a>
</p>
