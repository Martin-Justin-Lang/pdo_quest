<?php

include'./header.php';


if(isset($_GET['id']) && $_GET['id']<>'') {
    $friend = $pdo->exec("DELETE FROM friend WHERE id=" . $_GET['id']);
}
?>