<?php
// Decide qual formulário mostrar
$formulario = $_GET['formulario'] ?? 'login';
?>

<div class="mt-6 grid grid-cols-2 gap-2">
    <div  src="image_login.webp"  class="rounded-3xl" alt="Logo"  style="background-image: url('image_login.webp');">
    <img src="logo.webp" alt="Logo" class="w-10 h-10" />

    </div>
    <div>
        <div class="flex justify-center mt-10">
            <div class="bg-slate-800 p-2 rounded-2xl flex space-x-2">

            </div>
        </div>

        <div class="max-w-md mx-auto p-8 rounded-xl shadow-lg">
                <?php require 'partials/_login.php'; ?>
                <?php require 'partials/_registrar.php'; ?>
        </div>
    </div>
</div>
