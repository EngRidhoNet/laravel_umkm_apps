<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding-top: 20px;
        }

        .profile-card {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .profile-card h2 {
            margin: 10px 0 5px 0;
            font-size: 24px;
        }

        .profile-card p {
            color: gray;
            margin: 5px 0 20px 0;
        }

        .profile-card .edit-btn {
            background-color: transparent;
            color: #00bfa6;
            border: 2px solid #00bfa6;
            border-radius: 20px;
            padding: 8px 16px;
            cursor: pointer;
            transition: 0.3s ease;
        }

        .profile-card .edit-btn:hover {
            background-color: #00bfa6;
            color: #fff;
        }

        .achievement-section {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .achievement-section h3 {
            margin-bottom: 20px;
            font-size: 20px;
        }

        .achievements {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .achievement-card {
            background-color: #f8f8f8;
            padding: 10px;
            border-radius: 10px;
            width: 23%;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .achievement-card img {
            width: 100%;
            height: 150px;
            border-radius: 10px;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .achievement-card p {
            margin: 0;
        }
    </style>
</head>

<body>
    @include('layouts.header')

    <div class="container">
        
        <!-- Profile Card -->
        <div class="profile-card">
            
            <img src="{{asset('images/banner-2.jpg')}}" alt="Profile Image">
            <h2>Rizal Senggek</h2>
            <p>Mahasiswa - Universitas Brawijaya</p>
            <button class="edit-btn">Edit profile</button>
        </div>

        <!-- Achievement Section -->
        <div class="achievement-section">
            <h3>Achievement</h3>
            <div class="achievements">
                <!-- Achievement Card 1 -->
                <div class="achievement-card">
                    <img src="{{asset('images/banner1.jpg')}}" alt="UMKM Image">
                    <p>Susu Mak Tam</p>
                </div>
                <!-- Achievement Card 2 -->
                <div class="achievement-card">
                    <img src="{{asset('images/banner-2.jpg')}}" alt="UMKM Image">
                    <p>Kebuli Ngebul</p>
                </div>
                <!-- Achievement Card 3 -->
                <div class="achievement-card">
                    <img src="{{asset('images/banner-2.jpg')}}" alt="UMKM Image">
                    <p>Kebuli Ngebul</p>
                </div>
                <div class="achievement-card">
                    <img src="{{asset('images/banner-2.jpg')}}" alt="UMKM Image">
                    <p>Kebuli Ngebul</p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>