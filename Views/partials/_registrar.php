<div class="max-w-xl mx-auto p-8">
    <h1 class="text-slate-400 font-rammetto px-4 py-2 text-xl">Crie sua Conta</h1>
    <form class="p-4 space-y-4"
        method="POST" action="/registrar">

        <?php if ($validacoes = flash()->get('validacoes_registrar')): ?>
            <div class="border-red-800 bg-red-900 text-red-400 px-4 py-1 rounded-mb border-2 text-sm font-bold">
                <ul>
                    <li>Deu ruim!</li>
                    <?php foreach ($validacoes as $validacao): ?>
                        <li><?= $validacao ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
        <?php endif ?>

        <div class="flex flex-col">
        <div class="relative">
        <i class="ph-light ph-user text-slate-400 absolute top-1/2 left-3 transform -translate-y-1/2 text-lg"></i>
                <input
                    type="text"
                    name="name"
                    placeholder="Nome Completo"
                    class="pl-10 border border-slate-800 border-[1px] rounded-md bg-slate-950 text-sm text-slate-400 focus:outline-none px-2 py-2 w-full" />
            </div>
        </div>
        <div class="flex flex-col">
        <div class="relative">
        <i class="ph-light ph-envelope text-slate-400 absolute top-1/2 left-3 transform -translate-y-1/2 text-lg"></i>

                <input
                    type="text"
                    name="email"
                    placeholder="E-mail"
                    class="pl-10 border border-slate-800 border-[1px] rounded-md bg-slate-950 text-sm text-slate-400 focus:outline-none px-2 py-2 w-full" />
            </div>
        </div>

        <div class="flex flex-col">
        <div class="relative">
                <i class="ph-light ph-password text-slate-400 absolute top-1/2 left-3 transform -translate-y-1/2 text-lg"></i>
                <input
                    type="password"
                    name="senha"
                    placeholder="Senha"
                    class="pl-10 border border-slate-800 border-[1px] rounded-md bg-slate-950 text-sm text-slate-400 focus:outline-none px-2 py-2 w-full" />
            </div>
        </div>

        <button
            type="submit"
            class="w-full bg-purple-900 hover:bg-purple-600 text-white font-semibold py-2 px-4 rounded-md transition-colors duration-300">
            CRIAR
        </button>
    </form>
</div>