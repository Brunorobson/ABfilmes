<div class="flex flex-col space-y-6">
    <!-- Linha com título e pesquisa -->
    <div class="flex justify-between items-center space-x-4 mb-4 mt-10"> <!-- Adicionada margem superior -->
        <h2 class="text-xl font-bold text-slate-200 mb-2">Explorar</h2> <!-- Adicionada margem inferior -->

        <form class="flex items-center border-2 border-slate-800 rounded-md bg-slate-900 px-2 mt-2"> <!-- Adicionada margem superior -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-400" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 103 10.5a7.5 7.5 0 0013.15 6.15z" />
            </svg>

            <!-- Campo de pesquisa -->
            <input type="text" name="pesquisar"
                class="bg-slate-900 text-sm text-white focus:outline-none px-2 py-1 w-40"
                placeholder="Pesquisar..." />
        </form>
    </div>
    <!-- Grid dos cards -->
    <section class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
    <?php foreach ($filmes as $filme){
        require 'partials/_filme.php';
    } ?>
</section>

</div>