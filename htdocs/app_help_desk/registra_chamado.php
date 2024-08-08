<?php

    ob_start();

/*
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
*/

    session_start();

    
    $titulo = str_ireplace('#', '-', $_POST['titulo']);
    $categoria = str_ireplace('#', '-', $_POST['categoria']);
    $descricao = str_ireplace('#', '-', $_POST['descricao']);
           
    
    //$texto = $_POST['titulo'] . '#' . $_POST['categoria'] . '#' . $_POST['descricao'];
    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;
    
    $arquivo = fopen('arquivo.hd', 'a');

    fwrite($arquivo, $texto);

    fclose($arquivo);


    ob_end_clean();


    //echo $texto;
    header('Location: abrir_chamado.php');

    exit();




?>