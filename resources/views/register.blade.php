<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <form action="{{ route('postregister') }}" method="POST">
            @csrf
            <div>
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div>
                <label for="universitas">Universitas:</label>
                <input type="text" name="universitas" id="universitas" required>
            </div>
            <div>
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" required>
            </div>
            <div>
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <select name="jenis_kelamin" id="jenis_kelamin" required>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div>
                <label for="no_hp">No HP:</label>
                <input type="text" name="no_hp" id="no_hp" required>
            </div>
            <div>
                <label for="penghasilan">Penghasilan:</label>
                <input type="text" name="penghasilan" id="penghasilan" required>
            </div>
            <div>
                <label for="pekerjaan">Pekerjaan:</label>
                <input type="text" name="pekerjaan" id="pekerjaan" required>
            </div>
            <div>
                <label for="provinsi">Provinsi:</label>
                <input type="text" name="provinsi" id="provinsi" required>
            </div>
            <div>
                <label for="kota">Kota:</label>
                <input type="text" name="kota" id="kota" required>
            </div>
            <div>
                <label for="kecamatan">Kecamatan:</label>
                <input type="text" name="kecamatan" id="kecamatan" required>
            </div>
            <div>
                <label for="kelurahan">Kelurahan:</label>
                <input type="text" name="kelurahan" id="kelurahan" required>
            </div>
            <div>
                <label for="kode_pos">Kode Pos:</label>
                <input type="text" name="kode_pos" id="kode_pos" required>
            </div>
            <div>
                <label for="alamat">Alamat:</label>
                <input type="text" name="alamat" id="alamat" required>
            </div>
            <button type="submit">Register</button>
        </form>
        <p>Sudah punya akun? <a href="{{ route('login') }}">Login disini</a></p>
    </div>
</body>
</html>
