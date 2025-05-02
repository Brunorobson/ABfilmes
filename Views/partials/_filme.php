<div class="relative w-full aspect-[7/9] rounded-lg overflow-hidden shadow-md group" style="background-image: url('<?= $filme->imagem ?>'); background-size: cover; background-position: center;">
    <div class="absolute top-2 right-2 bg-slate-800 text-slate-200 text-sm px-2 py-1 rounded-full flex items-center space-x-1">
        <span class="text-[16px] font-bold">4,5 <span class="text-[12px]">/5 <i class="ph-fill ph-star"></i></span>
    </div>

    <div class="absolute bottom-3 left-3 text-white px-4 py-3">
        <div class="flex flex-col gap-y-1">
            <p class="font-semibold text-lg leading-tight"><a href="filme?id=<?= $filme->id ?>"><?= $filme->titulo ?></a></p>
            <p class="text-[12px] text-slate-200"><?= $filme->categoria ?> • <?= $filme->ano ?></p>
        </div>
    </div>
</div>