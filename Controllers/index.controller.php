<?php
$pesquisa = $_REQUEST['pesquisar'] ?? '';
$filmes = Filme::all($pesquisa);

view('index', compact('filmes', 'pesquisa'));
