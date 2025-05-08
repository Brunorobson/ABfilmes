<div class="bg-[#131320] rounded-2xl w-full p-6 text-white">
    <div class="grid grid-cols-3 gap-4">
        <div>
            <h2 class="text-lg font-semibold">Usuário</h2>
            <p><?= $avaliacao->usuario_nome ?></p>
        </div>
        <div>
            <h2 class="text-lg font-semibold">Avaliação</h2>
            <p><?= $avaliacao->avaliacao ?></p>
        </div>
        <div>
            <h2 class="text-lg font-semibold">Nota</h2>
            <p><?= $avaliacao->nota ?></p>
        </div>
    </div>
</div>