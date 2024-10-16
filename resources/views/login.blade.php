<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>


<div style="background: linear-gradient(to right, #0DBDE5, #2DB08B)">

    <body class="dark:bg-gray-900" style="">
        <div class="flex flex-col items-center justify-center min-h-screen p-4 sm:p-6 lg:p-8">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
                Login Akun Pos UMKM</a>
            <div class="w-full max-w-4xl bg-white rounded-lg shadow dark:border dark:bg-gray-800 dark:border-gray-700">
                <div class="p-4 sm:p-6 md:p-8 space-y-4">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Login Akun
                    </h1>
                    <form class="space-y-4" action="#" method="POST">
                        <div class="space-y-4">
                            <div class="w-full">
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required>
                            </div>
                            <div class="w-full">
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            </div>
                            <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Login Account</button>
                            <!-- Bagian ini diperbarui -->
                            <div class="flex justify-between">

                                <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                    Belum Punya Akun? <a href="#" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Register here</a>
                                </p>
                                <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                    Lupa Password! <a href="#" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Klik Disini</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
</body>

</html>