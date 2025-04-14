<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>ABFilmes</title>
</head>

<body class="bg-slate-950 text-slate-400">
    <header class="bg-slate-900">
    <nav class="mx-auto max-w-screen-lg flex justify-between items-center px-8 py-4">
    <img src="logo.webp" alt="Logo" class="w-10 h-10" />

    <ul class="flex space-x-4 font-bold">
        <li><a href="/" class="text-slate-500">Explorar</a></li>
        <li><a href="/meus-livros">Meus Filmes</a></li>
    </ul>

    <ul class="flex space-x-4">
    <?php if(!auth()): ?>
        <li><a href="/login" class="hover:underline">Fazer Login</a></li>
    <?php else: ?>
        <li><a href="#" class="hover:underline">Oi <?= auth()->nome ?></a></li>
        <li><a href="/logout" class="fa-solid fa-right-from-bracket"></a></li>
    <?php endif ?>
    </ul>
</nav>

    </header>



    <main class="mx-auto max-w-screen-lg space-y-6">
        <?php if ($mensagem = flash()->get('mensagem')): ?>
            <div class="bg-green-900 text-green-500 px-4 py-1 rounded-mb text-sm font-bold">
                <?= $mensagem ?>
            </div>
        <?php endif ?>
        <?php require "../views/{$view}.view.php" ?>
    </main>
</body>

</html>