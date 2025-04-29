<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link
        rel="stylesheet"
        type="text/css"
        href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css" />
    <link
        rel="stylesheet"
        type="text/css"
        href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/fill/style.css" />
    <script src="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.2"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        rammetto: ['"Rammetto One"', 'cursive'],
                        rajdhani: ['Rajdhani', 'sans-serif'],
                        nunito: ['"Nunito Sans"', 'sans-serif'],
                    },
                },
            },
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Rajdhani:wght@300;400;500;600;700&family=Rammetto+One&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Rajdhani:wght@300;400;500;600;700&family=Rammetto+One&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Rajdhani:wght@300;400;500;600;700&family=Rammetto+One&display=swap" rel="stylesheet">

    <title>ABFilmes</title>
</head>

<body class="bg-slate-950 text-slate-400">
    <?php if ($view !== 'login' && $view !== 'registrar'): ?>
        <header>
            <nav class="mx-auto max-w-screen-lg flex justify-between items-center px-8 py-4">
                <!-- Logo à esquerda -->
                <div class="flex items-center space-x-2">
                    <img src="logo.webp" alt="Logo" class="w-10 h-10" />
                </div>

                <!-- Menu central -->
                <ul class="flex space-x-4 font-bold">
                    <li>
                        <a href="/" class="inline-flex items-center gap-2 px-4 py-2 h-10 rounded-md font-nunito text-slate-500 hover:bg-slate-800 hover:text-purple-400 transition-colors
            {{ request()->is('') ? 'bg-slate-800 text-purple-400' : '' }}">
                            <i class="ph-light ph-popcorn"></i>
                            Explorar
                        </a>
                    </li>
                    <li>
                        <a href="/meus-filmes" class="inline-flex items-center gap-2 px-4 py-2 h-10 rounded-md font-nunito text-slate-500 hover:bg-slate-800 hover:text-purple-400 transition-colors
            {{ request()->is('meus-filmes') ? 'bg-slate-800 text-purple-400' : '' }}">
                            <i class="ph-light ph-film-slate"></i>
                            Meus Filmes
                        </a>
                    </li>
                </ul>

                <!-- Usuário à direita -->
                <ul class="flex items-center space-x-0 font-bold">
                    <?php if (!auth()): ?>
                        <li>
                            <a href="/login" class="inline-flex items-center gap-2 px-4 py-2 h-10 rounded-md text-slate-500 hover:bg-slate-800 hover:text-purple-400 transition-colors">
                                Fazer Login
                            </a>
                        </li>
                    <?php else: ?>
                        <li>
                            <a href="#" class="inline-flex items-center gap-2 px-4 py-2 h-10 rounded-md text-slate-500 hover:bg-slate-800 hover:text-purple-400 transition-colors">
                                Olá, <?= auth()->nome ?>
                            </a>
                        </li>
                        <li>
                            <a href="/logout" class="inline-flex items-center px-4 py-2 h-10 rounded-md text-slate-500 hover:bg-slate-800 hover:text-purple-400 transition-colors">
                                <i class="ph-light ph-sign-out"></i>
                            </a>
                        </li>
                    <?php endif ?>
                </ul>
            </nav>
        </header>

    <?php endif; ?>


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