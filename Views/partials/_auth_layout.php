<div class="mt-[10px] grid grid-cols-2 min-h-screen">
<div class="bg-cover bg-center rounded-3xl m-[10px] p-8 flex flex-col justify-between min-h-[500px]" style="background-image: url('image_login.webp');">
    <div>
        <img src="logo.webp" alt="Logo" class="w-12 h-12 mb-6" />
    </div>

    <div class="text-white">
        <h1 class="text-sm font-rammetto mb-2 text-gray-600">AB Filmes</h1>
        <h2 class="text-1xl font-rammetto">O guia definitivo para os <br>amantes do cinema</h2>
    </div>
</div>


    <div class="flex flex-col justify-center">
        <div class="flex justify-center mb-6">
            <?php require '_tabs.php'; ?>
        </div>

        <div class="flex items-center justify-center">
    <div class="max-w-md w-full">
        <?php require "_{$view}.php"; ?>
    </div>
</div>
