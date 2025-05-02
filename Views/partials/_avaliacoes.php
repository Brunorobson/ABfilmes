<div class="flex flex-col space-y-6">
    <!-- Linha com título e pesquisa -->
    <div class="flex justify-between items-center space-x-4 mb-4 mt-10">
        <h2 class="text-xl font-rammetto text-slate-200">Avaliações</h2>

        <div class="flex items-center gap-4">
            <a onclick="document.getElementById('janela-avaliacao').classList.remove('hidden')"
                class="inline-flex items-center gap-2 px-4 h-10 rounded-md text-white bg-purple-900 hover:bg-purple-700 transition-colors cursor-pointer">
                <i class="fa-solid fa-plus"></i>
                <span>Adicionar Avaliação</span>
            </a>
        </div>
    </div>
</div>

<!-- Inclui o modal -->
<?php require '_janela-avaliacao.php'; ?>