<?php
namespace App\Http\Controllers;
use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        // dd($request->all());
        if (auth()->attempt($request->only('email', 'password'))) {
            return redirect('/dashboard');
        }

        return redirect('/login');
    }

    public function registermahasiswa()
    {
        return view('auth.register');
    }

    public function registerumkm()
    {
        return view('auth.registerumkm');
    }

    public function postregister(Request $request)
    {
        try {
            // Validasi data dari request
            $data = $request->validate([
                'nama' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:6',
                'universitas' => 'required',
                'tanggal_lahir' => 'required|date',
                'jenis_kelamin' => 'required',
                'no_hp' => 'required',
                'penghasilan' => 'required',
                'pekerjaan' => 'required',
                'foto_profil' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'provinsi' => 'required',
                'kota' => 'required',
                'kecamatan' => 'required',
                'kode_pos' => 'required',
                'alamat' => 'required',
            ]);

            // Enkripsi password
            $data['password'] = Hash::make($data['password']);

            // Ubah nama file foto profil
            if ($request->hasFile('foto_profil')) {
                $file = $request->file('foto_profil');
                $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                // Simpan file di folder public/images
                $file->move(public_path('images'), $filename);
                // Simpan nama file di data yang akan disimpan di database
                $data['foto_profil'] = 'images/' . $filename;
            }

            // Buat pengguna baru
            $user = Mahasiswa::create($data);

            // Autentikasi pengguna baru
            Auth::login($user);

            // Generate token menggunakan Sanctum
            $token = $user->createToken('auth_token')->plainTextToken;

            // Kirim respons dengan token
            return response()->json(['token' => $token], 200);
        } catch (\Exception $e) {
            // Tampilkan error detail dalam respons
            return response()->json([
                'error' => true,
                'message' => $e->getMessage(),
                'line' => $e->getLine(),
                'file' => $e->getFile(),
                'trace' => $e->getTraceAsString()
            ], 500);
        }
    }


    public function logout()
    {
        auth()->logout();
        return redirect('/login');
    }
}
