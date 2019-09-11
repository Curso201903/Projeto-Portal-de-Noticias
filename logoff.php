<?php
    session_start();

    // remove todos  as variáveis
    session_unset();
    // destrói a sessão
    session_destroy();
    header("Location: index-site.php");
?>    