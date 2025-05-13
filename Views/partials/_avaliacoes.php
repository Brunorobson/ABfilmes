<div class="flex flex-col space-y-6">
    <!-- Linha com título e pesquisa -->
    <div class="flex justify-between items-center space-x-4 mb-4 mt-10">
        <h2 class="text-xl font-rajdhani font-bold text-slate-200">Avaliações</h2>

        <div class="flex items-center gap-4">
            <a onclick="document.getElementById('janela-avaliacao').classList.remove('hidden')"
                class="inline-flex font-nunito items-center gap-2 px-4 h-10 rounded-md text-white bg-purple-900 hover:bg-purple-700 transition-colors cursor-pointer">
                <i class="ph-light ph-star"></i>
                <span>Adicionar Avaliação</span>
            </a>
        </div>
    </div>
</div>

<?php if (count($avaliacoes) == 0): ?>
    <?php require '_no-avaliacao.php'; ?>
<?php endif; ?>

<!-- Inclui o modal -->
<?php require '_janela-avaliacao.php'; ?>

<?php foreach ($avaliacoes as $avaliacao): ?>
    <?php require '_listagem-avaliacao.php'; ?>
<?php endforeach; ?>