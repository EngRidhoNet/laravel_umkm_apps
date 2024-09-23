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
        return view('login');
    }

    public function postlogin(Request $request)
    {
        // dd($request->all());
        if (auth()->attempt($request->only('email', 'password'))) {
            return redirect('/dashboard');
        }

        return redirect('/login');
    }

    public function register()
    {
        return view('register');
    }

    public function postregister(Request $request)
    {
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
            'foto_profil' => 'required|url',
            'provinsi' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'kode_pos' => 'required',
            'alamat' => 'required',
        ]);

        // Enkripsi password
        $data['password'] = Hash::make($data['password']);
        // Buat pengguna baru
        $user = Mahasiswa::create($data);
        // Autentikasi pengguna baru
        Auth::login($user);
        // Generate token menggunakan Sanctum
        $token = $user->createToken('auth_token')->plainTextToken;
        // Kirim respons dengan token
        return response()->json(['token' => $token], 200);
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/login');
    }
}
