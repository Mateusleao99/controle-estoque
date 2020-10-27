<?php

    session_start();

    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null; // usuario 1 admin , usuario 2 comum

    $lista_usuarios = array(
        array('id' => 1 , 'registro'=>'mateus', 'senha' => '123', 'perfil' => 1),
        array('id' => 2 , 'registro'=>'marcelo', 'senha' => '123', 'perfil' => 1),
        array('id' => 3 , 'registro'=>'nathalia', 'senha' => '123', 'perfil' => 1),
        array('id' => 4 , 'registro'=>'batman', 'senha' => '123', 'perfil' => 2)
    );

    foreach($lista_usuarios as $user){
        if($user['registro'] == $_POST['registro'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil'];
            break;
        }
    }

    if($usuario_autenticado){
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('Location: home.php');
    }else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }
?>