<div id="janela-avaliacao" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
    <div class="bg-slate-800 p-6 rounded-lg shadow-lg max-w-md w-full text-white relative">
        <!-- Cabeçalho -->
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold font-rajdhani">Avaliar Filme</h2>
            <button
                onclick="document.getElementById('janela-avaliacao').classList.add('hidden')">
                <i class="ph-light ph-x text-xl bg-slate-700 p-1 rounded-md hover:text-white hover:bg-slate-600 transition"></i>
            </button>
        </div>
        <?php if ($validacoes = flash()->get('validacoes')): ?>
            <div class="border-red-800 bg-red-900 text-red-400 px-4 py-1 rounded border-2 text-sm font-bold">
                <ul>
                    <li>Deu ruim!</li>
                    <?php foreach ($validacoes as $validacao): ?>
                        <li><?= $validacao ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
        <?php endif ?>

        <!-- Informações do filme -->
        <div class="grid grid-cols-3 gap-4 items-center mb-6">
            <!-- Capa simulada -->
            <div class="col-span-1 flex justify-center items-start">
                <img src="<?= $filme->imagem ?>" alt="Capa do Filme" class=" rounded-xl w-full max-w-xs shadow-lg">
            </div>


            <!-- Dados do filme + Estrelas -->
            <div class="col-span-2 space-y-1">
                <h3 class="text-lg font-semibold text-slate-100">Título do Filme</h3>
                <p class="text-sm text-slate-400">Categoria: <span class="font-medium">Ação</span></p>
                <p class="text-sm text-slate-400">Ano: <span class="font-medium">2024</span></p>

                <!-- Formulário -->
                <form action="/criar-avaliacao" method="POST" class="space-y-4">

                    <div>
                        <label class="block text-sm mt-3">Sua Nota</label>
                        <div class="flex gap-1" id="estrelas">
                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                <button
                                    type="button"
                                    onclick="setNota(<?= $i ?>)"
                                    class="estrela"
                                    data-valor="<?= $i ?>">
                                    <i class="ph-light ph-star text-purple-500 text-xl"></i>
                                </button>
                            <?php endfor; ?>
                        </div>
                        <input type="hidden" name="nota" id="nota" value="0">
                    </div>
            </div>
        </div>
        <div>
            <div class="relative">
                <input type="hidden" name="filme_id" value="<?= $filme->id ?>">
                <textarea
                    name="avaliacao"
                    placeholder="Comentário"
                    rows="3"
                    class="border border-slate-800 rounded-md bg-slate-900 text-sm text-slate-400 focus:outline-none px-2 py-2 w-full resize-none"></textarea>
            </div>
        </div>

        <!-- Botão -->
        <div class="text-right">
            <button type="submit"
                class="bg-purple-600 px-6 py-2 rounded hover:bg-purple-700 transition font-semibold">
                Publicar
            </button>
        </div>
        </form>
    </div>
</div>

<script>
    function setNota(valor) {
        document.getElementById('nota').value = valor;

        const estrelas = document.querySelectorAll('.estrela i');
        estrelas.forEach((estrela, index) => {
            if (index < valor) {
                estrela.classList.remove('ph-light');
                estrela.classList.add('ph-fill');
            } else {
                estrela.classList.remove('ph-fill');
                estrela.classList.add('ph-light');
            }
        });
    }
</script>