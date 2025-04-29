<?php
// Clona os parâmetros atuais da URL
$params = $_GET;
unset($params['pesquisar']); // Remove o filtro de pesquisa
$queryString = http_build_query($params);
$baseUrl = strtok($_SERVER['REQUEST_URI'], '?'); // Pega a URL base sem query string
$cleanUrl = $queryString ? "$baseUrl?$queryString" : $baseUrl;
?>

<div class=" items-center justify-center text-center space-y-3 text-slate-200 w-full max-w-md mx-auto">
    <x-fas-film class="w-8 h-8 text-slate-400" />
    <i class="ph-light ph-film-slate"></i>
    <div class="space-y-1">
        <p>Nenhum filme encontrado com <strong>"<?= $pesquisa ?>"</strong></p>
        <p>Que tal tentar outra busca?</p>
    </div>

    <a href="<?= $cleanUrl ?>"
        class="items-center space-x-1 text-sm text-slate-300 hover:text-white transition">
        <x-fas-times class="w-4 h-4" />
        <span>Limpar filtro</span>
    </a>
</div>