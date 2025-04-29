<?php

$pesquisa = $_REQUEST['pesquisar'] ?? '';
$filmes = Filme::meus(auth()->id, $pesquisa);

view('meus-filmes', compact('filmes', 'pesquisa'));
