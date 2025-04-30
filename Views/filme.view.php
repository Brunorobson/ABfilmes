<!-- Container Central -->
<div class="bg-slate-950 flex flex-col items-center justify-center px-4 py-8">

    <!-- Card do Filme -->
    <div class="grid grid-cols-3 gap-8 p-8 rounded-2xl w-full max-w-6xl">

        <!-- Coluna da Imagem (1/3) -->
        <div class="col-span-1 flex justify-center items-start">
            <img class="p-6 bg-slate-800 rounded-xl w-full max-w-xs shadow-lg">
        </div>

        <!-- Coluna dos Detalhes (2/3) -->
        <div class="col-span-2 flex flex-col space-y-4 text-slate-200">
            <div class="text-3xl font-bold"><?= $filme->titulo ?></div>
            <div class="text-purple-400 font-semibold"><?= $filme->categoria ?></div>
            <div class="text-sm text-slate-400"><?= $filme->ano ?></div>
            <p class="text-sm text-slate-300 leading-relaxed">
                <?= $filme->descricao ?>
            </p>
        </div>
    </div>
    <div class="w-full max-w-6xl mt-8">
        <?php require 'partials/_avaliacoes.php'; ?>
    </div>
</div>