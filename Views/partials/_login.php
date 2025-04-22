<h1 class=" text-slate-400 font-bold px-4 py-2">Acesse sua conta</h1>

<form class="p-4 space-y-4"
            method="POST">

            <?php if ($validacoes = flash()->get('validacoes_login')): ?>
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
                <label class="text-slate-400 mb-1">E-mail</label>
                <input
                    type="text"
                    name="email"
                    class="border-slate-800 border-2 rounded-md bg-slate-900 text-sm focus:outline-none px-2 py-1" />
            </div>

            <div class="flex flex-col">
                <label class="text-slate-400 mb-1">Senha</label>
                <input
                    type="password"
                    name="senha"
                    class="border-slate-800 border-2 rounded-md bg-slate-900 text-sm focus:outline-none px-2 py-1" />
            </div>
            <button type="submit" class="border-slate-800 bg-slate-900 text-slate-400 px-4 py-1 rounded-md border-2 hover:bg-slate-800">Login</button>

        </form>