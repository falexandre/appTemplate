<?php

$app->get('/', function() use($app) {

    $dados = array(
        'pagina' => 'inicio'
    );
    $app->render('layout.php', $dados);
});

$app->get('/inicio', function() use($app) {

    $dados = array(
        'pagina' => 'inicio'
    );
    $app->render('layout.php', $dados);
});