<?php

    session_start();
    /*
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
    */
    //remover índices do array de sessão
    //unset()
    //unset($_SESSION['x']);

    //destruir a variável de sessão
    //session_destroy()


    session_destroy();
    header('Location: index.php');
    
?>