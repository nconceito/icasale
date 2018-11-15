<?php

    SESSION_START();
    echo "sou o ssl e estou sendo incluido<br>".$_SESSION['ssl']."<BR>";
    
    if (!isset($_SESSION['ssl'])){
        $_SESSION['ssl']='sim';
        echo "Setando sessão.<br>";
        header("location: https://www.icasale.com.br/admin/ssl.php");        
    }
?>