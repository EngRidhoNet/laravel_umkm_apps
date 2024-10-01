<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center min-h-screen p-4 sm:p-6 lg:p-8">
        <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
            <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
            POS UMKM
        </a>
        <div class="w-full max-w-4xl bg-white rounded-lg shadow dark:border dark:bg-gray-800 dark:border-gray-700">
            <div class="p-4 sm:p-6 md:p-8 space-y-4">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Buat Akun
                </h1>
                <form class="space-y-4" action="#" method="POST">
                    <div class=" gap-4 sm:grid-cols-2 lg:grid-cols-3">
                        <div class="w-full">
                            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Panjang</label>
                            <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                        <div class="w-full pt-4">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required>
                        </div>
                        <div class="w-full pt-4">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                        <div class="w-full pt-4">
                            <label for="universitas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Asal Universitas</label>
                            <input type="text" name="universitas" id="universitas" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                        <div class="w-full pt-4">
                            <label for="tanggal_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                        <div class="w-full pt-4">
                            <label for="jenis_kelamin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="male">Laki-Laki</option>
                                <option value="female">Perempuan</option>
                            </select>
                        </div>
                        <div class="w-full pt-4">
                            <label for="no_hp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Telepon</label>
                            <input type="tel" name="no_hp" id="no_hp" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                        <div class="w-full pt-4">
                            <label for="penghasilan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pemasukan</label>
                            <input type="number" name="penghasilan" id="penghasilan" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                        <div class="w-full pt-4">
                            <label for="pekerjaan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pekerjaan</label>
                            <input type="text" name="pekerjaan" id="pekerjaan" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                        <div class="w-full pt-4">
                            <label for="foto_profil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload Foto Profil</label>
                            <input type="file" name="foto_profil" id="foto_profil" accept="image/*" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>

                       <div class="w-full pt-4">
                            <label for="provinsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Provinsi</label>
                            <select name="provinsi" id="provinsi" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                <option value="">Pilih Provinsi</option>
                            </select>
                        </div>
                        <!-- Kota Select -->
                        <div class="w-full pt-4">
                            <label for="kota" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kota</label>
                            <select name="kota" id="kota" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                <option value="">Pilih Kota</option>
                            </select>
                        </div>
                        <!-- Kecamatan Select -->
                        <div class="w-full pt-4">
                            <label for="kecamatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kecamatan</label>
                            <select name="kecamatan" id="kecamatan" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                <option value="">Pilih Kecamatan</option>
                            </select>
                        </div>
                        <!-- Kelurahan Select -->
                        <div class="w-full pt-4">
                            <label for="kelurahan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelurahan</label>
                            <select name="kelurahan" id="kelurahan" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                <option value="">Pilih Kelurahan</option>
                            </select>
                        </div>
                        <div class="w-full pt-4">
                            <label for="kode_pos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Pos</label>
                            <input type="text" name="kode_pos" id="kode_pos" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                    </div>
                    <div class="w-full pt-4">
                        <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat lengkap</label>
                        <textarea name="alamat" id="alamat" rows="3" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required></textarea>
                    </div>
                    <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Buat Akun</button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Sudah Punya Akun? <a href="{{ route('login') }}" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login Disini</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
     <script>
        document.addEventListener('DOMContentLoaded', function() {
            const provinsiSelect = document.getElementById('provinsi');
            const kotaSelect = document.getElementById('kota');
            const kecamatanSelect = document.getElementById('kecamatan');
            const kelurahanSelect = document.getElementById('kelurahan');

            let provinces = [];
            let regencies = [];
            let districts = [];
            let villages = [];

            // Fetch all data at once
            Promise.all([
                fetch('{{ asset('api_daerah/provinces.json') }}').then(response => response.json()),
                fetch('{{ asset('api_daerah/regencies.json') }}').then(response => response.json()),
                fetch('{{ asset('api_daerah/districts.json') }}').then(response => response.json()),
                fetch('{{ asset('api_daerah/villages.json') }}').then(response => response.json())
            ]).then(([provincesData, regenciesData, districtsData, villagesData]) => {
                provinces = provincesData;
                regencies = regenciesData;
                districts = districtsData;
                villages = villagesData;

                // Populate Provinsi dropdown
                provinces.forEach(province => {
                    const option = document.createElement('option');
                    option.value = province.id;
                    option.textContent = province.name;
                    provinsiSelect.appendChild(option);
                });
            });

            // Provinsi change event
            provinsiSelect.addEventListener('change', function() {
                kotaSelect.innerHTML = '<option value="">Pilih Kota</option>';
                kecamatanSelect.innerHTML = '<option value="">Pilih Kecamatan</option>';
                kelurahanSelect.innerHTML = '<option value="">Pilih Kelurahan</option>';

                kotaSelect.disabled = false;
                kecamatanSelect.disabled = true;
                kelurahanSelect.disabled = true;

                const selectedProvinceId = this.value;
                const filteredRegencies = regencies.filter(regency => regency.province_id === selectedProvinceId);

                filteredRegencies.forEach(regency => {
                    const option = document.createElement('option');
                    option.value = regency.id;
                    option.textContent = regency.name;
                    kotaSelect.appendChild(option);
                });
            });

            // Kota change event
            kotaSelect.addEventListener('change', function() {
                kecamatanSelect.innerHTML = '<option value="">Pilih Kecamatan</option>';
                kelurahanSelect.innerHTML = '<option value="">Pilih Kelurahan</option>';

                kecamatanSelect.disabled = false;
                kelurahanSelect.disabled = true;

                const selectedRegencyId = this.value;
                const filteredDistricts = districts.filter(district => district.regency_id === selectedRegencyId);

                filteredDistricts.forEach(district => {
                    const option = document.createElement('option');
                    option.value = district.id;
                    option.textContent = district.name;
                    kecamatanSelect.appendChild(option);
                });
            });

            // Kecamatan change event
            kecamatanSelect.addEventListener('change', function() {
                kelurahanSelect.innerHTML = '<option value="">Pilih Kelurahan</option>';

                kelurahanSelect.disabled = false;

                const selectedDistrictId = this.value;
                const filteredVillages = villages.filter(village => village.district_id === selectedDistrictId);

                filteredVillages.forEach(village => {
                    const option = document.createElement('option');
                    option.value = village.id;
                    option.textContent = village.name;
                    kelurahanSelect.appendChild(option);
                });
            });
        });
    </script>
</body>
</html>
