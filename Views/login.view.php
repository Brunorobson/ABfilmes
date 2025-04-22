<div class="mt-6 grid grid-cols-2 gap-2">
    <div>
        <img src="image_login.webp" style="background-image: url('image_login.webp');" class="rounded-3xl" alt="Logo" />
    </div>
    <div>
        <?php
        $modo = $_GET['modo'] ?? 'login';
        ?>

        <div class="flex justify-center mt-10">
            <div class="bg-slate-800 p-2 rounded-2xl flex space-x-2">
                <a href="?modo=login" class="px-6 py-2 rounded-2xl text-sm font-semibold
            <?= $modo === 'login' ? 'bg-purple-700 text-white' : 'text-purple-400 hover:text-white' ?>">
                    Login
                </a>
                <a href="?modo=cadastro" class="px-6 py-2 rounded-2xl text-sm font-semibold
            <?= $modo === 'cadastro' ? 'bg-purple-700 text-white' : 'text-purple-400 hover:text-white' ?>">
                    Cadastro
                </a>
            </div>
        </div>

        <div class="mt-8 max-w-md mx-auto  p-8 rounded-xl shadow-lg">
            <?php
            if ($modo === 'login') {
                require 'partials/_login.php';
            } elseif ($modo === 'cadastro') {
                require 'partials/_registrar.php';
            }
            ?>
        </div>
    </div>
</div>