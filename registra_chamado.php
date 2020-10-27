<?php
    require_once "validador_acesso.php";

    session_start();

    $titulo = str_replace('#','-', $_POST['titulo']);
    $categoria = $_POST ['categoria'];
    $marca = $_POST ['marca'];
    $lote = $_POST ['lote'];
    $quantidade = $_POST ['quantidade'];
    $valor_nota = $_POST ['valor_nota'];
    $descricao = str_replace('#','-', $_POST['descricao']);
    $id_usuario = $_SESSION['id'];


    $texto = $id_usuario.'#'.$titulo.'#'.$categoria.'#'.$marca.'#'.$lote.'#'.$quantidade.'#'.$valor_nota.'#'.$descricao.PHP_EOL;

    $arquivo = fopen('chamados.uni', 'a');

    fwrite($arquivo , $texto);

    fclose($arquivo);

    header('Location: home.php?abertura=true');


?>