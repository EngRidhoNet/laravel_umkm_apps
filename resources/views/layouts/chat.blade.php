<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat UI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .chat-list {
            max-height: 90vh;
            overflow-y: auto;
            border-right: 1px solid #dee2e6;
        }

        .chat-list .list-group-item {
            display: flex;
            align-items: center;
            padding: 15px;
        }

        .chat-list .list-group-item img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .chat-box {
            max-height: 80vh;
            overflow-y: auto;
        }

        .chat-box .message {
            display: flex;
            margin-bottom: 15px;
        }

        .chat-box .message .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: teal;
            margin-right: 10px;
        }

        .chat-box .message .text-box {
            background-color: #82c1c9;
            padding: 10px 15px;
            border-radius: 15px;
            color: white;
            max-width: 70%;
        }

        .chat-box .message.you {
            justify-content: flex-end;
        }

        .chat-box .message.you .text-box {
            background-color: #f1f1f1;
            color: #333;
        }

        .chat-input {
            border-top: 1px solid #dee2e6;
            padding: 10px;
        }
    </style>
</head>

<body>
    @include('layouts/header')
    <div class="container-fluid mt-5 shadow-lg" >
        <div class="row">
            <!-- Chat list -->
            <div class="col-md-3 chat-list">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <img src="https://via.placeholder.com/40" alt="User Avatar">
                        <div>
                            <strong>Kang Bakso</strong>
                            <p>Lorem ipsum dolor sit amet...</p>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <img src="https://via.placeholder.com/40" alt="User Avatar">
                        <div>
                            <strong>lalapan Mbok Minah</strong>
                            <p>Lorem ipsum dolor sit amet...</p>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <img src="https://via.placeholder.com/40" alt="User Avatar">
                        <div>
                            <strong>Dapur Gurihku</strong>
                            <p>Lorem ipsum dolor sit amet...</p>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <img src="https://via.placeholder.com/40" alt="User Avatar">
                        <div>
                            <strong>Kang Bakso</strong>
                            <p>Lorem ipsum dolor sit amet...</p>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <img src="https://via.placeholder.com/40" alt="User Avatar">
                        <div>
                            <strong>Kang Bakso</strong>
                            <p>Lorem ipsum dolor sit amet...</p>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <img src="https://via.placeholder.com/40" alt="User Avatar">
                        <div>
                            <strong>Kang Bakso</strong>
                            <p>Lorem ipsum dolor sit amet...</p>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <img src="https://via.placeholder.com/40" alt="User Avatar">
                        <div>
                            <strong>Kang Bakso</strong>
                            <p>Lorem ipsum dolor sit amet...</p>
                        </div>
                    </li>
                    <!-- Add more chat items as needed -->
                </ul>
            </div>

            <!-- Chat box -->
            <div class="col-md-9">
                <div class="chat-box p-3" >
                    <!-- Incoming message -->
                    <div class="message" >
                        <div class="avatar" style="background: linear-gradient(to right, #0DBDE5, #2DB08B)"></div>
                        <div class="text-box">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore.
                        </div>
                    </div>
                    <!-- Outgoing message -->
                    <div class="message you">
                        <div class="text-box" style="outline: 2px black;">
                            Mantep Bakso nya
                        </div>
                    </div>
                    <!-- More messages -->
                </div>

                <!-- Input area -->
                <div class="chat-input">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Ketik pesan anda disini...">
                        <button class="btn btn-primary"style="background: linear-gradient(to right, #0DBDE5, #2DB08B)" type="button">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>