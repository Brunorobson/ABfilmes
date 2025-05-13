<?php
$hash = md5($avaliacao->usuario_nome);
$cor = '#' . substr($hash, 0, 6);

$partes = explode(' ', $avaliacao->usuario_nome);
$iniciais = strtoupper(substr($partes[0], 0, 1) . (isset($partes[1]) ? substr($partes[count($partes) - 1], 0, 1) : ''));
?>
<div class="bg-[#131320] rounded-2xl w-full p-6 text-white mb-4">
    <div class="grid grid-cols-12 gap-4 items-center">
        <!-- Coluna 1 - Usuário (30%) -->
        <div class="col-span-3 flex items-center gap-4 pr-4 border-r border-slate-700">
            <div class="w-10 h-10 rounded-md flex items-center justify-center text-white font-bold text-sm shadow-md" style="background-color: <?= $cor ?>;">
                <?= $iniciais ?>
            </div>
            <p class="text-sm"><?= $avaliacao->usuario_nome ?></p>
        </div>

        <!-- Coluna 2 - Avaliação (60%) -->
        <div class="col-span-7 px-4 text-sm">
            <?= $avaliacao->avaliacao ?>
        </div>

        <!-- Coluna 3 - Nota (10%) -->
        <div class="col-span-2 flex items-center justify-center border border-slate-700 rounded-md py-2 px-1 text-xs text-slate-300">
            <span class="flex items-center gap-1 text-base font-bold text-purple-400">
                <?= number_format($avaliacao->nota, 1, ',', '') ?> / 5
                <i class="ph-fill ph-star text-purple-500 text-xl"></i>
            </span>
        </div>
    </div>
</div>