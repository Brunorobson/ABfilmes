<div class="flex flex-col space-y-6">
    <!-- Linha com título e pesquisa -->
    <div class="flex justify-between items-center space-x-4 mb-4 mt-10"> <!-- Adicionada margem superior -->
        <h2 class="text-xl font-rammetto text-slate-200 mb-2">Explorar</h2> <!-- Adicionada margem inferior -->

        <form class="flex items-center border-2 border-slate-800 rounded-md bg-slate-900 px-2 mt-2"> <!-- Adicionada margem superior -->
            <i class="ph-light ph-magnifying-glass"></i>

            <!-- Campo de pesquisa -->
            <input type="text" name="pesquisar"
                class="bg-slate-900 text-sm text-white focus:outline-none px-2 py-1 w-40 font-rajdhani"
                placeholder="Pesquisar..." />
        </form>
    </div>
    <?php if (count($filmes) == 0) {
        require 'partials/_no-found.php';
    }; ?>
    <!-- Grid dos cards -->
    <section class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
        <?php foreach ($filmes as $filme) {
            require 'partials/_filme.php';
        } ?>


    </section>


</div>