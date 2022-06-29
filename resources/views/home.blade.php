<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel API</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            font-size: 14px;
            width: 100%;
            height: 100vh;
            color: #fff;
            background-color: rgb(19, 19, 19);
        }
        .container {
            max-width: 960px;
            margin: 0 auto;
        }
        .container h1 {
            font-size: 2.5em;
            font-weight: 500;
            font-style: bold;
            margin-bottom: 10px 20px;
            color: rgb(247, 22, 22);
        }

        .card {
            background: rgb(84, 82, 82);
            border-radius: 2px;
            box-shadow: 0 2px 2px rgba(252, 244, 244, 0.2);
            padding: 10px 20px;
            margin-top: 20px;
        }

        a {
            color: #fff;
            background-color: rgb(250, 53, 53);
            padding: 4px 50px;
            text-decoration: none;
        }

        a:hover {
            background-color: rgb(215, 130, 39);
            color: rgb(247, 22, 22);
        }

        .card-header {
            font-size: 1.2em;
            font-weight: 500;
            font-style: bold;
            color: rgb(247, 22, 22);
        }

        .api-list {
           padding: 2px;
           display: flex;
           justify-content: space-between;
        }
    </style>
</head>
<body>
    <div class="body">
        <div class="container">
            <div class="card">
                <h1>Laravel API</h1>
            </div>
            <div class="card">
                <div class="api-list">
                    <p>
                        <a href="{{ route('api.home') }}">API</a>
                    </p>
                    <p>
                        Welcome to the Laravel API.
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="api-list">
                    <p>
                        <a href="{{ route('posts.show') }}">Post Crud</a>
                    </p>
                    <p>
                        Welcome to the database crud in laravel.
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>