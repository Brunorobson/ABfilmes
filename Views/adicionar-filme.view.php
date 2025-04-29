<!-- Contêiner Centralizado -->
<div class="flex items-center justify-center bg-slate-950 p-4">
    <form class="grid grid-cols-3 gap-6 p-8  rounded-2xl w-full" method="POST" enctype="multipart/form-data">

        <!-- Coluna da Imagem (1/3) -->
        <div class="col-span-1 flex flex-col justify-center items-center border-2 border-dashed border-slate-700 rounded-xl p-6 bg-slate-800">
            <label for="imagem" class="cursor-pointer text-center text-slate-400 hover:text-white transition">
                <i class="ph-light ph-image text-5xl mb-4"></i>
                <p class="text-sm">Clique ou arraste uma imagem</p>
                <input type="file" name="imagem" id="imagem" class="hidden" accept="image/*">
            </label>
        </div>

        <!-- Coluna do Formulário (2/3) -->
        <div class="col-span-2 flex flex-col justify-center space-y-4">
            <?php if ($validacoes = flash()->get('validacoes_login')): ?>
                <div class="border-red-800 bg-red-900 text-red-400 px-4 py-1 rounded border-2 text-sm font-bold">
                    <ul>
                        <li>Deu ruim!</li>
                        <?php foreach ($validacoes as $validacao): ?>
                            <li><?= $validacao ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            <?php endif ?>

            <h1 class="text-slate-400 font-rammetto text-xl">Novo Filme</h1>

            <div class="relative">
                <i class="ph-light ph-user text-slate-400 absolute top-1/2 left-3 transform -translate-y-1/2 text-lg"></i>
                <input
                    type="text"
                    name="titulo"
                    placeholder="Título"
                    class="pl-10 border border-slate-800 rounded-md bg-slate-900 text-sm text-slate-400 focus:outline-none px-2 py-2 w-full" />
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="relative">
                    <i class="ph-light ph-calendar text-slate-400 absolute top-1/2 left-3 transform -translate-y-1/2 text-lg"></i>
                    <input
                        type="date"
                        name="ano"
                        class="pl-10 border border-slate-800 rounded-md bg-slate-900 text-sm text-slate-400 focus:outline-none px-2 py-2 w-full" />
                </div>
                <div class="relative">
                    <i class="ph-light ph-tag text-slate-400 absolute top-1/2 left-3 transform -translate-y-1/2 text-lg"></i>
                    <input
                        type="text"
                        name="categoria"
                        placeholder="Categoria"
                        class="pl-10 border border-slate-800 rounded-md bg-slate-900 text-sm text-slate-400 focus:outline-none px-2 py-2 w-full" />
                </div>
            </div>

            <div class="relative">
                <textarea
                    name="descricao"
                    placeholder="Descrição"
                    rows="3"
                    class="border border-slate-800 rounded-md bg-slate-900 text-sm text-slate-400 focus:outline-none px-2 py-2 w-full resize-none"></textarea>
            </div>

            <!-- Botões -->
            <div class="flex justify-end space-x-2 pt-4">
                <a href="/pagina-anterior" class="bg-slate-700 hover:bg-slate-600 text-white font-semibold py-2 px-4 rounded-md transition-colors duration-300">
                    Cancelar
                </a>
                <button
                    type="submit"
                    class="bg-purple-900 hover:bg-purple-700 text-white font-semibold py-2 px-4 rounded-md transition-colors duration-300">
                    Salvar
                </button>
            </div>
        </div>
    </form>
</div>