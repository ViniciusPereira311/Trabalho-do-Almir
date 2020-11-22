<?php

    session_start();

    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);

    Header("location: index.php");
?>
