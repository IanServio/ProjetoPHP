<?php
    session_start();
    unset($_SESSION['usuario']);
    unset($_SESSION['nome']);
    session_destroy();
    header("Location: index.php");
    exit;
?>