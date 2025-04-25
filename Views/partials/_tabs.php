<?php
$active = $view ?? 'login';
?>

<div class="bg-slate-800 p-2 rounded-2xl flex space-x-2">
    <a href="/login" class="px-6 py-2 rounded-2xl text-sm font-semibold <?= $active === 'login' ? 'bg-slate-900 text-white' : 'text-slate-400' ?>">
        Login
    </a>
    <a href="/registrar" class="px-6 py-2 rounded-2xl text-sm font-semibold <?= $active === 'registrar' ? 'bg-slate-900 text-white' : 'text-slate-400' ?>">
        Cadastro
    </a>
</div>
