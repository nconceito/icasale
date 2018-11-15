<?php

    if (!isset($_SESSION['ssl']){
        $_SESSION['ssl']='sim';
        header("location: https://www.icasale.com.br/admin/");
    } else {
        unset($_SESSION['ssl']);
    }
?>