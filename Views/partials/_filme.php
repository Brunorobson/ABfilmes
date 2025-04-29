<div class="relative w-full aspect-[7/9] rounded-lg overflow-hidden bg-gray-400 shadow-md group">

    {{-- Avaliação no topo direito --}}
    <div class="absolute top-2 right-2 bg-slate-800 text-slate-200 text-sm px-2 py-1 rounded-full flex items-center space-x-1">
        <span class="text-[16px] font-bold">4,5 <span class="text-[12px]">/5 <i class="ph-fill ph-star"></i></span>
    </div>

    {{-- Informações no rodapé --}}
    <div class="absolute bottom-3 left-3 text-white px-4 py-3">
        <div class="flex flex-col gap-y-1">
            <p class="font-semibold text-lg leading-tight"><?= $filme->titulo ?></p>
            <p class="text-[12px] text-slate-200">Drama • <?= $filme->ano ?></p>
        </div>
    </div>
</div>