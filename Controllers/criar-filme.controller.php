<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('location: /adicionar-filme');
    exit;
}

if (!auth()) {
    abort(403);
}

$usuario_id = auth()->id;
$titulo = $_POST['titulo'];
$ano = $_POST['ano'];
$categoria = $_POST['categoria'];
$descricao = $_POST['descricao'];

$validacao = Validacao::validar([
    'titulo' => ['required', 'min:3'],
    'ano' => ['required'],
    'categoria' => ['required'],
    'descricao' => ['required'],
], $_POST);

if ($validacao->naoPassou()) {
    header('location: /adicionar-filme');
    exit();
}

$novoNome = md5(rand());
$extensao = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
$imagem = "images/$novoNome.$extensao";
move_uploaded_file($_FILES["imagem"]["tmp_name"], __DIR__ . '/..public/' . $imagem);

$database->query(
    "
    insert into filmes (titulo, ano, descricao, categoria, imagem, usuario_id)
    values (:titulo, :ano, :descricao, :categoria, :imagem, :usuario_id)",
    params: compact('titulo', 'ano', 'descricao', 'categoria', 'imagem', 'usuario_id')
);

view('adicionar-filme');
flash()->push('mensagem', 'Livro cadastrado com sucesso');
header('location: /meus-filmes');
exit();
