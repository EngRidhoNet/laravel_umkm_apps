@include('layouts.header')
<body>
    <div class="py-5 my-auto" style="background: linear-gradient(to right, #0DBDE5, #2DB08B)">
        <div class="container py-5 my-auto" style="min-height: 10vh; display: flex; flex-direction: column; justify-content: center;">
            <!-- Baris pertama dengan 5 kartu -->
            <div class="row justify-content-center text-center"> <!-- Tambahkan justify-content-center -->
                <!-- Kartu 1: Animasi dari kiri -->
                <div class="col-md-2 animate-from-left">
                    <div class="card shadow-sm p-3 mb-5 bg-white rounded-lg" style="height: 150px; border-radius: 10px;">
                        <div href="{{route('umkm')}}">
                            <img src="{{asset('images/umkm.png')}}" class="card-img-top mx-auto" alt="Galeri UMKM" style="width: 50%;">
                            <div class="card-body">
                                <h5 class="card-title" style="font-size: 14px;">UMKM</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Kartu 2: Animasi dari kanan -->
                <div class="col-md-2 animate-from-right">
                    <div class="card shadow-sm p-3 mb-5 bg-white rounded-lg" style="height: 150px; border-radius: 10px;">
                        <img src="{{asset('images/konsultasi.png')}}" class="card-img-top mx-auto" alt="Konsultasi UMKM" style="width: 50%;">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 14px;">Kategori</h5>
                        </div>
                    </div>
                </div>
                <!-- Kartu 3: Animasi dari kiri -->
                <div class="col-md-2 animate-from-left">
                    <div class="card shadow-sm p-3 mb-5 bg-white rounded-lg" style="height: 150px; border-radius: 10px;">
                        <img src="{{asset('images/informasi.png')}}" class="card-img-top mx-auto" alt="Informasi Bisnis" style="width: 50%;">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 14px;">Semua Lowongan</h5>
                        </div>
                    </div>
                </div>
                <!-- Kartu 4: Animasi dari kanan -->
                <div class="col-md-2 animate-from-right">
                    <div class="card shadow-sm p-3 mb-5 bg-white rounded-lg" style="height: 150px; border-radius: 10px;">
                        <img src="{{asset('images/chat.png')}}" class="card-img-top mx-auto" alt="Chat" style="width: 50%;">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 14px;">Chat</h5>
                        </div>
                    </div>
                </div>
                <!-- Kartu 5: Animasi dari kiri -->
                <div class="col-md-2 animate-from-left">
                    <div class="card shadow-sm p-3 mb-5 bg-white rounded-lg" style="height: 150px; border-radius: 10px;">
                        <img src="{{asset('images/blog.png')}}" class="card-img-top mx-auto" alt="Blog" style="width: 50%;">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 14px;">Blog</h5>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Baris kedua dengan 5 kartu -->
            <div class="row justify-content-center text-center"> <!-- Tambahkan justify-content-center -->
                <!-- Kartu 6: Animasi dari kiri -->
                <div class="col-md-2 animate-from-left">
                    <div class="card shadow-sm p-3 mb-5 bg-white rounded-lg" style="height: 150px; border-radius: 10px;">
                        <img src="{{asset('images/blog.png')}}" class="card-img-top mx-auto" alt="Blog" style="width: 50%;">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 14px;">Blog</h5>
                        </div>
                    </div>
                </div>
                <!-- Kartu 7: Animasi dari kanan -->
                <div class="col-md-2 animate-from-right">
                    <div class="card shadow-sm p-3 mb-5 bg-white rounded-lg" style="height: 150px; border-radius: 10px;">
                        <img src="{{asset('images/blog.png')}}" class="card-img-top mx-auto" alt="Blog" style="width: 50%;">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 14px;">Blog</h5>
                        </div>
                    </div>
                </div>
                <!-- Kartu 8: Animasi dari kiri -->
                <div class="col-md-2 animate-from-left">
                    <div class="card shadow-sm p-3 mb-5 bg-white rounded-lg" style="height: 150px; border-radius: 10px;">
                        <img src="{{asset('images/blog.png')}}" class="card-img-top mx-auto" alt="Blog" style="width: 50%;">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 14px;">Blog</h5>
                        </div>
                    </div>
                </div>
                <!-- Kartu 9: Animasi dari kanan -->
                <div class="col-md-2 animate-from-right">
                    <div class="card shadow-sm p-3 mb-5 bg-white rounded-lg" style="height: 150px; border-radius: 10px;">
                        <img src="{{asset('images/blog.png')}}" class="card-img-top mx-auto" alt="Blog" style="width: 50%;">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 14px;">Blog</h5>
                        </div>
                    </div>
                </div>
                <!-- Kartu 10: Animasi dari kiri -->
                <div class="col-md-2 animate-from-left">
                    <div class="card shadow-sm p-3 mb-5 bg-white rounded-lg" style="height: 150px; border-radius: 10px;">
                        <img src="{{asset('images/blog.png')}}" class="card-img-top mx-auto" alt="Blog" style="width: 50%;">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 14px;">Blog</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
