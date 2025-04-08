<?php
$filmes = Filmes::all($_REQUEST['pesquisar'] ?? '');
view('index', compact('filmes'));