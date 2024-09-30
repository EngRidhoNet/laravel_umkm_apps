<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kementerian Keuangan Portal</title>
    <!-- Include the compiled Tailwind CSS -->
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-blue-800 text-white py-4">
        <div class="container mx-auto flex justify-between items-center">
            
            <div class="place-content:center;">
                <a href="#" class="hover:underline">Beranda</a>
                <a href="#" class="hover:underline">Galeri Produk</a>
                <a href="#" class="hover:underline">Publikasi</a>
                <a href="#" class="hover:underline">Konsultasi</a>
                <a href="#" class="hover:underline">FAQ</a>
            </div>
            <div class="flex items-center space-x-3">
                <a href="#" class="text-white">ID</a>
                <a href="#" class="text-white">EN</a>
                <div class="h-8 w-8 rounded-full bg-gray-500"></div>
            </div>
        </div>
    </nav>
</body>
</html>
