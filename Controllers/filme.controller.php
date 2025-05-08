<?php

$filme = Filme::get($_GET['id']);

$avaliacoes = $database
    ->query(
        "SELECT a.*, u.nome as usuario_nome
         FROM avaliacoes a
         JOIN usuarios u ON a.usuario_id = u.id
         WHERE a.filme_id = :id",
        Avaliacao::class,
        ['id' => $_GET['id']]
    )
    ->fetchAll();


view('filme', compact('filme', 'avaliacoes'));
