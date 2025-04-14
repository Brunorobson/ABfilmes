<div class=" items-center justify-center text-center space-y-3 text-slate-200 w-full max-w-md mx-auto">
    <x-fas-film class="w-8 h-8 text-slate-400" />
    <i class="fa-solid fa-xmark fa-3x"></i>
    <div class="space-y-1">
        <p>Nenhum filme encontrado com <strong>"<?=$pesquisa?>"</strong></p>
        <p>Que tal tentar outra busca?</p>
    </div>

    <a href="/"
       class="items-center space-x-1 text-sm text-slate-300 hover:text-white transition">
        <x-fas-times class="w-4 h-4" />
        <span>Limpar filtro</span>
    </a>
</div>
