<div class="relative w-full aspect-[7/9] rounded-lg overflow-hidden shadow-md group" style="background-image: url('<?= $filme->imagem ?>'); background-size: cover; background-position: center;">

    <!-- Gradiente sobre a imagem -->
    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/90 z-0"></div>

    <!-- Nota do filme -->
    <div class="absolute top-2 right-2 bg-slate-800 text-slate-200 text-sm px-2 py-1 rounded-full flex items-center space-x-1 z-10">
        <span class="text-[16px] font-bold">
            <?php
            $nota = $filme->nota_avaliacao ?? 0;

            // Força tipo float para evitar warnings
            $nota = (float) $nota;

            echo fmod($nota, 1.0) == 0.0
                ? (int) $nota
                : number_format($nota, 1, ',', '');
            ?>

            <span class="text-[12px]">/5 <i class="ph-fill ph-star"></i></span>
    </div>

    <!-- Informações do filme -->
    <div class="absolute bottom-3 left-3 text-white px-4 py-3 z-10">
        <div class="flex flex-col gap-y-1">
            <p clasas="font-semibold text-lg leading-tight"><a href="filme?id=<?= $filme->id ?>"><?= $filme->titulo ?></a></p>
            <p class="text-[12px] text-slate-200"><?= $filme->categoria ?> • <?= $filme->ano ?></p>
        </div>
    </div>
</div>