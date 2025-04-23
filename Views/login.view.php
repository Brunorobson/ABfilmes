<?php
// Decide qual formulário mostrar
$formulario = $_GET['formulario'] ?? 'login';
?>

<div class="mt-6 grid grid-cols-2 gap-2">
    <div>
        <img src="image_login.webp" style="background-image: url('image_login.webp');" class="rounded-3xl" alt="Logo" />
    </div>
    <div>
        <div class="flex justify-center mt-10">
            <div class="bg-slate-800 p-2 rounded-2xl flex space-x-2">
                <a href="/login?formulario=login" class="px-6 py-2 rounded-2xl text-sm font-semibold <?= $formulario === 'login' ? 'bg-slate-700 text-white' : 'text-slate-400' ?>">
                    Login
                </a>
                <a href="/login?formulario=registrar" class="px-6 py-2 rounded-2xl text-sm font-semibold <?= $formulario === 'registrar' ? 'bg-slate-700 text-white' : 'text-slate-400' ?>">
                    Cadastro
                </a>
            </div>
        </div>

        <div class="max-w-md mx-auto p-8 rounded-xl shadow-lg">
            <?php if ($formulario === 'login'): ?>
                <?php require 'partials/_login.php'; ?>
            <?php else: ?>
                <?php require 'partials/_registrar.php'; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
