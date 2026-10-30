
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') | Tasks for Today</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6fb;
            color: #172033;
        }

        nav {
            background: #101827;
            padding: 18px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 22px;
            font-size: 14px;
        }

        nav a:hover {
            color: #60a5fa;
        }

        .brand {
            font-weight: bold;
            letter-spacing: 1px;
        }

        main {
            max-width: 1050px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .hero {
            background: linear-gradient(120deg, #101827, #2563eb);
            color: white;
            padding: 35px;
            border-radius: 12px;
            margin-bottom: 25px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 18px rgba(0,0,0,.06);
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #101827;
            color: white;
            text-align: left;
        }

        th, td {
            padding: 14px;
            border-bottom: 1px solid #eee;
        }

        .status {
            background: #e5efff;
            color: #2563eb;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
        }

        footer {
            text-align: center;
            padding: 25px;
            color: #777;
            font-size: 13px;
        }

        @media (max-width: 650px) {
            nav {
                flex-direction: column;
                gap: 15px;
            }

            nav a {
                margin: 5px;
            }

            .card {
                overflow-x: auto;
            }

            table {
                min-width: 550px;
            }
        }
    </style>
</head>

<body>

    <nav>
        <a href="/" class="brand">TASKS FOR TODAY</a>

        <div>
            <a href="/">Today</a>
            <a href="/tasks">All Tasks</a>
            <a href="/profile">Profile</a>
            <a href="/about">About</a>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        Tasks for Today Management System | IT0049
    </footer>

</body>
</html>
