<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>

    <!-- Include the Indie Flower font from Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap">

    <style>
        body {
            background-color: #FFF9D0;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .content {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        header {
            background-color: #0575E6;
            color: white;
            padding: 5px;
            text-align: center;
            width: 100%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        header h1 {
            margin: 0;
            cursor: pointer;
            font-family: 'Indie Flower', cursive; /* Maintain the Indie Flower font for the header */
        }

        .user-menu {
            margin-top: 10px;
            cursor: pointer;
            position: absolute;
            right: 20px;
            top: 20px;
        }

        .user-menu button {
            background-color: transparent;
            border: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .dropdown {
            display: none;
            position: absolute;
            top: 30px;
            right: 0;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            z-index: 1;
        }

        .dropdown a, .dropdown form button {
            display: block;
            padding: 10px 20px;
            text-align: left;
            text-decoration: none;
            color: #5AB2FF;
            border: none;
            background-color: white;
            width: 100%;
            box-sizing: border-box;
        }

        .dropdown a:hover, .dropdown form button:hover {
            background-color: #f0f0f0;
        }

        .container {
            max-width: 800px;
            width: 100%;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card {
            background-color: #fff;
            margin-top: 20px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card h3 {
            margin: 0;
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        .card .date {
            font-size: 14px;
            color: #888;
        }

        .card button {
            background-color: #0056b3;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 14px;
            border-radius: 4px;
            cursor: pointer;
        }

        .card button:hover {
            background-color: #003f7d;
        }
    </style>

    <script>
        function toggleDropdown() {
            var dropdown = document.getElementById('dropdown');
            if (dropdown.style.display === 'none' || dropdown.style.display === '') {
                dropdown.style.display = 'block';
            } else {
                dropdown.style.display = 'none';
            }
        }

        window.onclick = function(event) {
            if (!event.target.matches('.user-menu button')) {
                var dropdown = document.getElementById('dropdown');
                if (dropdown.style.display === 'block') {
                    dropdown.style.display = 'none';
                }
            }
        }
    </script>
</head>
<body>
    <div class="content">
        <header>
            <h1 onclick="window.location='{{ route('tasks.index') }}';">To Do List</h1>
            @auth
            <div class="user-menu">
                <button onclick="toggleDropdown()">Hello, {{ Auth::user()->name }}</button>
                <div class="dropdown" id="dropdown">
                    <a href="{{ route('profile.edit') }}">Profile</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </div>
            </div>
            @endauth
        </header>

        <div class="container">
            <div class="welcome">
                Welcome, ADMIN :)
            </div>

            <div class="card">
                <div>
                    <h3>Zoe Mart Derick Pabillaran</h3>
                    <div class="date">24 Aug 2022</div>
                </div>
                <button>Delete</button>
            </div>

            <div class="card">
                <div>
                    <h3>DERICK MART ZOE</h3>
                    <div class="date">24 Aug 2022</div>
                </div>
                <button>Delete</button>
            </div>

            <div class="card">
                <div>
                    <h3>MARK DERICK ZOE</h3>
                    <div class="date">24 Aug 2022</div>
                </div>
                <button>Delete</button>
            </div>
        </div>
    </div>
</body>
</html>
