<div class="flex flex-col space-y-6">
    <!-- Linha com título e pesquisa -->
    <div class="flex justify-between items-center space-x-4 mb-4 mt-10">
        <h2 class="text-xl font-rammetto text-slate-200">Explorar</h2>

        <div class="flex items-center gap-4">
            <form method="GET" class="flex items-center h-10 border-2 border-slate-800 rounded-md bg-slate-900 px-2">
                <i class="ph-light ph-magnifying-glass text-white"></i>
                <input
                    type="text"
                    name="pesquisar"
                    value="<?= htmlspecialchars($pesquisa) ?>"
                    class="bg-slate-900 text-sm text-white focus:outline-none px-2 py-1 w-40 font-rajdhani"
                    placeholder="Pesquisar..." />
            </form>

            <a href="/adicionar-filme"
                class="inline-flex items-center gap-2 px-4 h-10 rounded-md text-white bg-purple-900 hover:bg-purple-700 transition-colors">
                <i class="fa-solid fa-plus"></i>
                <span>Adicionar Filme</span>
            </a>
        </div>
    </div>

    <?php
    if (count($filmes) == 0) {
        if (!empty($pesquisa)) {
            require 'partials/_no-found.php'; // Nenhum filme encontrado na pesquisa
        } else {
            require 'partials/_no-filmes.php'; // Usuário não tem nenhum filme
        }
    }
    ?>
    <!-- Grid dos cards -->
    <section class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
        <?php foreach ($filmes as $filme) {
            require 'partials/_filme.php';
        } ?>


    </section>


</div>