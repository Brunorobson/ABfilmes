<div class="mt-[10px] grid grid-cols-2 min-h-screen">
    <div class="bg-cover bg-center rounded-3xl m-[10px]" style="background-image: url('image_login.webp');">
        <img src="logo.webp" alt="Logo" class="w-10 h-10 m-4" />
    </div>

    <div class="flex flex-col justify-center">
        <div class="flex justify-center mb-6">
            <?php require '_tabs.php'; ?>
        </div>

        <div class="max-w-md mx-auto p-8 rounded-xl shadow-lg">
            <?php require "_{$view}.php"; ?>
        </div>
    </div>
</div>
